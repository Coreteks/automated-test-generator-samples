<?php

namespace tests\Illuminate\Session\Middleware;

use Illuminate\Session\Middleware\StartSession;
use Illuminate\Session\SessionManager;
use Mockery as m;

class StartSessionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_manager;
/**
* @var \Illuminate\Session\Middleware\StartSession
*/
protected $startSession;

public function setUp()
{
    parent::setUp();

    $this->_manager = m::mock(\Illuminate\Session\SessionManager::class);
    $this->startSession = new \Illuminate\Session\Middleware\StartSession($this->_manager);
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->sessionConfigured()) == false (line 55)
    // if ($this->sessionConfigured()) == false (line 68)

    $actual = $this->startSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->sessionConfigured()) == false (line 55)
    // if ($this->sessionConfigured()) == true (line 68)

    $actual = $this->startSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->sessionConfigured()) == true (line 55)
    // if ($this->sessionConfigured()) == false (line 68)

    $actual = $this->startSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->sessionConfigured()) == true (line 55)
    // if ($this->sessionConfigured()) == true (line 68)

    $actual = $this->startSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTerminate0()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->sessionHandled && $this->sessionConfigured() && !$this->usingCookieSessions()) == false (line 86)

    $actual = $this->startSession->terminate($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTerminate1()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->sessionHandled && $this->sessionConfigured() && !$this->usingCookieSessions()) == true (line 86)

    $actual = $this->startSession->terminate($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSession0()
{
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->startSession->getSession($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
