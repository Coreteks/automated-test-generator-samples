<?php

namespace tests\Symfony\Bridge\Doctrine;

use Mockery as m;
use Psr\Container\ContainerInterface;
use Symfony\Bridge\Doctrine\ContainerAwareEventManager;

class ContainerAwareEventManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Symfony\Bridge\Doctrine\ContainerAwareEventManager
*/
protected $containerAwareEventManager;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Psr\Container\ContainerInterface::class);
    $this->containerAwareEventManager = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this->_container);
}

public function testDispatchEvent0()
{
    $eventName = m::mock('UntypedParameter_eventName_');
    $eventArgs = m::mock(\Doctrine\Common\EventArgs::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->listeners[$eventName])) == false (line 51)

    $actual = $this->containerAwareEventManager->dispatchEvent($eventName, $eventArgs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatchEvent1()
{
    $eventName = m::mock('UntypedParameter_eventName_');
    $eventArgs = m::mock(\Doctrine\Common\EventArgs::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->listeners[$eventName])) == true (line 51)

    $actual = $this->containerAwareEventManager->dispatchEvent($eventName, $eventArgs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatchEvent2()
{
    $eventName = m::mock('UntypedParameter_eventName_');
    $eventArgs = m::mock(\Doctrine\Common\EventArgs::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->listeners[$eventName])) == true (line 51)
    // if (!$initialized && is_string($listener)) == false (line 57)

    $actual = $this->containerAwareEventManager->dispatchEvent($eventName, $eventArgs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatchEvent3()
{
    $eventName = m::mock('UntypedParameter_eventName_');
    $eventArgs = m::mock(\Doctrine\Common\EventArgs::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->listeners[$eventName])) == true (line 51)
    // if (!$initialized && is_string($listener)) == true (line 57)

    $actual = $this->containerAwareEventManager->dispatchEvent($eventName, $eventArgs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetListeners0()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    $actual = $this->containerAwareEventManager->getListeners($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasListeners0()
{
    $event = m::mock('UntypedParameter_event_');

    // TODO: Your mock expectations here

    $actual = $this->containerAwareEventManager->hasListeners($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEventListener0()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($listener)) == false (line 101)

    $actual = $this->containerAwareEventManager->addEventListener($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEventListener1()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($listener)) == false (line 101)

    $actual = $this->containerAwareEventManager->addEventListener($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEventListener2()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($listener)) == true (line 101)
    // if ($this->initialized) == false (line 102)

    $actual = $this->containerAwareEventManager->addEventListener($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEventListener3()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($listener)) == true (line 101)
    // if ($this->initialized) == false (line 102)

    $actual = $this->containerAwareEventManager->addEventListener($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testAddEventListener4()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($listener)) == true (line 101)
    // if ($this->initialized) == true (line 102)
    // throw new \RuntimeException('Adding lazy-loading listeners after construction is not supported.') -> exception (line 103)

    $actual = $this->containerAwareEventManager->addEventListener($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveEventListener0()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($listener)) == false (line 127)

    $actual = $this->containerAwareEventManager->removeEventListener($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveEventListener1()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($listener)) == false (line 127)
    // if (isset($this->listeners[$event][$hash])) == false (line 136)

    $actual = $this->containerAwareEventManager->removeEventListener($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveEventListener2()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($listener)) == false (line 127)
    // if (isset($this->listeners[$event][$hash])) == true (line 136)

    $actual = $this->containerAwareEventManager->removeEventListener($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveEventListener3()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($listener)) == true (line 127)

    $actual = $this->containerAwareEventManager->removeEventListener($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveEventListener4()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($listener)) == true (line 127)
    // if (isset($this->listeners[$event][$hash])) == false (line 136)

    $actual = $this->containerAwareEventManager->removeEventListener($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveEventListener5()
{
    $events = m::mock('UntypedParameter_events_');
    $listener = m::mock('UntypedParameter_listener_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($listener)) == true (line 127)
    // if (isset($this->listeners[$event][$hash])) == true (line 136)

    $actual = $this->containerAwareEventManager->removeEventListener($events, $listener);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
