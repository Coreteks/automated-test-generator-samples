<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\MethodCall;

class MethodCallTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_method = null;
/**
* @var mixed
*/
protected $_args = null;
/**
* @var \Mockery\MethodCall
*/
protected $methodCall;

public function setUp()
{
    parent::setUp();

    $this->_method = null;
    $this->_args = null;
    $this->methodCall = new \Mockery\MethodCall($this->_method, $this->_args);
}

public function testGetMethod0()
{
    // TODO: Your mock expectations here

    $actual = $this->methodCall->getMethod();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetArgs0()
{
    // TODO: Your mock expectations here

    $actual = $this->methodCall->getArgs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
