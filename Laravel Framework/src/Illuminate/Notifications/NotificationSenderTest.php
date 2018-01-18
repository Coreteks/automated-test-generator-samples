<?php

namespace tests\Illuminate\Notifications;

use Illuminate\Notifications\NotificationSender;
use Mockery as m;

class NotificationSenderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_manager = null;
/**
* @var mixed
*/
protected $_bus = null;
/**
* @var mixed
*/
protected $_events = null;
/**
* @var \Illuminate\Notifications\NotificationSender
*/
protected $notificationSender;

public function setUp()
{
    parent::setUp();

    $this->_manager = null;
    $this->_bus = null;
    $this->_events = null;
    $this->notificationSender = new \Illuminate\Notifications\NotificationSender($this->_manager, $this->_bus, $this->_events);
}

public function testSend0()
{
    $notifiables = m::mock('UntypedParameter_notifiables_');
    $notification = m::mock('UntypedParameter_notification_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($notification instanceof \Illuminate\Contracts\Queue\ShouldQueue) == false (line 60)

    $actual = $this->notificationSender->send($notifiables, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend1()
{
    $notifiables = m::mock('UntypedParameter_notifiables_');
    $notification = m::mock('UntypedParameter_notification_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($notification instanceof \Illuminate\Contracts\Queue\ShouldQueue) == true (line 60)

    $actual = $this->notificationSender->send($notifiables, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendNow0()
{
    $notifiables = m::mock('UntypedParameter_notifiables_');
    $notification = m::mock('UntypedParameter_notification_');
    $channels = [];

    // TODO: Your mock expectations here

    $actual = $this->notificationSender->sendNow($notifiables, $notification, $channels);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendNow1()
{
    $notifiables = m::mock('UntypedParameter_notifiables_');
    $notification = m::mock('UntypedParameter_notification_');
    $channels = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($viaChannels = $channels ?: $notification->via($notifiable))) == false (line 82)

    $actual = $this->notificationSender->sendNow($notifiables, $notification, $channels);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendNow2()
{
    $notifiables = m::mock('UntypedParameter_notifiables_');
    $notification = m::mock('UntypedParameter_notification_');
    $channels = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($viaChannels = $channels ?: $notification->via($notifiable))) == false (line 82)

    $actual = $this->notificationSender->sendNow($notifiables, $notification, $channels);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendNow3()
{
    $notifiables = m::mock('UntypedParameter_notifiables_');
    $notification = m::mock('UntypedParameter_notification_');
    $channels = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($viaChannels = $channels ?: $notification->via($notifiable))) == true (line 82)

    $actual = $this->notificationSender->sendNow($notifiables, $notification, $channels);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
