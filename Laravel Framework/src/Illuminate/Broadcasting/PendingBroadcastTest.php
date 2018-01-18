<?php

namespace tests\Illuminate\Broadcasting;

use Illuminate\Broadcasting\PendingBroadcast;
use Illuminate\Contracts\Events\Dispatcher;
use Mockery as m;

class PendingBroadcastTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_events;
/**
* @var mixed
*/
protected $_event = null;
/**
* @var \Illuminate\Broadcasting\PendingBroadcast
*/
protected $pendingBroadcast;

public function setUp()
{
    parent::setUp();

    $this->_events = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);
    $this->_event = null;
    $this->pendingBroadcast = new \Illuminate\Broadcasting\PendingBroadcast($this->_events, $this->_event);
}

public function testToOthers0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->event, 'dontBroadcastToCurrentUser')) == false (line 43)

    $actual = $this->pendingBroadcast->toOthers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToOthers1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->event, 'dontBroadcastToCurrentUser')) == true (line 43)

    $actual = $this->pendingBroadcast->toOthers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    $actual = $this->pendingBroadcast->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
