<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\HigherOrderMessage;
use Mockery\MockInterface;

class HigherOrderMessageTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_mock;
/**
* @var mixed
*/
protected $_method = null;
/**
* @var \Mockery\HigherOrderMessage
*/
protected $higherOrderMessage;

public function setUp()
{
    parent::setUp();

    $this->_mock = m::mock(\Mockery\MockInterface::class);
    $this->_method = null;
    $this->higherOrderMessage = new \Mockery\HigherOrderMessage($this->_mock, $this->_method);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->method !== "shouldNotHaveReceived") == false (line 44)

    $actual = $this->higherOrderMessage->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->method !== "shouldNotHaveReceived") == true (line 44)

    $actual = $this->higherOrderMessage->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
