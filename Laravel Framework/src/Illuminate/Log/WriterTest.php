<?php

namespace tests\Illuminate\Log;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Log\Writer;
use Mockery as m;
use Monolog\Logger;

class WriterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_monolog;
/**
* @var \Mockery\MockInterface
*/
protected $_dispatcher;
/**
* @var \Illuminate\Log\Writer
*/
protected $writer;

public function setUp()
{
    parent::setUp();

    $this->_monolog = m::mock(\Monolog\Logger::class);
    $this->_dispatcher = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);
    $this->writer = new \Illuminate\Log\Writer($this->_monolog, $this->_dispatcher);
}

public function testEmergency0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->writer->emergency($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAlert0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->writer->alert($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCritical0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->writer->critical($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->writer->error($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarning0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->writer->warning($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNotice0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->writer->notice($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInfo0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->writer->info($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDebug0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->writer->debug($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLog0()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->writer->log($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite0()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->writer->write($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseFiles0()
{
    $path = m::mock('UntypedParameter_path_');
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    $actual = $this->writer->useFiles($path, $level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseDailyFiles0()
{
    $path = m::mock('UntypedParameter_path_');
    $days = m::mock('UntypedParameter_days_');
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    $actual = $this->writer->useDailyFiles($path, $days, $level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseSyslog0()
{
    $name = m::mock('UntypedParameter_name_');
    $level = m::mock('UntypedParameter_level_');
    $facility = m::mock('UntypedParameter_facility_');

    // TODO: Your mock expectations here

    $actual = $this->writer->useSyslog($name, $level, $facility);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseErrorLog0()
{
    $level = m::mock('UntypedParameter_level_');
    $messageType = m::mock('UntypedParameter_messageType_');

    // TODO: Your mock expectations here

    $actual = $this->writer->useErrorLog($level, $messageType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListen0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->dispatcher)) == false (line 274)

    $actual = $this->writer->listen($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testListen1()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->dispatcher)) == true (line 274)
    // throw new \RuntimeException('Events dispatcher has not been set.') -> exception (line 275)

    $actual = $this->writer->listen($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMonolog0()
{
    // TODO: Your mock expectations here

    $actual = $this->writer->getMonolog();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEventDispatcher0()
{
    // TODO: Your mock expectations here

    $actual = $this->writer->getEventDispatcher();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetEventDispatcher0()
{
    $dispatcher = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);

    // TODO: Your mock expectations here

    $actual = $this->writer->setEventDispatcher($dispatcher);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
