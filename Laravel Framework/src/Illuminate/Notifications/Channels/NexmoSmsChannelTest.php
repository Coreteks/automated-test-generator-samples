<?php

namespace tests\Illuminate\Notifications\Channels;

use Illuminate\Notifications\Channels\NexmoSmsChannel;
use Mockery as m;
use Nexmo\Client;

class NexmoSmsChannelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_nexmo;
/**
* @var mixed
*/
protected $_from = null;
/**
* @var \Illuminate\Notifications\Channels\NexmoSmsChannel
*/
protected $nexmoSmsChannel;

public function setUp()
{
    parent::setUp();

    $this->_nexmo = m::mock(\Nexmo\Client::class);
    $this->_from = null;
    $this->nexmoSmsChannel = new \Illuminate\Notifications\Channels\NexmoSmsChannel($this->_nexmo, $this->_from);
}

public function testSend0()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock(\Illuminate\Notifications\Notification::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($to = $notifiable->routeNotificationFor('nexmo'))) == false (line 47)
    // if (is_string($message)) == false (line 53)

    $actual = $this->nexmoSmsChannel->send($notifiable, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend1()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock(\Illuminate\Notifications\Notification::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($to = $notifiable->routeNotificationFor('nexmo'))) == false (line 47)
    // if (is_string($message)) == true (line 53)

    $actual = $this->nexmoSmsChannel->send($notifiable, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend2()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock(\Illuminate\Notifications\Notification::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($to = $notifiable->routeNotificationFor('nexmo'))) == true (line 47)

    $actual = $this->nexmoSmsChannel->send($notifiable, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
