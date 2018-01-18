<?php

namespace tests\Illuminate\Auth\Passwords;

use Illuminate\Auth\Passwords\PasswordBrokerManager;
use Mockery as m;

class PasswordBrokerManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_app = null;
/**
* @var \Illuminate\Auth\Passwords\PasswordBrokerManager
*/
protected $passwordBrokerManager;

public function setUp()
{
    parent::setUp();

    $this->_app = null;
    $this->passwordBrokerManager = new \Illuminate\Auth\Passwords\PasswordBrokerManager($this->_app);
}

public function testBroker0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->passwordBrokerManager->broker($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultDriver0()
{
    // TODO: Your mock expectations here

    $actual = $this->passwordBrokerManager->getDefaultDriver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultDriver0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->passwordBrokerManager->setDefaultDriver($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->passwordBrokerManager->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
