<?php

namespace tests\Illuminate\Notifications;

use Illuminate\Notifications\ChannelManager;
use Mockery as m;

class ChannelManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Notifications\ChannelManager
*/
protected $channelManager;

public function setUp()
{
    parent::setUp();

    $this->channelManager = new \Illuminate\Notifications\ChannelManager();
}

public function testSend0()
{
    $notifiables = m::mock('UntypedParameter_notifiables_');
    $notification = m::mock('UntypedParameter_notification_');

    // TODO: Your mock expectations here

    $actual = $this->channelManager->send($notifiables, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendNow0()
{
    $notifiables = m::mock('UntypedParameter_notifiables_');
    $notification = m::mock('UntypedParameter_notification_');
    $channels = [];

    // TODO: Your mock expectations here

    $actual = $this->channelManager->sendNow($notifiables, $notification, $channels);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChannel0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->channelManager->channel($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultDriver0()
{
    // TODO: Your mock expectations here

    $actual = $this->channelManager->getDefaultDriver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeliversVia0()
{
    // TODO: Your mock expectations here

    $actual = $this->channelManager->deliversVia();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeliverVia0()
{
    $channel = m::mock('UntypedParameter_channel_');

    // TODO: Your mock expectations here

    $actual = $this->channelManager->deliverVia($channel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
