<?php

namespace tests\Psy\Readline;

use Mockery as m;
use Psy\Readline\Transient;

class TransientTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_historyFile = null;
/**
* @var mixed
*/
protected $_historySize = null;
/**
* @var mixed
*/
protected $_eraseDups = null;
/**
* @var \Psy\Readline\Transient
*/
protected $transient;

public function setUp()
{
    parent::setUp();

    $this->_historyFile = null;
    $this->_historySize = null;
    $this->_eraseDups = null;
    $this->transient = new \Psy\Readline\Transient($this->_historyFile, $this->_historySize, $this->_eraseDups);
}

public function testIsSupported0()
{
    // TODO: Your mock expectations here

    $actual = $this->transient->isSupported();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHistory0()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->eraseDups) == false (line 51)
    // if ($this->historySize > 0) == false (line 59)

    $actual = $this->transient->addHistory($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHistory1()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->eraseDups) == false (line 51)
    // if ($this->historySize > 0) == true (line 59)
    // if ($histsize > $this->historySize) == false (line 61)

    $actual = $this->transient->addHistory($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHistory2()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->eraseDups) == false (line 51)
    // if ($this->historySize > 0) == true (line 59)
    // if ($histsize > $this->historySize) == true (line 61)

    $actual = $this->transient->addHistory($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHistory3()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->eraseDups) == true (line 51)
    // if (($key = array_search($line, $this->history)) !== false) == false (line 52)
    // if ($this->historySize > 0) == false (line 59)

    $actual = $this->transient->addHistory($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHistory4()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->eraseDups) == true (line 51)
    // if (($key = array_search($line, $this->history)) !== false) == false (line 52)
    // if ($this->historySize > 0) == true (line 59)
    // if ($histsize > $this->historySize) == false (line 61)

    $actual = $this->transient->addHistory($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHistory5()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->eraseDups) == true (line 51)
    // if (($key = array_search($line, $this->history)) !== false) == false (line 52)
    // if ($this->historySize > 0) == true (line 59)
    // if ($histsize > $this->historySize) == true (line 61)

    $actual = $this->transient->addHistory($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHistory6()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->eraseDups) == true (line 51)
    // if (($key = array_search($line, $this->history)) !== false) == true (line 52)
    // if ($this->historySize > 0) == false (line 59)

    $actual = $this->transient->addHistory($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHistory7()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->eraseDups) == true (line 51)
    // if (($key = array_search($line, $this->history)) !== false) == true (line 52)
    // if ($this->historySize > 0) == true (line 59)
    // if ($histsize > $this->historySize) == false (line 61)

    $actual = $this->transient->addHistory($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHistory8()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->eraseDups) == true (line 51)
    // if (($key = array_search($line, $this->history)) !== false) == true (line 52)
    // if ($this->historySize > 0) == true (line 59)
    // if ($histsize > $this->historySize) == true (line 61)

    $actual = $this->transient->addHistory($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClearHistory0()
{
    // TODO: Your mock expectations here

    $actual = $this->transient->clearHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListHistory0()
{
    // TODO: Your mock expectations here

    $actual = $this->transient->listHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadHistory0()
{
    // TODO: Your mock expectations here

    $actual = $this->transient->readHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadline0()
{
    $prompt = m::mock('UntypedParameter_prompt_');

    // TODO: Your mock expectations here

    $actual = $this->transient->readline($prompt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRedisplay0()
{
    // TODO: Your mock expectations here

    $actual = $this->transient->redisplay();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory0()
{
    // TODO: Your mock expectations here

    $actual = $this->transient->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
