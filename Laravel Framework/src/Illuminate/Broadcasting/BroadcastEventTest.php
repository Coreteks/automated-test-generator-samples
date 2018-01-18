<?php

namespace tests\Illuminate\Broadcasting;

use Illuminate\Broadcasting\BroadcastEvent;
use Mockery as m;

class BroadcastEventTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_event = null;
/**
* @var \Illuminate\Broadcasting\BroadcastEvent
*/
protected $broadcastEvent;

public function setUp()
{
    parent::setUp();

    $this->_event = null;
    $this->broadcastEvent = new \Illuminate\Broadcasting\BroadcastEvent($this->_event);
}

public function testHandle0()
{
    $broadcaster = m::mock(\Illuminate\Contracts\Broadcasting\Broadcaster::class);

    // TODO: Your mock expectations here

    $actual = $this->broadcastEvent->handle($broadcaster);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplayName0()
{
    // TODO: Your mock expectations here

    $actual = $this->broadcastEvent->displayName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__clone0()
{
    // TODO: Your mock expectations here

    $actual = $this->broadcastEvent->__clone();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
