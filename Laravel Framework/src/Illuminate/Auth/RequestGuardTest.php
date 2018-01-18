<?php

namespace tests\Illuminate\Auth;

use Illuminate\Auth\RequestGuard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;
use Mockery as m;

class RequestGuardTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_callback = null;
/**
* @var \Mockery\MockInterface
*/
protected $_request;
/**
* @var \Mockery\MockInterface
*/
protected $_provider;
/**
* @var \Illuminate\Auth\RequestGuard
*/
protected $requestGuard;

public function setUp()
{
    parent::setUp();

    $this->_callback = null;
    $this->_request = m::mock(\Illuminate\Http\Request::class);
    $this->_provider = m::mock(\Illuminate\Contracts\Auth\UserProvider::class);
    $this->requestGuard = new \Illuminate\Auth\RequestGuard($this->_callback, $this->_request, $this->_provider);
}

public function testUser0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->user)) == false (line 53)

    $actual = $this->requestGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->user)) == true (line 53)

    $actual = $this->requestGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate0()
{
    $credentials = [];

    // TODO: Your mock expectations here

    $actual = $this->requestGuard->validate($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRequest0()
{
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->requestGuard->setRequest($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
