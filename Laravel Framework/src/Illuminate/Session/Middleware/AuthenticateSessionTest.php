<?php

namespace tests\Illuminate\Session\Middleware;

use Illuminate\Contracts\Auth\Factory;
use Illuminate\Session\Middleware\AuthenticateSession;
use Mockery as m;

class AuthenticateSessionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_auth;
/**
* @var \Illuminate\Session\Middleware\AuthenticateSession
*/
protected $authenticateSession;

public function setUp()
{
    parent::setUp();

    $this->_auth = m::mock(\Illuminate\Contracts\Auth\Factory::class);
    $this->authenticateSession = new \Illuminate\Session\Middleware\AuthenticateSession($this->_auth);
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request->user() || !$request->session()) == false (line 38)
    // if ($this->auth->viaRemember()) == false (line 42)
    // if (!$request->session()->has('password_hash')) == false (line 50)
    // if ($request->session()->get('password_hash') !== $request->user()->getAuthPassword()) == false (line 54)

    $actual = $this->authenticateSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request->user() || !$request->session()) == false (line 38)
    // if ($this->auth->viaRemember()) == false (line 42)
    // if (!$request->session()->has('password_hash')) == false (line 50)
    // if ($request->session()->get('password_hash') !== $request->user()->getAuthPassword()) == true (line 54)

    $actual = $this->authenticateSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request->user() || !$request->session()) == false (line 38)
    // if ($this->auth->viaRemember()) == false (line 42)
    // if (!$request->session()->has('password_hash')) == true (line 50)
    // if ($request->session()->get('password_hash') !== $request->user()->getAuthPassword()) == false (line 54)

    $actual = $this->authenticateSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request->user() || !$request->session()) == false (line 38)
    // if ($this->auth->viaRemember()) == false (line 42)
    // if (!$request->session()->has('password_hash')) == true (line 50)
    // if ($request->session()->get('password_hash') !== $request->user()->getAuthPassword()) == true (line 54)

    $actual = $this->authenticateSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle4()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request->user() || !$request->session()) == false (line 38)
    // if ($this->auth->viaRemember()) == true (line 42)
    // if ($passwordHash != $request->user()->getAuthPassword()) == false (line 45)
    // if (!$request->session()->has('password_hash')) == false (line 50)
    // if ($request->session()->get('password_hash') !== $request->user()->getAuthPassword()) == false (line 54)

    $actual = $this->authenticateSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle5()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request->user() || !$request->session()) == false (line 38)
    // if ($this->auth->viaRemember()) == true (line 42)
    // if ($passwordHash != $request->user()->getAuthPassword()) == false (line 45)
    // if (!$request->session()->has('password_hash')) == false (line 50)
    // if ($request->session()->get('password_hash') !== $request->user()->getAuthPassword()) == true (line 54)

    $actual = $this->authenticateSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle6()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request->user() || !$request->session()) == false (line 38)
    // if ($this->auth->viaRemember()) == true (line 42)
    // if ($passwordHash != $request->user()->getAuthPassword()) == false (line 45)
    // if (!$request->session()->has('password_hash')) == true (line 50)
    // if ($request->session()->get('password_hash') !== $request->user()->getAuthPassword()) == false (line 54)

    $actual = $this->authenticateSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle7()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request->user() || !$request->session()) == false (line 38)
    // if ($this->auth->viaRemember()) == true (line 42)
    // if ($passwordHash != $request->user()->getAuthPassword()) == false (line 45)
    // if (!$request->session()->has('password_hash')) == true (line 50)
    // if ($request->session()->get('password_hash') !== $request->user()->getAuthPassword()) == true (line 54)

    $actual = $this->authenticateSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle8()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request->user() || !$request->session()) == false (line 38)
    // if ($this->auth->viaRemember()) == true (line 42)
    // if ($passwordHash != $request->user()->getAuthPassword()) == true (line 45)
    // if (!$request->session()->has('password_hash')) == false (line 50)
    // if ($request->session()->get('password_hash') !== $request->user()->getAuthPassword()) == false (line 54)

    $actual = $this->authenticateSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle9()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request->user() || !$request->session()) == false (line 38)
    // if ($this->auth->viaRemember()) == true (line 42)
    // if ($passwordHash != $request->user()->getAuthPassword()) == true (line 45)
    // if (!$request->session()->has('password_hash')) == false (line 50)
    // if ($request->session()->get('password_hash') !== $request->user()->getAuthPassword()) == true (line 54)

    $actual = $this->authenticateSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle10()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request->user() || !$request->session()) == false (line 38)
    // if ($this->auth->viaRemember()) == true (line 42)
    // if ($passwordHash != $request->user()->getAuthPassword()) == true (line 45)
    // if (!$request->session()->has('password_hash')) == true (line 50)
    // if ($request->session()->get('password_hash') !== $request->user()->getAuthPassword()) == false (line 54)

    $actual = $this->authenticateSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle11()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request->user() || !$request->session()) == false (line 38)
    // if ($this->auth->viaRemember()) == true (line 42)
    // if ($passwordHash != $request->user()->getAuthPassword()) == true (line 45)
    // if (!$request->session()->has('password_hash')) == true (line 50)
    // if ($request->session()->get('password_hash') !== $request->user()->getAuthPassword()) == true (line 54)

    $actual = $this->authenticateSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle12()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$request->user() || !$request->session()) == true (line 38)

    $actual = $this->authenticateSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
