<?php

namespace tests;

use Mockery as m;
use WP_HTTP_Response;

class WP_HTTP_ResponseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_data = null;
/**
* @var mixed
*/
protected $_status = null;
/**
* @var mixed
*/
protected $_headers = null;
/**
* @var \WP_HTTP_Response
*/
protected $wP_HTTP_Response;

public function setUp()
{
    parent::setUp();

    $this->_data = null;
    $this->_status = null;
    $this->_headers = null;
    $this->wP_HTTP_Response = new \WP_HTTP_Response($this->_data, $this->_status, $this->_headers);
}

public function testGet_headers0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Response->get_headers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_headers0()
{
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Response->set_headers($headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHeader0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $replace = m::mock('UntypedParameter_replace_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($replace || !isset($this->headers[$key])) == false (line 89)

    $actual = $this->wP_HTTP_Response->header($key, $value, $replace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHeader1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $replace = m::mock('UntypedParameter_replace_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($replace || !isset($this->headers[$key])) == true (line 89)

    $actual = $this->wP_HTTP_Response->header($key, $value, $replace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_status0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Response->get_status();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_status0()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Response->set_status($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Response->get_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_data0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Response->set_data($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJsonSerialize0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Response->jsonSerialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
