<?php

namespace tests\Illuminate\Support\Testing\Fakes;

use Illuminate\Support\Testing\Fakes\NotificationFake;
use Mockery as m;

class NotificationFakeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Testing\Fakes\NotificationFake
*/
protected $notificationFake;

public function setUp()
{
    parent::setUp();

    $this->notificationFake = new \Illuminate\Support\Testing\Fakes\NotificationFake();
}

public function testAssertSentTo0()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock('UntypedParameter_notification_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($notifiable) || $notifiable instanceof \Illuminate\Support\Collection) == false (line 30)
    // if (is_numeric($callback)) == false (line 38)

    $actual = $this->notificationFake->assertSentTo($notifiable, $notification, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSentTo1()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock('UntypedParameter_notification_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($notifiable) || $notifiable instanceof \Illuminate\Support\Collection) == false (line 30)
    // if (is_numeric($callback)) == true (line 38)

    $actual = $this->notificationFake->assertSentTo($notifiable, $notification, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSentTo2()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock('UntypedParameter_notification_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($notifiable) || $notifiable instanceof \Illuminate\Support\Collection) == true (line 30)

    $actual = $this->notificationFake->assertSentTo($notifiable, $notification, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSentTo3()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock('UntypedParameter_notification_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($notifiable) || $notifiable instanceof \Illuminate\Support\Collection) == true (line 30)

    $actual = $this->notificationFake->assertSentTo($notifiable, $notification, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSentToTimes0()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock('UntypedParameter_notification_');
    $times = m::mock('UntypedParameter_times_');

    // TODO: Your mock expectations here

    $actual = $this->notificationFake->assertSentToTimes($notifiable, $notification, $times);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertNotSentTo0()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock('UntypedParameter_notification_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($notifiable) || $notifiable instanceof \Illuminate\Support\Collection) == false (line 74)

    $actual = $this->notificationFake->assertNotSentTo($notifiable, $notification, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertNotSentTo1()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock('UntypedParameter_notification_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($notifiable) || $notifiable instanceof \Illuminate\Support\Collection) == true (line 74)

    $actual = $this->notificationFake->assertNotSentTo($notifiable, $notification, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertNotSentTo2()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock('UntypedParameter_notification_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($notifiable) || $notifiable instanceof \Illuminate\Support\Collection) == true (line 74)

    $actual = $this->notificationFake->assertNotSentTo($notifiable, $notification, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertNothingSent0()
{
    // TODO: Your mock expectations here

    $actual = $this->notificationFake->assertNothingSent();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSent0()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock('UntypedParameter_notification_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasSent($notifiable, $notification)) == false (line 108)

    $actual = $this->notificationFake->sent($notifiable, $notification, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSent1()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock('UntypedParameter_notification_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasSent($notifiable, $notification)) == true (line 108)

    $actual = $this->notificationFake->sent($notifiable, $notification, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasSent0()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock('UntypedParameter_notification_');

    // TODO: Your mock expectations here

    $actual = $this->notificationFake->hasSent($notifiable, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend0()
{
    $notifiables = m::mock('UntypedParameter_notifiables_');
    $notification = m::mock('UntypedParameter_notification_');

    // TODO: Your mock expectations here

    $actual = $this->notificationFake->send($notifiables, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendNow0()
{
    $notifiables = m::mock('UntypedParameter_notifiables_');
    $notification = m::mock('UntypedParameter_notification_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$notifiables instanceof \Illuminate\Support\Collection && !is_array($notifiables)) == false (line 172)

    $actual = $this->notificationFake->sendNow($notifiables, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendNow1()
{
    $notifiables = m::mock('UntypedParameter_notifiables_');
    $notification = m::mock('UntypedParameter_notification_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$notifiables instanceof \Illuminate\Support\Collection && !is_array($notifiables)) == false (line 172)

    $actual = $this->notificationFake->sendNow($notifiables, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendNow2()
{
    $notifiables = m::mock('UntypedParameter_notifiables_');
    $notification = m::mock('UntypedParameter_notification_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$notifiables instanceof \Illuminate\Support\Collection && !is_array($notifiables)) == true (line 172)

    $actual = $this->notificationFake->sendNow($notifiables, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendNow3()
{
    $notifiables = m::mock('UntypedParameter_notifiables_');
    $notification = m::mock('UntypedParameter_notification_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$notifiables instanceof \Illuminate\Support\Collection && !is_array($notifiables)) == true (line 172)

    $actual = $this->notificationFake->sendNow($notifiables, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChannel0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->notificationFake->channel($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
