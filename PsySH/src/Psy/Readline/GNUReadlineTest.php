<?php

namespace tests\Psy\Readline;

use Mockery as m;
use Psy\Readline\GNUReadline;

class GNUReadlineTest extends \PHPUnit_Framework_TestCase
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
* @var \Psy\Readline\GNUReadline
*/
protected $gNUReadline;

public function setUp()
{
    parent::setUp();

    $this->_historyFile = null;
    $this->_historySize = null;
    $this->_eraseDups = null;
    $this->gNUReadline = new \Psy\Readline\GNUReadline($this->_historyFile, $this->_historySize, $this->_eraseDups);
}

public function testIsSupported0()
{
    // TODO: Your mock expectations here

    $actual = $this->gNUReadline->isSupported();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHistory0()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($res = readline_add_history($line)) == false (line 61)

    $actual = $this->gNUReadline->addHistory($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHistory1()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($res = readline_add_history($line)) == true (line 61)

    $actual = $this->gNUReadline->addHistory($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClearHistory0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($res = readline_clear_history()) == false (line 73)

    $actual = $this->gNUReadline->clearHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClearHistory1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($res = readline_clear_history()) == true (line 73)

    $actual = $this->gNUReadline->clearHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListHistory0()
{
    // TODO: Your mock expectations here

    $actual = $this->gNUReadline->listHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadHistory0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.6.7', '>=') || !ini_get('open_basedir')) == false (line 99)

    $actual = $this->gNUReadline->readHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadHistory1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.6.7', '>=') || !ini_get('open_basedir')) == true (line 99)

    $actual = $this->gNUReadline->readHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadline0()
{
    $prompt = m::mock('UntypedParameter_prompt_');

    // TODO: Your mock expectations here

    $actual = $this->gNUReadline->readline($prompt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRedisplay0()
{
    // TODO: Your mock expectations here

    $actual = $this->gNUReadline->redisplay();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == true (line 141)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == false (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == true (line 136)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == false (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == false (line 152)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == false (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory48()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == false (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory49()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == false (line 141)
    // if ($this->eraseDups) == true (line 145)
    // if ($this->historySize > 0) == true (line 152)
    // if ($histsize > $this->historySize) == true (line 154)
    // if ($this->historyFile !== false) == true (line 164)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory50()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == false (line 136)
    // if (!$hist) == true (line 141)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory51()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->historyFile !== false) == true (line 130)
    // if (!$res || !$this->eraseDups && !$this->historySize > 0) == true (line 136)

    $actual = $this->gNUReadline->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
