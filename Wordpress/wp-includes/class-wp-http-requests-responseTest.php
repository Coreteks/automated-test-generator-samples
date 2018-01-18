<?php

namespace tests;

use Mockery as m;
use Requests_Response;
use WP_HTTP_Requests_Response;

class WP_HTTP_Requests_ResponseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_response;
/**
* @var mixed
*/
protected $_filename = null;
/**
* @var \WP_HTTP_Requests_Response
*/
protected $wP_HTTP_Requests_Response;

public function setUp()
{
    parent::setUp();

    $this->_response = m::mock(\Requests_Response::class);
    $this->_filename = null;
    $this->wP_HTTP_Requests_Response = new \WP_HTTP_Requests_Response($this->_response, $this->_filename);
}

public function testGet_response_object0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Requests_Response->get_response_object();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_headers0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Requests_Response->get_headers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_headers1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($value) === 1) == false (line 72)

    $actual = $this->wP_HTTP_Requests_Response->get_headers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_headers2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($value) === 1) == true (line 72)

    $actual = $this->wP_HTTP_Requests_Response->get_headers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_headers0()
{
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Requests_Response->set_headers($headers);
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
    // if ($replace) == false (line 104)

    $actual = $this->wP_HTTP_Requests_Response->header($key, $value, $replace);
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
    // if ($replace) == true (line 104)

    $actual = $this->wP_HTTP_Requests_Response->header($key, $value, $replace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_status0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Requests_Response->get_status();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_status0()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Requests_Response->set_status($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Requests_Response->get_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_data0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Requests_Response->set_data($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_cookies0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Requests_Response->get_cookies();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_cookies1()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Requests_Response->get_cookies();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_array0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Requests_Response->to_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
