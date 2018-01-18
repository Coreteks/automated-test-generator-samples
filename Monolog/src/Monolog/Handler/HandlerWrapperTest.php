<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\HandlerInterface;
use Monolog\Handler\HandlerWrapper;

class HandlerWrapperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_handler;
/**
* @var \Monolog\Handler\HandlerWrapper
*/
protected $handlerWrapper;

public function setUp()
{
    parent::setUp();

    $this->_handler = m::mock(\Monolog\Handler\HandlerInterface::class);
    $this->handlerWrapper = new \Monolog\Handler\HandlerWrapper($this->_handler);
}

public function testIsHandling0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->handlerWrapper->isHandling($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->handlerWrapper->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->handlerWrapper->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->handlerWrapper->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testPushProcessor0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler instanceof \Monolog\Handler\ProcessableHandlerInterface) == false (line 86)
    // throw new \LogicException('The wrapped handler does not implement ' . \Monolog\Handler\ProcessableHandlerInterface::class) -> exception (line 92)

    $actual = $this->handlerWrapper->pushProcessor($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushProcessor1()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler instanceof \Monolog\Handler\ProcessableHandlerInterface) == true (line 86)

    $actual = $this->handlerWrapper->pushProcessor($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testPopProcessor0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler instanceof \Monolog\Handler\ProcessableHandlerInterface) == false (line 100)
    // throw new \LogicException('The wrapped handler does not implement ' . \Monolog\Handler\ProcessableHandlerInterface::class) -> exception (line 104)

    $actual = $this->handlerWrapper->popProcessor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPopProcessor1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler instanceof \Monolog\Handler\ProcessableHandlerInterface) == true (line 100)

    $actual = $this->handlerWrapper->popProcessor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testSetFormatter0()
{
    $formatter = m::mock(\Monolog\Formatter\FormatterInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler instanceof \Monolog\Handler\FormattableHandlerInterface) == false (line 112)
    // throw new \LogicException('The wrapped handler does not implement ' . \Monolog\Handler\FormattableHandlerInterface::class) -> exception (line 116)

    $actual = $this->handlerWrapper->setFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testSetFormatter1()
{
    $formatter = m::mock(\Monolog\Formatter\FormatterInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler instanceof \Monolog\Handler\FormattableHandlerInterface) == true (line 112)
    // throw new \LogicException('The wrapped handler does not implement ' . \Monolog\Handler\FormattableHandlerInterface::class) -> exception (line 116)

    $actual = $this->handlerWrapper->setFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testGetFormatter0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler instanceof \Monolog\Handler\FormattableHandlerInterface) == false (line 124)
    // throw new \LogicException('The wrapped handler does not implement ' . \Monolog\Handler\FormattableHandlerInterface::class) -> exception (line 128)

    $actual = $this->handlerWrapper->getFormatter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatter1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler instanceof \Monolog\Handler\FormattableHandlerInterface) == true (line 124)

    $actual = $this->handlerWrapper->getFormatter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
