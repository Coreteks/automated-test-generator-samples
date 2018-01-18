<?php

namespace tests\Illuminate\Notifications;

use Illuminate\Notifications\Notification;
use Mockery as m;

class NotificationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Notifications\Notification
*/
protected $notification;

public function setUp()
{
    parent::setUp();

    $this->notification = new \Illuminate\Notifications\Notification();
}

public function testBroadcastOn0()
{
    // TODO: Your mock expectations here

    $actual = $this->notification->broadcastOn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
