<?php

namespace tests\Illuminate\Notifications;

use Illuminate\Notifications\NotificationServiceProvider;
use Mockery as m;

class NotificationServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Notifications\NotificationServiceProvider
*/
protected $notificationServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->notificationServiceProvider = new \Illuminate\Notifications\NotificationServiceProvider();
}

public function testBoot0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->runningInConsole()) == false (line 20)

    $actual = $this->notificationServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->runningInConsole()) == true (line 20)

    $actual = $this->notificationServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->notificationServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
