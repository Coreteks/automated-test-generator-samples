<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\ExpectsHigherOrderMessage;
use Mockery\MockInterface;

class ExpectsHigherOrderMessageTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_mock;
/**
* @var \Mockery\ExpectsHigherOrderMessage
*/
protected $expectsHigherOrderMessage;

public function setUp()
{
    parent::setUp();

    $this->_mock = m::mock(\Mockery\MockInterface::class);
    $this->expectsHigherOrderMessage = new \Mockery\ExpectsHigherOrderMessage($this->_mock);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->expectsHigherOrderMessage->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
