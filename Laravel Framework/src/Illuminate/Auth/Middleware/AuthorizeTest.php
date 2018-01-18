<?php

namespace tests\Illuminate\Auth\Middleware;

use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Contracts\Auth\Factory;
use Mockery as m;

class AuthorizeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_auth;
/**
* @var \Mockery\MockInterface
*/
protected $_gate;
/**
* @var \Illuminate\Auth\Middleware\Authorize
*/
protected $authorize;

public function setUp()
{
    parent::setUp();

    $this->_auth = m::mock(\Illuminate\Contracts\Auth\Factory::class);
    $this->_gate = m::mock(\Illuminate\Contracts\Auth\Access\Gate::class);
    $this->authorize = new \Illuminate\Auth\Middleware\Authorize($this->_auth, $this->_gate);
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);
    $ability = m::mock('UntypedParameter_ability_');
    $models = m::mock('UntypedParameter_models_');

    // TODO: Your mock expectations here

    $actual = $this->authorize->handle($request, $next, $ability, $models);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
