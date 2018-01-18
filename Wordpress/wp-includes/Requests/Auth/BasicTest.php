<?php

namespace tests;

use Mockery as m;
use Requests_Auth_Basic;

class Requests_Auth_BasicTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_args = null;
/**
* @var \Requests_Auth_Basic
*/
protected $requests_Auth_Basic;

public function setUp()
{
    parent::setUp();

    $this->_args = null;
    $this->requests_Auth_Basic = new \Requests_Auth_Basic($this->_args);
}

public function testRegister0()
{
    $hooks = m::mock(\Requests_Hooks::class);

    // TODO: Your mock expectations here

    $actual = $this->requests_Auth_Basic->register($hooks);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurl_before_send0()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Auth_Basic->curl_before_send($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFsockopen_header0()
{
    $out = m::mock('UntypedParameter_out_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Auth_Basic->fsockopen_header($out);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAuthString0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Auth_Basic->getAuthString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
