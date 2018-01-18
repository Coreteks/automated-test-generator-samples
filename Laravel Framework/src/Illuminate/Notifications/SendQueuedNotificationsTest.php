<?php

namespace tests\Illuminate\Notifications;

use Illuminate\Notifications\SendQueuedNotifications;
use Mockery as m;

class SendQueuedNotificationsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_notifiables = null;
/**
* @var mixed
*/
protected $_notification = null;
/**
* @var array
*/
protected $_channels = [];
/**
* @var \Illuminate\Notifications\SendQueuedNotifications
*/
protected $sendQueuedNotifications;

public function setUp()
{
    parent::setUp();

    $this->_notifiables = null;
    $this->_notification = null;
    $this->_channels = [];
    $this->sendQueuedNotifications = new \Illuminate\Notifications\SendQueuedNotifications($this->_notifiables, $this->_notification, $this->_channels);
}

public function testHandle0()
{
    $manager = m::mock(\Illuminate\Notifications\ChannelManager::class);

    // TODO: Your mock expectations here

    $actual = $this->sendQueuedNotifications->handle($manager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplayName0()
{
    // TODO: Your mock expectations here

    $actual = $this->sendQueuedNotifications->displayName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailed0()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->notification, 'failed')) == false (line 78)

    $actual = $this->sendQueuedNotifications->failed($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailed1()
{
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($this->notification, 'failed')) == true (line 78)

    $actual = $this->sendQueuedNotifications->failed($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__clone0()
{
    // TODO: Your mock expectations here

    $actual = $this->sendQueuedNotifications->__clone();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
