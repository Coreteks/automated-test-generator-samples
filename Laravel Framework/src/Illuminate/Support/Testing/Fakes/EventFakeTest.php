<?php

namespace tests\Illuminate\Support\Testing\Fakes;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Testing\Fakes\EventFake;
use Mockery as m;

class EventFakeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_dispatcher;
/**
* @var mixed
*/
protected $_eventsToFake = null;
/**
* @var \Illuminate\Support\Testing\Fakes\EventFake
*/
protected $eventFake;

public function setUp()
{
    parent::setUp();

    $this->_dispatcher = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);
    $this->_eventsToFake = null;
    $this->eventFake = new \Illuminate\Support\Testing\Fakes\EventFake($this->_dispatcher, $this->_eventsToFake);
}

public function testAssertDispatched0()
{
    $event = m::mock('UntypedParameter_event_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_int($callback)) == false (line 55)

    $actual = $this->eventFake->assertDispatched($event, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertDispatched1()
{
    $event = m::mock('UntypedParameter_event_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_int($callback)) == true (line 55)

    $actual = $this->eventFake->assertDispatched($event, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertDispatchedTimes0()
{
    $event = m::mock('UntypedParameter_event_');
    $times = m::mock('UntypedParameter_times_');

    // TODO: Your mock expectations here

    $actual = $this->eventFake->assertDispatchedTimes($event, $times);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertNotDispatched0()
{
    $event = m::mock('UntypedParameter_event_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->eventFake->assertNotDispatched($event, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatched0()
{
    $event = m::mock('UntypedParameter_event_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasDispatched($event)) == false (line 104)

    $actual = $this->eventFake->dispatched($event, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatched1()
{
    $event = m::mock('UntypedParameter_event_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasDispatched($event)) == true (line 104)

    $actual = $this->eventFake->dispatched($event, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasDispatched0()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    $actual = $this->eventFake->hasDispatched($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListen0()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    $actual = $this->eventFake->listen($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasListeners0()
{
    $eventName = m::mock('UntypedParameter_eventName_');

    // TODO: Your mock expectations here

    $actual = $this->eventFake->hasListeners($eventName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush0()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');

    // TODO: Your mock expectations here

    $actual = $this->eventFake->push($event, $payload);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubscribe0()
{
    $subscriber = m::mock('UntypedParameter_subscriber_');

    // TODO: Your mock expectations here

    $actual = $this->eventFake->subscribe($subscriber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    $actual = $this->eventFake->flush($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFire0()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');
    $halt = m::mock('UntypedParameter_halt_');

    // TODO: Your mock expectations here

    $actual = $this->eventFake->fire($event, $payload, $halt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch0()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');
    $halt = m::mock('UntypedParameter_halt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldFakeEvent($name)) == false (line 210)

    $actual = $this->eventFake->dispatch($event, $payload, $halt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch1()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');
    $halt = m::mock('UntypedParameter_halt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldFakeEvent($name)) == true (line 210)

    $actual = $this->eventFake->dispatch($event, $payload, $halt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget0()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    $actual = $this->eventFake->forget($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForgetPushed0()
{
    // TODO: Your mock expectations here

    $actual = $this->eventFake->forgetPushed();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUntil0()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');

    // TODO: Your mock expectations here

    $actual = $this->eventFake->until($event, $payload);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
