<?php

namespace tests;

use Mockery as m;
use Requests_Proxy_HTTP;

class Requests_Proxy_HTTPTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_args = null;
/**
* @var \Requests_Proxy_HTTP
*/
protected $requests_Proxy_HTTP;

public function setUp()
{
    parent::setUp();

    $this->_args = null;
    $this->requests_Proxy_HTTP = new \Requests_Proxy_HTTP($this->_args);
}

public function testRegister0()
{
    $hooks = m::mock(\Requests_Hooks::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->use_authentication) == false (line 90)

    $actual = $this->requests_Proxy_HTTP->register($hooks);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister1()
{
    $hooks = m::mock(\Requests_Hooks::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->use_authentication) == true (line 90)

    $actual = $this->requests_Proxy_HTTP->register($hooks);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurl_before_send0()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->use_authentication) == false (line 105)

    $actual = $this->requests_Proxy_HTTP->curl_before_send($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurl_before_send1()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->use_authentication) == true (line 105)

    $actual = $this->requests_Proxy_HTTP->curl_before_send($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFsockopen_remote_socket0()
{
    $remote_socket = m::mock('UntypedParameter_remote_socket_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Proxy_HTTP->fsockopen_remote_socket($remote_socket);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFsockopen_remote_host_path0()
{
    $path = m::mock('UntypedParameter_path_');
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Proxy_HTTP->fsockopen_remote_host_path($path, $url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFsockopen_header0()
{
    $out = m::mock('UntypedParameter_out_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Proxy_HTTP->fsockopen_header($out);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_auth_string0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Proxy_HTTP->get_auth_string();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
