<?php

use PHPUnit\Framework\TestCase;

class InvoiceGeneratorTest extends TestCase
{
    private $nameToType = [];

    public function test_generate_xml()
    {
        $invoice = new \Uctoplus\UblWrapper\UBL\v21\MainDoc\Invoice();
        $invoice->setID(1);
        $invoice->setIssueDate(\Carbon\Carbon::now());
        $invoice->addNote("Note No. 1!!!");
        $invoice->addNote(new \Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType("Note No. 2!!!", ["languageID" => "en"]));

        dump($invoice->toXML()->saveXML());
    }

    /**
     * @depends test_generate_xml
     */
    public function test_parse_xml()
    {

    }

    /**
     * @return void
     */
    public function generateCacClasses()
    {
        $file = file_get_contents('resources/scheme/ubl_cac_21.xsd');

        $xml = simplexml_load_string($file);

        $nameToType = [];

        /** @var DOMNode $element */
        //elements -> name => type
        foreach ($xml->xpath('//xsd:element') as $element) {
            $attributes = $element->attributes();

            if (empty($attributes['ref'])) {
                $nameToType[(string)$attributes['name']] = (string)$attributes['type'];
            } else {
                break;
            }
        }

        $this->nameToType = $nameToType;

        $domDoc = new DOMDocument();
        $domDoc->load('resources/scheme/ubl_cac_21.xsd');

        $xpathvar = new DOMXPath($domDoc);

        //complex types
        $complexTypes = [];

        /** @var DOMElement $complexType */
        foreach ($xpathvar->query('//xsd:complexType') as $complexType) {
            $name = $complexType->getAttribute('name');

            /** @var DOMElement $xsdElement */
            foreach ($xpathvar->query('.//xsd:element', $complexType) as $xsdElement) {
                $xsdElementData = [
                    'name' => $xsdElement->getAttribute('ref'),
                    'minOccurs' => $xsdElement->getAttribute('minOccurs'),
                    'maxOccurs' => $xsdElement->getAttribute('maxOccurs'),
                ];

                $complexTypes[$name][] = $xsdElementData;
            }
        }

        //generates
        foreach ($complexTypes as $name => $complexType) {
            $this->_generateClassFile($name, $complexType);
        }
    }

    private function _getClass($type): array
    {
        $class = null;
        $_type = null;

        $_testClass = 'Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\\' . $type;
        if (class_exists($_testClass)) {
            $class = $_testClass;
            $_type = 'BasicComponent';
        }

        $_testClass = 'Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\\' . $type;
        if (class_exists($_testClass)) {
            $class = $_testClass;
            $_type = 'AggregateComponent';
        }

        return [
            'class' => $class,
            'type' => $_type,
        ];
    }

    /**
     * @param $name
     * @param $complexType
     * @param $forCbcType
     * @return void
     * @throws Exception
     */
    private function _generateClassFile($name, $complexType, $forCbcType = false)
    {
        $type = $name;
        $classData = $this->_getClass($type);

        if (empty($classData['class']))
            throw new Exception('Empty class data');

        $class = $classData['class'];
        $componentType = $classData['type'];

        $uses = [];
        $casts = [];
        $minOccurs = [];
        $methods = [];

        $_schema = $componentType == 'AggregateComponent'
            ? 'Uctoplus\UblWrapper\UBL\Schema\AggregateComponent'
            : 'Uctoplus\UblWrapper\UBL\Schema\BasicComponent';
        $uses[] = $_schema;

        //process
        foreach ($complexType as $castData) {
            if ($forCbcType) {
                //type
                $_cxcVal = $castData['type'];
            } else {
                //..casts
                $_cxcVal = $castData['name'];
            }

            $_subElementName = str_replace(['cbc:', 'cac:', 'udt:'], '', $_cxcVal);
            $_type = $this->getTypeFromName($_subElementName);
            $_classData = $this->_getClass($_type);

            $_className = substr($_classData['class'], strrpos($_classData['class'], '\\') + 1);
            $casts[$_cxcVal] = $_className;
            $casts[$_cxcVal] .= '::class';

            //..uses
            if (!$forCbcType) {
                if (!in_array($_classData['class'], $uses) && $_classData['class'] != $class)
                    $uses[] = $_classData['class'];
            }

            //methods
            if ($forCbcType) {
                $methods[] = 'mixed get' . $_subElementName . '()';
                $methods[] = 'self set' . $_subElementName . '(string $value)';
            } else {
                $methods[] = 'mixed get' . $_subElementName . '()'; //TODO >>
                $methods[] = 'self set' . $_subElementName . '($value)';
            }

            if (!$forCbcType) {
                //..array?
                if ($castData['maxOccurs'] > 1 || $castData['maxOccurs'] == 'unbounded') {
                    $casts[$_cxcVal] .= ' . "[]"';
                }

                //..minOccurs
                if ($castData['minOccurs'] >= 1) {
                    $minOccurs[$_cxcVal] = $castData['minOccurs'];
                }
            }
        }

//        dd($uses, $casts, $minOccurs);

        //file generation
        $content = '<?php' . PHP_EOL;

        $_namespace = substr($class, 0, strrpos($class, '\\'));
        $content .= 'namespace ' . $_namespace . ';' . PHP_EOL;

        //uses
        foreach ($uses as $use) {
            $content .= 'use ' . $use . ';' . PHP_EOL;
        }

        //methods
        if (count($methods)) {
            $content .= PHP_EOL . '/**' . PHP_EOL;
            $content .= '*' . PHP_EOL;

            foreach ($methods as $method) {
                $content .= '* @method ' . $method . PHP_EOL;
            }

            $content .= '*/' . PHP_EOL;
        }

        //class
        $content .= 'class ' . $type . ' extends ' . $componentType . PHP_EOL;
        $content .= '{' . PHP_EOL;

        if ($forCbcType) {
            //type
            $content .= 'protected $type = "' . array_key_first($casts) . '";' . PHP_EOL;
        } else {
            //casts
            $content .= 'protected $casts = [' . PHP_EOL;
            foreach ($casts as $cxcVal => $cast) {
                $content .= '"' . $cxcVal . '" => ' . $cast . ',' . PHP_EOL;
            }
            $content .= '];' . PHP_EOL;

            $content .= PHP_EOL;

            //minOccurs
            $content .= 'protected $minOccurs = [' . PHP_EOL;
            foreach ($minOccurs as $cxcVal => $minOccur) {
                $content .= '"' . $cxcVal . '" => ' . $minOccur . ',' . PHP_EOL;
            }
            $content .= '];' . PHP_EOL;
        }

        $content .= '}';

        try {
            $reflector = new ReflectionClass($class);

            file_put_contents($reflector->getFileName(), $content);
        } catch (Throwable $throwable) {
            dd($throwable);
        }
    }

    private function getTypeFromName($name)
    {
        return $this->nameToType[$name] ?? $name . 'Type';
    }

    /**
     * @return void
     * @test
     */
    public function generateCbcClasses()
    {
        $file = file_get_contents('resources/scheme/ubl_cbc_21.xsd');

        $xml = simplexml_load_string($file);

        $nameToType = [];

        /** @var DOMNode $element */
        //elements -> name => type
        foreach ($xml->xpath('//xsd:element') as $element) {
            $attributes = $element->attributes();

            if (empty($attributes['ref'])) {
                $nameToType[(string)$attributes['name']] = (string)$attributes['type'];
            } else {
                break;
            }
        }

        $this->nameToType = $nameToType;

        $domDoc = new DOMDocument();
        $domDoc->load('resources/scheme/ubl_cbc_21.xsd');

        $xpathvar = new DOMXPath($domDoc);

        /** @var DOMElement $complexType */
        foreach ($xpathvar->query('//xsd:complexType') as $complexType) {
            $name = $complexType->getAttribute('name');

            /** @var DOMElement $xsdElement */
            foreach ($xpathvar->query('.//xsd:extension', $complexType) as $xsdElement) {
                $complexTypes[$name][] = [
                    'type' => $xsdElement->getAttribute('base')
                ];
            }
        }

        //generates
        foreach ($complexTypes as $name => $complexType) {
            $this->_generateClassFile($name, $complexType, true);
        }
    }
}