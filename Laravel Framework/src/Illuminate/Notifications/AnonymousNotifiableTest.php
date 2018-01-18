<?php

namespace tests\Illuminate\Notifications;

use Illuminate\Notifications\AnonymousNotifiable;
use Mockery as m;

class AnonymousNotifiableTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Notifications\AnonymousNotifiable
*/
protected $anonymousNotifiable;

public function setUp()
{
    parent::setUp();

    $this->anonymousNotifiable = new \Illuminate\Notifications\AnonymousNotifiable();
}

public function testRoute0()
{
    $channel = m::mock('UntypedParameter_channel_');
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    $actual = $this->anonymousNotifiable->route($channel, $route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNotify0()
{
    $notification = m::mock('UntypedParameter_notification_');

    // TODO: Your mock expectations here

    $actual = $this->anonymousNotifiable->notify($notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNotifyNow0()
{
    $notification = m::mock('UntypedParameter_notification_');

    // TODO: Your mock expectations here

    $actual = $this->anonymousNotifiable->notifyNow($notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRouteNotificationFor0()
{
    $driver = m::mock('UntypedParameter_driver_');

    // TODO: Your mock expectations here

    $actual = $this->anonymousNotifiable->routeNotificationFor($driver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->anonymousNotifiable->getKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
