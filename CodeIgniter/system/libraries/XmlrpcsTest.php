<?php

namespace tests;

use CI_Xmlrpcs;
use Mockery as m;

class CI_XmlrpcsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_config = null;
/**
* @var \CI_Xmlrpcs
*/
protected $cI_Xmlrpcs;

public function setUp()
{
    parent::setUp();

    $this->_config = null;
    $this->cI_Xmlrpcs = new \CI_Xmlrpcs($this->_config);
}

public function testInitialize0()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == false (line 120)
    // if (isset($config['debug'])) == false (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == false (line 130)
    // if (isset($config['xss_clean'])) == false (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize1()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == false (line 120)
    // if (isset($config['debug'])) == false (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == false (line 130)
    // if (isset($config['xss_clean'])) == true (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize2()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == false (line 120)
    // if (isset($config['debug'])) == false (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == true (line 130)
    // if (isset($config['xss_clean'])) == false (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize3()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == false (line 120)
    // if (isset($config['debug'])) == false (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == true (line 130)
    // if (isset($config['xss_clean'])) == true (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize4()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == false (line 120)
    // if (isset($config['debug'])) == true (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == false (line 130)
    // if (isset($config['xss_clean'])) == false (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize5()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == false (line 120)
    // if (isset($config['debug'])) == true (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == false (line 130)
    // if (isset($config['xss_clean'])) == true (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize6()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == false (line 120)
    // if (isset($config['debug'])) == true (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == true (line 130)
    // if (isset($config['xss_clean'])) == false (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize7()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == false (line 120)
    // if (isset($config['debug'])) == true (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == true (line 130)
    // if (isset($config['xss_clean'])) == true (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize8()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == true (line 120)
    // if (isset($config['debug'])) == false (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == false (line 130)
    // if (isset($config['xss_clean'])) == false (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize9()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == true (line 120)
    // if (isset($config['debug'])) == false (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == false (line 130)
    // if (isset($config['xss_clean'])) == true (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize10()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == true (line 120)
    // if (isset($config['debug'])) == false (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == true (line 130)
    // if (isset($config['xss_clean'])) == false (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize11()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == true (line 120)
    // if (isset($config['debug'])) == false (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == true (line 130)
    // if (isset($config['xss_clean'])) == true (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize12()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == true (line 120)
    // if (isset($config['debug'])) == true (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == false (line 130)
    // if (isset($config['xss_clean'])) == false (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize13()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == true (line 120)
    // if (isset($config['debug'])) == true (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == false (line 130)
    // if (isset($config['xss_clean'])) == true (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize14()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == true (line 120)
    // if (isset($config['debug'])) == true (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == true (line 130)
    // if (isset($config['xss_clean'])) == false (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize15()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['functions']) && \is_array($config['functions'])) == true (line 120)
    // if (isset($config['debug'])) == true (line 125)
    // if (isset($config['object']) && \is_object($config['object'])) == true (line 130)
    // if (isset($config['xss_clean'])) == true (line 135)

    $actual = $this->cI_Xmlrpcs->initialize($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_system_methods0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Xmlrpcs->set_system_methods();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Xmlrpcs->serve();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_to_map0()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $function = m::mock('UntypedParameter_function_');
    $sig = m::mock('UntypedParameter_sig_');
    $doc = m::mock('UntypedParameter_doc_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Xmlrpcs->add_to_map($methodname, $function, $sig, $doc);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest1()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest2()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest3()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest4()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == false (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest5()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == false (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest6()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == false (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest7()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == false (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest8()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == true (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest9()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == true (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest10()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == true (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest11()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == true (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest12()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == true (line 267)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest13()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == true (line 257)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest14()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == false (line 221)
    // if (!\xml_parse($parser, $data, 1)) == true (line 257)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest15()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest16()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest17()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest18()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest19()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == false (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest20()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == false (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest21()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == false (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest22()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == false (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest23()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == true (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest24()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == true (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest25()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == true (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest26()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == true (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest27()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == true (line 267)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest28()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == true (line 257)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest29()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == false (line 224)
    // if (!\xml_parse($parser, $data, 1)) == true (line 257)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest30()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest31()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest32()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest33()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest34()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == false (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest35()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == false (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest36()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == false (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest37()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == false (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest38()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == true (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest39()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == true (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == false (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest40()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == true (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest41()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == false (line 267)
    // for (...) == true (line 278)
    // if ($this->debug === \TRUE) == true (line 280)
    // for (...) == false (line 278)
    // if ($this->debug === \TRUE) == true (line 288)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest42()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == false (line 257)
    // if ($parser_object->xh[$pname]['isf']) == true (line 267)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest43()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == true (line 257)
    // if ($this->debug === \TRUE) == false (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseRequest44()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === '') == true (line 221)
    // if ($CI->input->method() === 'post') == true (line 224)
    // if (!\xml_parse($parser, $data, 1)) == true (line 257)
    // if ($this->debug === \TRUE) == true (line 300)

    $actual = $this->cI_Xmlrpcs->parseRequest($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListMethods0()
{
    $m = m::mock('UntypedParameter_m_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Xmlrpcs->listMethods($m);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListMethods1()
{
    $m = m::mock('UntypedParameter_m_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Xmlrpcs->listMethods($m);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListMethods2()
{
    $m = m::mock('UntypedParameter_m_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Xmlrpcs->listMethods($m);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListMethods3()
{
    $m = m::mock('UntypedParameter_m_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Xmlrpcs->listMethods($m);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature0()
{
    $m = m::mock('UntypedParameter_m_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->methods[$method_name])) == false (line 452)

    $actual = $this->cI_Xmlrpcs->methodSignature($m);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature1()
{
    $m = m::mock('UntypedParameter_m_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->methods[$method_name])) == true (line 452)
    // if ($this->methods[$method_name]['signature']) == false (line 454)

    $actual = $this->cI_Xmlrpcs->methodSignature($m);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature2()
{
    $m = m::mock('UntypedParameter_m_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->methods[$method_name])) == true (line 452)
    // if ($this->methods[$method_name]['signature']) == true (line 454)
    // for (...) == false (line 459)

    $actual = $this->cI_Xmlrpcs->methodSignature($m);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature3()
{
    $m = m::mock('UntypedParameter_m_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->methods[$method_name])) == true (line 452)
    // if ($this->methods[$method_name]['signature']) == true (line 454)
    // for (...) == true (line 459)
    // for (...) == false (line 463)
    // for (...) == false (line 459)

    $actual = $this->cI_Xmlrpcs->methodSignature($m);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodSignature4()
{
    $m = m::mock('UntypedParameter_m_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->methods[$method_name])) == true (line 452)
    // if ($this->methods[$method_name]['signature']) == true (line 454)
    // for (...) == true (line 459)
    // for (...) == true (line 463)
    // for (...) == false (line 463)
    // for (...) == false (line 459)

    $actual = $this->cI_Xmlrpcs->methodSignature($m);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodHelp0()
{
    $m = m::mock('UntypedParameter_m_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->methods[$method_name])) == false (line 492)

    $actual = $this->cI_Xmlrpcs->methodHelp($m);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethodHelp1()
{
    $m = m::mock('UntypedParameter_m_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->methods[$method_name])) == true (line 492)

    $actual = $this->cI_Xmlrpcs->methodHelp($m);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulticall0()
{
    $m = m::mock('UntypedParameter_m_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Xmlrpcs->multicall($m);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulticall_error0()
{
    $err = m::mock('UntypedParameter_err_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Xmlrpcs->multicall_error($err);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_multicall0()
{
    $call = m::mock('UntypedParameter_call_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($call->kindOf() !== 'struct') == false (line 572)
    // if (!($methName = $call->me['struct']['methodName'])) == false (line 576)
    // if ($methName->kindOf() !== 'scalar' or $scalar_type !== 'string') == false (line 584)
    // if ($scalar_value === 'system.multicall') == false (line 588)
    // if (!($params = $call->me['struct']['params'])) == false (line 592)
    // if ($params->kindOf() !== 'array') == false (line 596)
    // for (...) == false (line 604)
    // if ($result->faultCode() !== 0) == false (line 611)

    $actual = $this->cI_Xmlrpcs->do_multicall($call);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_multicall1()
{
    $call = m::mock('UntypedParameter_call_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($call->kindOf() !== 'struct') == false (line 572)
    // if (!($methName = $call->me['struct']['methodName'])) == false (line 576)
    // if ($methName->kindOf() !== 'scalar' or $scalar_type !== 'string') == false (line 584)
    // if ($scalar_value === 'system.multicall') == false (line 588)
    // if (!($params = $call->me['struct']['params'])) == false (line 592)
    // if ($params->kindOf() !== 'array') == false (line 596)
    // for (...) == false (line 604)
    // if ($result->faultCode() !== 0) == true (line 611)

    $actual = $this->cI_Xmlrpcs->do_multicall($call);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_multicall2()
{
    $call = m::mock('UntypedParameter_call_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($call->kindOf() !== 'struct') == false (line 572)
    // if (!($methName = $call->me['struct']['methodName'])) == false (line 576)
    // if ($methName->kindOf() !== 'scalar' or $scalar_type !== 'string') == false (line 584)
    // if ($scalar_value === 'system.multicall') == false (line 588)
    // if (!($params = $call->me['struct']['params'])) == false (line 592)
    // if ($params->kindOf() !== 'array') == false (line 596)
    // for (...) == true (line 604)
    // for (...) == false (line 604)
    // if ($result->faultCode() !== 0) == false (line 611)

    $actual = $this->cI_Xmlrpcs->do_multicall($call);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_multicall3()
{
    $call = m::mock('UntypedParameter_call_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($call->kindOf() !== 'struct') == false (line 572)
    // if (!($methName = $call->me['struct']['methodName'])) == false (line 576)
    // if ($methName->kindOf() !== 'scalar' or $scalar_type !== 'string') == false (line 584)
    // if ($scalar_value === 'system.multicall') == false (line 588)
    // if (!($params = $call->me['struct']['params'])) == false (line 592)
    // if ($params->kindOf() !== 'array') == false (line 596)
    // for (...) == true (line 604)
    // for (...) == false (line 604)
    // if ($result->faultCode() !== 0) == true (line 611)

    $actual = $this->cI_Xmlrpcs->do_multicall($call);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_multicall4()
{
    $call = m::mock('UntypedParameter_call_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($call->kindOf() !== 'struct') == false (line 572)
    // if (!($methName = $call->me['struct']['methodName'])) == false (line 576)
    // if ($methName->kindOf() !== 'scalar' or $scalar_type !== 'string') == false (line 584)
    // if ($scalar_value === 'system.multicall') == false (line 588)
    // if (!($params = $call->me['struct']['params'])) == false (line 592)
    // if ($params->kindOf() !== 'array') == true (line 596)

    $actual = $this->cI_Xmlrpcs->do_multicall($call);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_multicall5()
{
    $call = m::mock('UntypedParameter_call_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($call->kindOf() !== 'struct') == false (line 572)
    // if (!($methName = $call->me['struct']['methodName'])) == false (line 576)
    // if ($methName->kindOf() !== 'scalar' or $scalar_type !== 'string') == false (line 584)
    // if ($scalar_value === 'system.multicall') == false (line 588)
    // if (!($params = $call->me['struct']['params'])) == true (line 592)

    $actual = $this->cI_Xmlrpcs->do_multicall($call);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_multicall6()
{
    $call = m::mock('UntypedParameter_call_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($call->kindOf() !== 'struct') == false (line 572)
    // if (!($methName = $call->me['struct']['methodName'])) == false (line 576)
    // if ($methName->kindOf() !== 'scalar' or $scalar_type !== 'string') == false (line 584)
    // if ($scalar_value === 'system.multicall') == true (line 588)

    $actual = $this->cI_Xmlrpcs->do_multicall($call);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_multicall7()
{
    $call = m::mock('UntypedParameter_call_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($call->kindOf() !== 'struct') == false (line 572)
    // if (!($methName = $call->me['struct']['methodName'])) == false (line 576)
    // if ($methName->kindOf() !== 'scalar' or $scalar_type !== 'string') == true (line 584)

    $actual = $this->cI_Xmlrpcs->do_multicall($call);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_multicall8()
{
    $call = m::mock('UntypedParameter_call_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($call->kindOf() !== 'struct') == false (line 572)
    // if (!($methName = $call->me['struct']['methodName'])) == true (line 576)

    $actual = $this->cI_Xmlrpcs->do_multicall($call);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_multicall9()
{
    $call = m::mock('UntypedParameter_call_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($call->kindOf() !== 'struct') == true (line 572)

    $actual = $this->cI_Xmlrpcs->do_multicall($call);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
