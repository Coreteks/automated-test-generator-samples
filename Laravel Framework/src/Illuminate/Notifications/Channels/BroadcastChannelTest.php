<?php

namespace tests\Illuminate\Notifications\Channels;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Notifications\Channels\BroadcastChannel;
use Mockery as m;

class BroadcastChannelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_events;
/**
* @var \Illuminate\Notifications\Channels\BroadcastChannel
*/
protected $broadcastChannel;

public function setUp()
{
    parent::setUp();

    $this->_events = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);
    $this->broadcastChannel = new \Illuminate\Notifications\Channels\BroadcastChannel($this->_events);
}

public function testSend0()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock(\Illuminate\Notifications\Notification::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($message instanceof \Illuminate\Notifications\Messages\BroadcastMessage) == false (line 46)

    $actual = $this->broadcastChannel->send($notifiable, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend1()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock(\Illuminate\Notifications\Notification::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($message instanceof \Illuminate\Notifications\Messages\BroadcastMessage) == true (line 46)

    $actual = $this->broadcastChannel->send($notifiable, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
