<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\FingersCrossedHandler;

class FingersCrossedHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_handler = null;
/**
* @var mixed
*/
protected $_activationStrategy = null;
/**
* @var mixed
*/
protected $_bufferSize = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var mixed
*/
protected $_stopBuffering = null;
/**
* @var mixed
*/
protected $_passthruLevel = null;
/**
* @var \Monolog\Handler\FingersCrossedHandler
*/
protected $fingersCrossedHandler;

public function setUp()
{
    parent::setUp();

    $this->_handler = null;
    $this->_activationStrategy = null;
    $this->_bufferSize = null;
    $this->_bubble = null;
    $this->_stopBuffering = null;
    $this->_passthruLevel = null;
    $this->fingersCrossedHandler = new \Monolog\Handler\FingersCrossedHandler($this->_handler, $this->_activationStrategy, $this->_bufferSize, $this->_bubble, $this->_stopBuffering, $this->_passthruLevel);
}

public function testIsHandling0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->fingersCrossedHandler->isHandling($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testActivate0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->stopBuffering) == false (line 89)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == false (line 92)

    $actual = $this->fingersCrossedHandler->activate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testActivate1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->stopBuffering) == false (line 89)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 92)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == false (line 96)

    $actual = $this->fingersCrossedHandler->activate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testActivate2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->stopBuffering) == false (line 89)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 92)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 96)
    // throw new \RuntimeException("The factory callable should return a HandlerInterface") -> exception (line 97)

    $actual = $this->fingersCrossedHandler->activate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testActivate3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->stopBuffering) == true (line 89)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == false (line 92)

    $actual = $this->fingersCrossedHandler->activate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testActivate4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->stopBuffering) == true (line 89)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 92)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == false (line 96)

    $actual = $this->fingersCrossedHandler->activate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testActivate5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->stopBuffering) == true (line 89)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 92)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 96)
    // throw new \RuntimeException("The factory callable should return a HandlerInterface") -> exception (line 97)

    $actual = $this->fingersCrossedHandler->activate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == false (line 109)
    // if ($this->buffering) == false (line 113)

    $actual = $this->fingersCrossedHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == false (line 109)
    // if ($this->buffering) == true (line 113)
    // if ($this->bufferSize > 0 && count($this->buffer) > $this->bufferSize) == false (line 115)
    // if ($this->activationStrategy->isHandlerActivated($record)) == false (line 118)

    $actual = $this->fingersCrossedHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == false (line 109)
    // if ($this->buffering) == true (line 113)
    // if ($this->bufferSize > 0 && count($this->buffer) > $this->bufferSize) == false (line 115)
    // if ($this->activationStrategy->isHandlerActivated($record)) == true (line 118)

    $actual = $this->fingersCrossedHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == false (line 109)
    // if ($this->buffering) == true (line 113)
    // if ($this->bufferSize > 0 && count($this->buffer) > $this->bufferSize) == true (line 115)
    // if ($this->activationStrategy->isHandlerActivated($record)) == false (line 118)

    $actual = $this->fingersCrossedHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == false (line 109)
    // if ($this->buffering) == true (line 113)
    // if ($this->bufferSize > 0 && count($this->buffer) > $this->bufferSize) == true (line 115)
    // if ($this->activationStrategy->isHandlerActivated($record)) == true (line 118)

    $actual = $this->fingersCrossedHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 109)
    // if ($this->buffering) == false (line 113)

    $actual = $this->fingersCrossedHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle6()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 109)
    // if ($this->buffering) == true (line 113)
    // if ($this->bufferSize > 0 && count($this->buffer) > $this->bufferSize) == false (line 115)
    // if ($this->activationStrategy->isHandlerActivated($record)) == false (line 118)

    $actual = $this->fingersCrossedHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle7()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 109)
    // if ($this->buffering) == true (line 113)
    // if ($this->bufferSize > 0 && count($this->buffer) > $this->bufferSize) == false (line 115)
    // if ($this->activationStrategy->isHandlerActivated($record)) == true (line 118)

    $actual = $this->fingersCrossedHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle8()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 109)
    // if ($this->buffering) == true (line 113)
    // if ($this->bufferSize > 0 && count($this->buffer) > $this->bufferSize) == true (line 115)
    // if ($this->activationStrategy->isHandlerActivated($record)) == false (line 118)

    $actual = $this->fingersCrossedHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle9()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->processors) == true (line 109)
    // if ($this->buffering) == true (line 113)
    // if ($this->bufferSize > 0 && count($this->buffer) > $this->bufferSize) == true (line 115)
    // if ($this->activationStrategy->isHandlerActivated($record)) == true (line 118)

    $actual = $this->fingersCrossedHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->passthruLevel) == false (line 133)

    $actual = $this->fingersCrossedHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->passthruLevel) == true (line 133)
    // if (count($this->buffer) > 0) == false (line 138)

    $actual = $this->fingersCrossedHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->passthruLevel) == true (line 133)
    // if (count($this->buffer) > 0) == true (line 138)

    $actual = $this->fingersCrossedHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset0()
{
    // TODO: Your mock expectations here

    $actual = $this->fingersCrossedHandler->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear0()
{
    // TODO: Your mock expectations here

    $actual = $this->fingersCrossedHandler->clear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
