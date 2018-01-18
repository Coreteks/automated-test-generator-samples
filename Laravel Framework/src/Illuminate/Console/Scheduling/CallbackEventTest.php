<?php

namespace tests\Illuminate\Console\Scheduling;

use Illuminate\Console\Scheduling\CallbackEvent;
use Illuminate\Console\Scheduling\Mutex;
use Mockery as m;

class CallbackEventTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_mutex;
/**
* @var mixed
*/
protected $_callback = null;
/**
* @var array
*/
protected $_parameters = [];
/**
* @var \Illuminate\Console\Scheduling\CallbackEvent
*/
protected $callbackEvent;

public function setUp()
{
    parent::setUp();

    $this->_mutex = m::mock(\Illuminate\Console\Scheduling\Mutex::class);
    $this->_callback = null;
    $this->_parameters = [];
    $this->callbackEvent = new \Illuminate\Console\Scheduling\CallbackEvent($this->_mutex, $this->_callback, $this->_parameters);
}

/**
 * @expectedException \Exception
 */
public function testRun0()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->description && $this->withoutOverlapping && !$this->mutex->create($this)) == false (line 58)

    $actual = $this->callbackEvent->run($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun1()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->description && $this->withoutOverlapping && !$this->mutex->create($this)) == false (line 58)

    $actual = $this->callbackEvent->run($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRun2()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->description && $this->withoutOverlapping && !$this->mutex->create($this)) == false (line 58)

    $actual = $this->callbackEvent->run($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun3()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->description && $this->withoutOverlapping && !$this->mutex->create($this)) == false (line 58)

    $actual = $this->callbackEvent->run($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun4()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->description && $this->withoutOverlapping && !$this->mutex->create($this)) == true (line 58)

    $actual = $this->callbackEvent->run($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithoutOverlapping0()
{
    $expiresAt = m::mock('UntypedParameter_expiresAt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->description)) == false (line 100)

    $actual = $this->callbackEvent->withoutOverlapping($expiresAt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testWithoutOverlapping1()
{
    $expiresAt = m::mock('UntypedParameter_expiresAt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->description)) == true (line 100)
    // throw new \LogicException("A scheduled event name is required to prevent overlapping. Use the 'name' method before 'withoutOverlapping'.") -> exception (line 101)

    $actual = $this->callbackEvent->withoutOverlapping($expiresAt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMutexName0()
{
    // TODO: Your mock expectations here

    $actual = $this->callbackEvent->mutexName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSummaryForDisplay0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($this->description)) == false (line 132)

    $actual = $this->callbackEvent->getSummaryForDisplay();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSummaryForDisplay1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($this->description)) == true (line 132)

    $actual = $this->callbackEvent->getSummaryForDisplay();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
