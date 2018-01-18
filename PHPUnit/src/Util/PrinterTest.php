<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\Printer;

class PrinterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_out = null;
/**
* @var \PHPUnit\Util\Printer
*/
protected $printer;

public function setUp()
{
    parent::setUp();

    $this->_out = null;
    $this->printer = new \PHPUnit\Util\Printer($this->_out);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->out && \strncmp($this->outTarget, 'php://', 6) !== 0) == false (line 75)

    $actual = $this->printer->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->out && \strncmp($this->outTarget, 'php://', 6) !== 0) == true (line 75)

    $actual = $this->printer->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrementalFlush0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->out) == false (line 89)

    $actual = $this->printer->incrementalFlush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrementalFlush1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->out) == true (line 89)

    $actual = $this->printer->incrementalFlush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite0()
{
    $buffer = m::mock('UntypedParameter_buffer_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->out) == false (line 101)
    // if (PHP_SAPI !== 'cli' && PHP_SAPI !== 'phpdbg') == false (line 108)
    // if ($this->autoFlush) == false (line 114)

    $actual = $this->printer->write($buffer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite1()
{
    $buffer = m::mock('UntypedParameter_buffer_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->out) == false (line 101)
    // if (PHP_SAPI !== 'cli' && PHP_SAPI !== 'phpdbg') == false (line 108)
    // if ($this->autoFlush) == true (line 114)

    $actual = $this->printer->write($buffer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite2()
{
    $buffer = m::mock('UntypedParameter_buffer_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->out) == false (line 101)
    // if (PHP_SAPI !== 'cli' && PHP_SAPI !== 'phpdbg') == true (line 108)
    // if ($this->autoFlush) == false (line 114)

    $actual = $this->printer->write($buffer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite3()
{
    $buffer = m::mock('UntypedParameter_buffer_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->out) == false (line 101)
    // if (PHP_SAPI !== 'cli' && PHP_SAPI !== 'phpdbg') == true (line 108)
    // if ($this->autoFlush) == true (line 114)

    $actual = $this->printer->write($buffer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite4()
{
    $buffer = m::mock('UntypedParameter_buffer_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->out) == true (line 101)
    // if ($this->autoFlush) == false (line 104)

    $actual = $this->printer->write($buffer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite5()
{
    $buffer = m::mock('UntypedParameter_buffer_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->out) == true (line 101)
    // if ($this->autoFlush) == true (line 104)

    $actual = $this->printer->write($buffer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAutoFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->printer->getAutoFlush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetAutoFlush0()
{
    $autoFlush = m::mock('UntypedParameter_autoFlush_');

    // TODO: Your mock expectations here

    $actual = $this->printer->setAutoFlush($autoFlush);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
