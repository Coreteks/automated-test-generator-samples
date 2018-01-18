<?php

namespace tests;

use Mockery as m;
use Requests_Session;

class Requests_SessionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_url = null;
/**
* @var mixed
*/
protected $_headers = null;
/**
* @var mixed
*/
protected $_data = null;
/**
* @var mixed
*/
protected $_options = null;
/**
* @var \Requests_Session
*/
protected $requests_Session;

public function setUp()
{
    parent::setUp();

    $this->_url = null;
    $this->_headers = null;
    $this->_data = null;
    $this->_options = null;
    $this->requests_Session = new \Requests_Session($this->_url, $this->_headers, $this->_data, $this->_options);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->options[$key])) == false (line 84)

    $actual = $this->requests_Session->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->options[$key])) == true (line 84)

    $actual = $this->requests_Session->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Session->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Session->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->options[$key])) == false (line 116)

    $actual = $this->requests_Session->__unset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->options[$key])) == true (line 116)

    $actual = $this->requests_Session->__unset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Session->get($url, $headers, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHead0()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Session->head($url, $headers, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Session->delete($url, $headers, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPost0()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Session->post($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut0()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Session->put($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPatch0()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Session->patch($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest0()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Session->request($url, $headers, $data, $type, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple0()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Session->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple1()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Session->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
