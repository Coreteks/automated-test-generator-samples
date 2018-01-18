<?php

namespace tests\Illuminate\Events;

use Illuminate\Events\CallQueuedListener;
use Mockery as m;

class CallQueuedListenerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_class = null;
/**
* @var mixed
*/
protected $_method = null;
/**
* @var mixed
*/
protected $_data = null;
/**
* @var \Illuminate\Events\CallQueuedListener
*/
protected $callQueuedListener;

public function setUp()
{
    parent::setUp();

    $this->_class = null;
    $this->_method = null;
    $this->_data = null;
    $this->callQueuedListener = new \Illuminate\Events\CallQueuedListener($this->_class, $this->_method, $this->_data);
}

public function testHandle0()
{
    $container = m::mock(\Illuminate\Container\Container::class);

    // TODO: Your mock expectations here

    $actual = $this->callQueuedListener->handle($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailed0()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($handler, 'failed')) == false (line 122)

    $actual = $this->callQueuedListener->failed($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailed1()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($handler, 'failed')) == true (line 122)

    $actual = $this->callQueuedListener->failed($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplayName0()
{
    // TODO: Your mock expectations here

    $actual = $this->callQueuedListener->displayName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__clone0()
{
    // TODO: Your mock expectations here

    $actual = $this->callQueuedListener->__clone();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
