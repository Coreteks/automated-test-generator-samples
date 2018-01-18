<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\Redirector;
use Illuminate\Routing\UrlGenerator;
use Mockery as m;

class RedirectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Illuminate\Routing\Redirector
*/
protected $redirector;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Illuminate\Routing\UrlGenerator::class);
    $this->redirector = new \Illuminate\Routing\Redirector($this->_generator);
}

public function testHome0()
{
    $status = m::mock('UntypedParameter_status_');

    // TODO: Your mock expectations here

    $actual = $this->redirector->home($status);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBack0()
{
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    $actual = $this->redirector->back($status, $headers, $fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRefresh0()
{
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    $actual = $this->redirector->refresh($status, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuest0()
{
    $path = m::mock('UntypedParameter_path_');
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    $actual = $this->redirector->guest($path, $status, $headers, $secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIntended0()
{
    $default = m::mock('UntypedParameter_default_');
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    $actual = $this->redirector->intended($default, $status, $headers, $secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo0()
{
    $path = m::mock('UntypedParameter_path_');
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    $actual = $this->redirector->to($path, $status, $headers, $secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAway0()
{
    $path = m::mock('UntypedParameter_path_');
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    $actual = $this->redirector->away($path, $status, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSecure0()
{
    $path = m::mock('UntypedParameter_path_');
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    $actual = $this->redirector->secure($path, $status, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRoute0()
{
    $route = m::mock('UntypedParameter_route_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    $actual = $this->redirector->route($route, $parameters, $status, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAction0()
{
    $action = m::mock('UntypedParameter_action_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $status = m::mock('UntypedParameter_status_');
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    $actual = $this->redirector->action($action, $parameters, $status, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUrlGenerator0()
{
    // TODO: Your mock expectations here

    $actual = $this->redirector->getUrlGenerator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetSession0()
{
    $session = m::mock(\Illuminate\Session\Store::class);

    // TODO: Your mock expectations here

    $actual = $this->redirector->setSession($session);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
