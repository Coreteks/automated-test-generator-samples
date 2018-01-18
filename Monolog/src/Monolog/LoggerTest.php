<?php

namespace tests\Monolog;

use DateTimeZone;
use Mockery as m;
use Monolog\Logger;

class LoggerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var array
*/
protected $_handlers = [];
/**
* @var array
*/
protected $_processors = [];
/**
* @var \Mockery\MockInterface
*/
protected $_timezone;
/**
* @var \Monolog\Logger
*/
protected $logger;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_handlers = [];
    $this->_processors = [];
    $this->_timezone = m::mock(\DateTimeZone::class);
    $this->logger = new \Monolog\Logger($this->_name, $this->_handlers, $this->_processors, $this->_timezone);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->logger->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithName0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->logger->withName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushHandler0()
{
    $handler = m::mock(\Monolog\Handler\HandlerInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->logger->pushHandler($handler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPopHandler0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->handlers) == false (line 185)

    $actual = $this->logger->popHandler();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testPopHandler1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->handlers) == true (line 185)
    // throw new \LogicException('You tried to pop from an empty handler stack.') -> exception (line 186)

    $actual = $this->logger->popHandler();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetHandlers0()
{
    $handlers = [];

    // TODO: Your mock expectations here

    $actual = $this->logger->setHandlers($handlers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetHandlers1()
{
    $handlers = [];

    // TODO: Your mock expectations here

    $actual = $this->logger->setHandlers($handlers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHandlers0()
{
    // TODO: Your mock expectations here

    $actual = $this->logger->getHandlers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushProcessor0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->logger->pushProcessor($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPopProcessor0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->processors) == false (line 235)

    $actual = $this->logger->popProcessor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testPopProcessor1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->processors) == true (line 235)
    // throw new \LogicException('You tried to pop from an empty processor stack.') -> exception (line 236)

    $actual = $this->logger->popProcessor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProcessors0()
{
    // TODO: Your mock expectations here

    $actual = $this->logger->getProcessors();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseMicrosecondTimestamps0()
{
    $micro = m::mock('UntypedParameter_micro_');

    // TODO: Your mock expectations here

    $actual = $this->logger->useMicrosecondTimestamps($micro);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord0()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord1()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == false (line 318)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord2()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == true (line 318)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord3()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord4()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == false (line 318)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord5()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == true (line 318)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord6()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord7()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == false (line 318)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord8()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == true (line 318)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord9()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord10()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == false (line 318)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord11()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == true (line 318)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord12()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $handlerKey) == true (line 291)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord13()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == false (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord14()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == false (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == false (line 318)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord15()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == false (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == true (line 318)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord16()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == false (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord17()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == false (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == false (line 318)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord18()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == false (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == true (line 318)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord19()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == false (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord20()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == false (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == false (line 318)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord21()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == false (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == true (line 318)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord22()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == false (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord23()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == false (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == false (line 318)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord24()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == false (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == true (line 318)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord25()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == false (line 285)
    // if (null === $handlerKey) == true (line 291)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord26()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == true (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord27()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == true (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == false (line 318)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord28()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == true (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == true (line 318)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord29()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == true (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord30()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == true (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == false (line 318)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord31()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == true (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == true (line 318)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord32()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == true (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord33()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == true (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == false (line 318)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord34()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == true (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == true (line 318)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord35()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == true (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord36()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == true (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == false (line 318)
    // while ($handler = current($this->handlers)) == false (line 317)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord37()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == true (line 285)
    // if (null === $handlerKey) == false (line 291)
    // while ($handlerKey !== key($this->handlers)) == true (line 313)
    // while ($handlerKey !== key($this->handlers)) == false (line 313)
    // while ($handler = current($this->handlers)) == true (line 317)
    // if (true === $handler->handle($record)) == true (line 318)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRecord38()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling(['level' => $level])) == true (line 285)
    // if (null === $handlerKey) == true (line 291)

    $actual = $this->logger->addRecord($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLevels0()
{
    // TODO: Your mock expectations here

    $actual = $this->logger->getLevels();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLevelName0()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(static::$levels[$level])) == false (line 347)

    $actual = $this->logger->getLevelName($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psr\Log\InvalidArgumentException
 */
public function testGetLevelName1()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset(static::$levels[$level])) == true (line 347)
    // throw new \Psr\Log\InvalidArgumentException('Level "' . $level . '" is not defined, use one of: ' . implode(', ', array_keys(static::$levels))) -> exception (line 348)

    $actual = $this->logger->getLevelName($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToMonologLevel0()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($level)) == false (line 363)

    $actual = $this->logger->toMonologLevel($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psr\Log\InvalidArgumentException
 */
public function testToMonologLevel1()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($level)) == true (line 363)
    // if (defined(__CLASS__ . '::' . strtoupper($level))) == false (line 364)
    // throw new \Psr\Log\InvalidArgumentException('Level "' . $level . '" is not defined, use one of: ' . implode(', ', array_keys(static::$levels))) -> exception (line 368)

    $actual = $this->logger->toMonologLevel($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToMonologLevel2()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($level)) == true (line 363)
    // if (defined(__CLASS__ . '::' . strtoupper($level))) == true (line 364)

    $actual = $this->logger->toMonologLevel($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsHandling0()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    $actual = $this->logger->isHandling($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsHandling1()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling($record)) == false (line 387)

    $actual = $this->logger->isHandling($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsHandling2()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($handler->isHandling($record)) == true (line 387)

    $actual = $this->logger->isHandling($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLog0()
{
    $level = m::mock('UntypedParameter_level_');
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->logger->log($level, $message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDebug0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->logger->debug($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInfo0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->logger->info($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNotice0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->logger->notice($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarning0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->logger->warning($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->logger->error($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCritical0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->logger->critical($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAlert0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->logger->alert($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEmergency0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    $actual = $this->logger->emergency($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTimezone0()
{
    $tz = m::mock(\DateTimeZone::class);

    // TODO: Your mock expectations here

    $actual = $this->logger->setTimezone($tz);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimezone0()
{
    // TODO: Your mock expectations here

    $actual = $this->logger->getTimezone();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
