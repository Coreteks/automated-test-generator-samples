<?php

namespace tests\Illuminate\Auth;

use Illuminate\Auth\TokenGuard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;
use Mockery as m;

class TokenGuardTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_provider;
/**
* @var \Mockery\MockInterface
*/
protected $_request;
/**
* @var \Illuminate\Auth\TokenGuard
*/
protected $tokenGuard;

public function setUp()
{
    parent::setUp();

    $this->_provider = m::mock(\Illuminate\Contracts\Auth\UserProvider::class);
    $this->_request = m::mock(\Illuminate\Http\Request::class);
    $this->tokenGuard = new \Illuminate\Auth\TokenGuard($this->_provider, $this->_request);
}

public function testUser0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->user)) == false (line 59)
    // if (!empty($token)) == false (line 67)

    $actual = $this->tokenGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->user)) == false (line 59)
    // if (!empty($token)) == true (line 67)

    $actual = $this->tokenGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->user)) == true (line 59)

    $actual = $this->tokenGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenForRequest0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($token)) == false (line 85)
    // if (empty($token)) == false (line 89)
    // if (empty($token)) == false (line 93)

    $actual = $this->tokenGuard->getTokenForRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenForRequest1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($token)) == false (line 85)
    // if (empty($token)) == false (line 89)
    // if (empty($token)) == true (line 93)

    $actual = $this->tokenGuard->getTokenForRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenForRequest2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($token)) == false (line 85)
    // if (empty($token)) == true (line 89)
    // if (empty($token)) == false (line 93)

    $actual = $this->tokenGuard->getTokenForRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenForRequest3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($token)) == false (line 85)
    // if (empty($token)) == true (line 89)
    // if (empty($token)) == true (line 93)

    $actual = $this->tokenGuard->getTokenForRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenForRequest4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($token)) == true (line 85)
    // if (empty($token)) == false (line 89)
    // if (empty($token)) == false (line 93)

    $actual = $this->tokenGuard->getTokenForRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenForRequest5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($token)) == true (line 85)
    // if (empty($token)) == false (line 89)
    // if (empty($token)) == true (line 93)

    $actual = $this->tokenGuard->getTokenForRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenForRequest6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($token)) == true (line 85)
    // if (empty($token)) == true (line 89)
    // if (empty($token)) == false (line 93)

    $actual = $this->tokenGuard->getTokenForRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenForRequest7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($token)) == true (line 85)
    // if (empty($token)) == true (line 89)
    // if (empty($token)) == true (line 93)

    $actual = $this->tokenGuard->getTokenForRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate0()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($credentials[$this->inputKey])) == false (line 108)
    // if ($this->provider->retrieveByCredentials($credentials)) == false (line 114)

    $actual = $this->tokenGuard->validate($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate1()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($credentials[$this->inputKey])) == false (line 108)
    // if ($this->provider->retrieveByCredentials($credentials)) == true (line 114)

    $actual = $this->tokenGuard->validate($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate2()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($credentials[$this->inputKey])) == true (line 108)

    $actual = $this->tokenGuard->validate($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRequest0()
{
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->tokenGuard->setRequest($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
