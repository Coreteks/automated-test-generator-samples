<?php

namespace tests\Illuminate\Auth\Middleware;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Contracts\Auth\Factory;
use Mockery as m;

class AuthenticateTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_auth;
/**
* @var \Illuminate\Auth\Middleware\Authenticate
*/
protected $authenticate;

public function setUp()
{
    parent::setUp();

    $this->_auth = m::mock(\Illuminate\Contracts\Auth\Factory::class);
    $this->authenticate = new \Illuminate\Auth\Middleware\Authenticate($this->_auth);
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);
    $guards = m::mock('UntypedParameter_guards_');

    // TODO: Your mock expectations here

    $actual = $this->authenticate->handle($request, $next, $guards);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
