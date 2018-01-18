<?php

namespace tests\Illuminate\Auth;

use Illuminate\Auth\GenericUser;
use Mockery as m;

class GenericUserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \Illuminate\Auth\GenericUser
*/
protected $genericUser;

public function setUp()
{
    parent::setUp();

    $this->_attributes = [];
    $this->genericUser = new \Illuminate\Auth\GenericUser($this->_attributes);
}

public function testGetAuthIdentifierName0()
{
    // TODO: Your mock expectations here

    $actual = $this->genericUser->getAuthIdentifierName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAuthIdentifier0()
{
    // TODO: Your mock expectations here

    $actual = $this->genericUser->getAuthIdentifier();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAuthPassword0()
{
    // TODO: Your mock expectations here

    $actual = $this->genericUser->getAuthPassword();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRememberToken0()
{
    // TODO: Your mock expectations here

    $actual = $this->genericUser->getRememberToken();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRememberToken0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->genericUser->setRememberToken($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRememberTokenName0()
{
    // TODO: Your mock expectations here

    $actual = $this->genericUser->getRememberTokenName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->genericUser->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->genericUser->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->genericUser->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->genericUser->__unset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
