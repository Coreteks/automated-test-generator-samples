<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\FilterHandler;

class FilterHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_handler = null;
/**
* @var mixed
*/
protected $_minLevelOrList = null;
/**
* @var mixed
*/
protected $_maxLevel = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\FilterHandler
*/
protected $filterHandler;

public function setUp()
{
    parent::setUp();

    $this->_handler = null;
    $this->_minLevelOrList = null;
    $this->_maxLevel = null;
    $this->_bubble = null;
    $this->filterHandler = new \Monolog\Handler\FilterHandler($this->_handler, $this->_minLevelOrList, $this->_maxLevel, $this->_bubble);
}

public function testGetAcceptedLevels0()
{
    // TODO: Your mock expectations here

    $actual = $this->filterHandler->getAcceptedLevels();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetAcceptedLevels0()
{
    $minLevelOrList = m::mock('UntypedParameter_minLevelOrList_');
    $maxLevel = m::mock('UntypedParameter_maxLevel_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($minLevelOrList)) == false (line 80)

    $actual = $this->filterHandler->setAcceptedLevels($minLevelOrList, $maxLevel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetAcceptedLevels1()
{
    $minLevelOrList = m::mock('UntypedParameter_minLevelOrList_');
    $maxLevel = m::mock('UntypedParameter_maxLevel_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($minLevelOrList)) == true (line 80)

    $actual = $this->filterHandler->setAcceptedLevels($minLevelOrList, $maxLevel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsHandling0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->filterHandler->isHandling($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 105)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == false (line 110)
    // if ($this->processors) == false (line 117)

    $actual = $this->filterHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 105)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == false (line 110)
    // if ($this->processors) == true (line 117)

    $actual = $this->filterHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 105)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 110)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == false (line 112)
    // if ($this->processors) == false (line 117)

    $actual = $this->filterHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 105)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 110)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == false (line 112)
    // if ($this->processors) == true (line 117)

    $actual = $this->filterHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testHandle4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 105)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 110)
    // if (!$this->handler instanceof \Monolog\Handler\HandlerInterface) == true (line 112)
    // throw new \RuntimeException("The factory callable should return a HandlerInterface") -> exception (line 113)

    $actual = $this->filterHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == true (line 105)

    $actual = $this->filterHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->filterHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isHandling($record)) == false (line 133)

    $actual = $this->filterHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch2()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isHandling($record)) == true (line 133)

    $actual = $this->filterHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
