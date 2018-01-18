<?php

namespace tests\Illuminate\Notifications\Events;

use Illuminate\Notifications\Events\BroadcastNotificationCreated;
use Mockery as m;

class BroadcastNotificationCreatedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_notifiable = null;
/**
* @var mixed
*/
protected $_notification = null;
/**
* @var mixed
*/
protected $_data = null;
/**
* @var \Illuminate\Notifications\Events\BroadcastNotificationCreated
*/
protected $broadcastNotificationCreated;

public function setUp()
{
    parent::setUp();

    $this->_notifiable = null;
    $this->_notification = null;
    $this->_data = null;
    $this->broadcastNotificationCreated = new \Illuminate\Notifications\Events\BroadcastNotificationCreated($this->_notifiable, $this->_notification, $this->_data);
}

public function testBroadcastOn0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($channels)) == false (line 59)

    $actual = $this->broadcastNotificationCreated->broadcastOn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBroadcastOn1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($channels)) == true (line 59)

    $actual = $this->broadcastNotificationCreated->broadcastOn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBroadcastWith0()
{
    // TODO: Your mock expectations here

    $actual = $this->broadcastNotificationCreated->broadcastWith();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
