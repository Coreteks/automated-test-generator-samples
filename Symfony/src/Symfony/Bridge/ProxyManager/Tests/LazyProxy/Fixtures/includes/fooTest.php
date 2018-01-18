<?php

namespace tests;

use Mockery as m;
use ProxyManagerBridgeFooClass;

class ProxyManagerBridgeFooClassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_arguments = null;
/**
* @var \ProxyManagerBridgeFooClass
*/
protected $proxyManagerBridgeFooClass;

public function setUp()
{
    parent::setUp();

    $this->_arguments = null;
    $this->proxyManagerBridgeFooClass = new \ProxyManagerBridgeFooClass($this->_arguments);
}

public function testGetInstance0()
{
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    $actual = $this->proxyManagerBridgeFooClass->getInstance($arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize0()
{
    // TODO: Your mock expectations here

    $actual = $this->proxyManagerBridgeFooClass->initialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConfigure0()
{
    // TODO: Your mock expectations here

    $actual = $this->proxyManagerBridgeFooClass->configure();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetBar0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->proxyManagerBridgeFooClass->setBar($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    $actual = $this->proxyManagerBridgeFooClass->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
