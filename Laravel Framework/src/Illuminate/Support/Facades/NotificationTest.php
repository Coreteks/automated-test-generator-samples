<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Notification;
use Mockery as m;

class NotificationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Notification
*/
protected $notification;

public function setUp()
{
    parent::setUp();

    $this->notification = new \Illuminate\Support\Facades\Notification();
}

public function testFake0()
{
    // TODO: Your mock expectations here

    $actual = $this->notification->fake();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRoute0()
{
    $channel = m::mock('UntypedParameter_channel_');
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    $actual = $this->notification->route($channel, $route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
