<?php

namespace tests;

use Mockery as m;
use SimplePie_XML_Declaration_Parser;

class SimplePie_XML_Declaration_ParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_data = null;
/**
* @var \SimplePie_XML_Declaration_Parser
*/
protected $simplePie_XML_Declaration_Parser;

public function setUp()
{
    parent::setUp();

    $this->_data = null;
    $this->simplePie_XML_Declaration_Parser = new \SimplePie_XML_Declaration_Parser($this->_data);
}

public function testParse0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->state && $this->state !== 'emit' && $this->has_data()) == false (line 130)
    // if ($this->state === 'emit') == false (line 136)

    $actual = $this->simplePie_XML_Declaration_Parser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->state && $this->state !== 'emit' && $this->has_data()) == false (line 130)
    // if ($this->state === 'emit') == true (line 136)

    $actual = $this->simplePie_XML_Declaration_Parser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->state && $this->state !== 'emit' && $this->has_data()) == true (line 130)
    // while ($this->state && $this->state !== 'emit' && $this->has_data()) == false (line 130)
    // if ($this->state === 'emit') == false (line 136)

    $actual = $this->simplePie_XML_Declaration_Parser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->state && $this->state !== 'emit' && $this->has_data()) == true (line 130)
    // while ($this->state && $this->state !== 'emit' && $this->has_data()) == false (line 130)
    // if ($this->state === 'emit') == true (line 136)

    $actual = $this->simplePie_XML_Declaration_Parser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_data0()
{
    // TODO: Your mock expectations here

    $actual = $this->simplePie_XML_Declaration_Parser->has_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkip_whitespace0()
{
    // TODO: Your mock expectations here

    $actual = $this->simplePie_XML_Declaration_Parser->skip_whitespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_value0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($quote === '"' || $quote === "'") == false (line 178)

    $actual = $this->simplePie_XML_Declaration_Parser->get_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_value1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($quote === '"' || $quote === "'") == true (line 178)
    // if ($this->has_data()) == false (line 182)

    $actual = $this->simplePie_XML_Declaration_Parser->get_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_value2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($quote === '"' || $quote === "'") == true (line 178)
    // if ($this->has_data()) == true (line 182)

    $actual = $this->simplePie_XML_Declaration_Parser->get_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_version_name0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->skip_whitespace()) == false (line 194)

    $actual = $this->simplePie_XML_Declaration_Parser->before_version_name();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_version_name1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->skip_whitespace()) == true (line 194)

    $actual = $this->simplePie_XML_Declaration_Parser->before_version_name();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion_name0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->data, $this->position, 7) === 'version') == false (line 206)

    $actual = $this->simplePie_XML_Declaration_Parser->version_name();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion_name1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->data, $this->position, 7) === 'version') == true (line 206)

    $actual = $this->simplePie_XML_Declaration_Parser->version_name();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion_equals0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->data, $this->position, 1) === '=') == false (line 220)

    $actual = $this->simplePie_XML_Declaration_Parser->version_equals();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion_equals1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->data, $this->position, 1) === '=') == true (line 220)

    $actual = $this->simplePie_XML_Declaration_Parser->version_equals();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion_value0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->version = $this->get_value()) == false (line 234)

    $actual = $this->simplePie_XML_Declaration_Parser->version_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion_value1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->version = $this->get_value()) == true (line 234)
    // if ($this->has_data()) == false (line 237)

    $actual = $this->simplePie_XML_Declaration_Parser->version_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion_value2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->version = $this->get_value()) == true (line 234)
    // if ($this->has_data()) == true (line 237)

    $actual = $this->simplePie_XML_Declaration_Parser->version_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncoding_name0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->data, $this->position, 8) === 'encoding') == false (line 254)

    $actual = $this->simplePie_XML_Declaration_Parser->encoding_name();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncoding_name1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->data, $this->position, 8) === 'encoding') == true (line 254)

    $actual = $this->simplePie_XML_Declaration_Parser->encoding_name();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncoding_equals0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->data, $this->position, 1) === '=') == false (line 268)

    $actual = $this->simplePie_XML_Declaration_Parser->encoding_equals();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncoding_equals1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->data, $this->position, 1) === '=') == true (line 268)

    $actual = $this->simplePie_XML_Declaration_Parser->encoding_equals();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncoding_value0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encoding = $this->get_value()) == false (line 282)

    $actual = $this->simplePie_XML_Declaration_Parser->encoding_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncoding_value1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encoding = $this->get_value()) == true (line 282)
    // if ($this->has_data()) == false (line 285)

    $actual = $this->simplePie_XML_Declaration_Parser->encoding_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncoding_value2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->encoding = $this->get_value()) == true (line 282)
    // if ($this->has_data()) == true (line 285)

    $actual = $this->simplePie_XML_Declaration_Parser->encoding_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStandalone_name0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->data, $this->position, 10) === 'standalone') == false (line 302)

    $actual = $this->simplePie_XML_Declaration_Parser->standalone_name();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStandalone_name1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->data, $this->position, 10) === 'standalone') == true (line 302)

    $actual = $this->simplePie_XML_Declaration_Parser->standalone_name();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStandalone_equals0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->data, $this->position, 1) === '=') == false (line 316)

    $actual = $this->simplePie_XML_Declaration_Parser->standalone_equals();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStandalone_equals1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->data, $this->position, 1) === '=') == true (line 316)

    $actual = $this->simplePie_XML_Declaration_Parser->standalone_equals();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStandalone_value0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($standalone = $this->get_value()) == false (line 330)

    $actual = $this->simplePie_XML_Declaration_Parser->standalone_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStandalone_value1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($standalone = $this->get_value()) == true (line 330)
    // switch ($standalone) (line 332)
    // Case 'yes' == false (line 334)
    // Case 'no' == false (line 338)
    // Default (line 342)

    $actual = $this->simplePie_XML_Declaration_Parser->standalone_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStandalone_value2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($standalone = $this->get_value()) == true (line 330)
    // switch ($standalone) (line 332)
    // Case 'yes' == false (line 334)
    // Case 'no' == true (line 338)
    // if ($this->has_data()) == false (line 348)

    $actual = $this->simplePie_XML_Declaration_Parser->standalone_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStandalone_value3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($standalone = $this->get_value()) == true (line 330)
    // switch ($standalone) (line 332)
    // Case 'yes' == false (line 334)
    // Case 'no' == true (line 338)
    // if ($this->has_data()) == true (line 348)

    $actual = $this->simplePie_XML_Declaration_Parser->standalone_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStandalone_value4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($standalone = $this->get_value()) == true (line 330)
    // switch ($standalone) (line 332)
    // Case 'yes' == true (line 334)
    // if ($this->has_data()) == false (line 348)

    $actual = $this->simplePie_XML_Declaration_Parser->standalone_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStandalone_value5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($standalone = $this->get_value()) == true (line 330)
    // switch ($standalone) (line 332)
    // Case 'yes' == true (line 334)
    // if ($this->has_data()) == true (line 348)

    $actual = $this->simplePie_XML_Declaration_Parser->standalone_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
