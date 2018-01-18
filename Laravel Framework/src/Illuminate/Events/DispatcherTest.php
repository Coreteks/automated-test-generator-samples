<?php

namespace tests\Illuminate\Events;

use Illuminate\Contracts\Container\Container;
use Illuminate\Events\Dispatcher;
use Mockery as m;

class DispatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Illuminate\Events\Dispatcher
*/
protected $dispatcher;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Contracts\Container\Container::class);
    $this->dispatcher = new \Illuminate\Events\Dispatcher($this->_container);
}

public function testListen0()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    $actual = $this->dispatcher->listen($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListen1()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::contains($event, '*')) == false (line 67)

    $actual = $this->dispatcher->listen($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListen2()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::contains($event, '*')) == true (line 67)

    $actual = $this->dispatcher->listen($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasListeners0()
{
    $eventName = m::mock('UntypedParameter_eventName_');

    // TODO: Your mock expectations here

    $actual = $this->dispatcher->hasListeners($eventName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush0()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');

    // TODO: Your mock expectations here

    $actual = $this->dispatcher->push($event, $payload);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    $actual = $this->dispatcher->flush($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubscribe0()
{
    $subscriber = m::mock('UntypedParameter_subscriber_');

    // TODO: Your mock expectations here

    $actual = $this->dispatcher->subscribe($subscriber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUntil0()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');

    // TODO: Your mock expectations here

    $actual = $this->dispatcher->until($event, $payload);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFire0()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');
    $halt = m::mock('UntypedParameter_halt_');

    // TODO: Your mock expectations here

    $actual = $this->dispatcher->fire($event, $payload, $halt);
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
    // if ($this->shouldBroadcast($payload)) == false (line 193)

    $actual = $this->dispatcher->dispatch($event, $payload, $halt);
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
    // if ($this->shouldBroadcast($payload)) == false (line 193)
    // if ($halt && !is_null($response)) == false (line 205)
    // if ($response === false) == false (line 212)

    $actual = $this->dispatcher->dispatch($event, $payload, $halt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch2()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');
    $halt = m::mock('UntypedParameter_halt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldBroadcast($payload)) == false (line 193)
    // if ($halt && !is_null($response)) == false (line 205)
    // if ($response === false) == true (line 212)

    $actual = $this->dispatcher->dispatch($event, $payload, $halt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch3()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');
    $halt = m::mock('UntypedParameter_halt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldBroadcast($payload)) == false (line 193)
    // if ($halt && !is_null($response)) == true (line 205)

    $actual = $this->dispatcher->dispatch($event, $payload, $halt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch4()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');
    $halt = m::mock('UntypedParameter_halt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldBroadcast($payload)) == true (line 193)

    $actual = $this->dispatcher->dispatch($event, $payload, $halt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch5()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');
    $halt = m::mock('UntypedParameter_halt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldBroadcast($payload)) == true (line 193)
    // if ($halt && !is_null($response)) == false (line 205)
    // if ($response === false) == false (line 212)

    $actual = $this->dispatcher->dispatch($event, $payload, $halt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch6()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');
    $halt = m::mock('UntypedParameter_halt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldBroadcast($payload)) == true (line 193)
    // if ($halt && !is_null($response)) == false (line 205)
    // if ($response === false) == true (line 212)

    $actual = $this->dispatcher->dispatch($event, $payload, $halt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch7()
{
    $event = m::mock('UntypedParameter_event_');
    $payload = m::mock('UntypedParameter_payload_');
    $halt = m::mock('UntypedParameter_halt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldBroadcast($payload)) == true (line 193)
    // if ($halt && !is_null($response)) == true (line 205)

    $actual = $this->dispatcher->dispatch($event, $payload, $halt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetListeners0()
{
    $eventName = m::mock('UntypedParameter_eventName_');

    // TODO: Your mock expectations here

    $actual = $this->dispatcher->getListeners($eventName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeListener0()
{
    $listener = m::mock('UntypedParameter_listener_');
    $wildcard = m::mock('UntypedParameter_wildcard_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($listener)) == false (line 341)

    $actual = $this->dispatcher->makeListener($listener, $wildcard);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeListener1()
{
    $listener = m::mock('UntypedParameter_listener_');
    $wildcard = m::mock('UntypedParameter_wildcard_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($listener)) == true (line 341)

    $actual = $this->dispatcher->makeListener($listener, $wildcard);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateClassListener0()
{
    $listener = m::mock('UntypedParameter_listener_');
    $wildcard = m::mock('UntypedParameter_wildcard_');

    // TODO: Your mock expectations here

    $actual = $this->dispatcher->createClassListener($listener, $wildcard);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget0()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::contains($event, '*')) == false (line 520)

    $actual = $this->dispatcher->forget($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget1()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::contains($event, '*')) == true (line 520)

    $actual = $this->dispatcher->forget($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForgetPushed0()
{
    // TODO: Your mock expectations here

    $actual = $this->dispatcher->forgetPushed();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForgetPushed1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::endsWith($key, '_pushed')) == false (line 535)

    $actual = $this->dispatcher->forgetPushed();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForgetPushed2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::endsWith($key, '_pushed')) == true (line 535)

    $actual = $this->dispatcher->forgetPushed();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetQueueResolver0()
{
    $resolver = m::mock('UntypedParameter_resolver_');

    // TODO: Your mock expectations here

    $actual = $this->dispatcher->setQueueResolver($resolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
