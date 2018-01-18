<?php

namespace tests\Illuminate\Auth\Middleware;

use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;
use Illuminate\Contracts\Auth\Factory;
use Mockery as m;

class AuthenticateWithBasicAuthTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_auth;
/**
* @var \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth
*/
protected $authenticateWithBasicAuth;

public function setUp()
{
    parent::setUp();

    $this->_auth = m::mock(\Illuminate\Contracts\Auth\Factory::class);
    $this->authenticateWithBasicAuth = new \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth($this->_auth);
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);
    $guard = m::mock('UntypedParameter_guard_');

    // TODO: Your mock expectations here

    $actual = $this->authenticateWithBasicAuth->handle($request, $next, $guard);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
