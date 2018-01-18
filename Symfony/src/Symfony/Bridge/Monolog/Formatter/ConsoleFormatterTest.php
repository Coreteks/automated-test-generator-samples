<?php

namespace tests\Symfony\Bridge\Monolog\Formatter;

use Mockery as m;
use Symfony\Bridge\Monolog\Formatter\ConsoleFormatter;

class ConsoleFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_options = [];
/**
* @var \Symfony\Bridge\Monolog\Formatter\ConsoleFormatter
*/
protected $consoleFormatter;

public function setUp()
{
    parent::setUp();

    $this->_options = [];
    $this->consoleFormatter = new \Symfony\Bridge\Monolog\Formatter\ConsoleFormatter($this->_options);
}

public function testFormatBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->consoleFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->consoleFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->options['multiline']) == false (line 103)
    // if ($context) == false (line 110)
    // if ($extra) == false (line 115)

    $actual = $this->consoleFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->options['multiline']) == false (line 103)
    // if ($context) == false (line 110)
    // if ($extra) == true (line 115)

    $actual = $this->consoleFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->options['multiline']) == false (line 103)
    // if ($context) == true (line 110)
    // if ($extra) == false (line 115)

    $actual = $this->consoleFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->options['multiline']) == false (line 103)
    // if ($context) == true (line 110)
    // if ($extra) == true (line 115)

    $actual = $this->consoleFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->options['multiline']) == true (line 103)
    // if ($context) == false (line 110)
    // if ($extra) == false (line 115)

    $actual = $this->consoleFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->options['multiline']) == true (line 103)
    // if ($context) == false (line 110)
    // if ($extra) == true (line 115)

    $actual = $this->consoleFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat6()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->options['multiline']) == true (line 103)
    // if ($context) == true (line 110)
    // if ($extra) == false (line 115)

    $actual = $this->consoleFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat7()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->options['multiline']) == true (line 103)
    // if ($context) == true (line 110)
    // if ($extra) == true (line 115)

    $actual = $this->consoleFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEchoLine0()
{
    $line = m::mock('UntypedParameter_line_');
    $depth = m::mock('UntypedParameter_depth_');
    $indentPad = m::mock('UntypedParameter_indentPad_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (-1 !== $depth) == false (line 138)

    $actual = $this->consoleFormatter->echoLine($line, $depth, $indentPad);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEchoLine1()
{
    $line = m::mock('UntypedParameter_line_');
    $depth = m::mock('UntypedParameter_depth_');
    $indentPad = m::mock('UntypedParameter_indentPad_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (-1 !== $depth) == true (line 138)

    $actual = $this->consoleFormatter->echoLine($line, $depth, $indentPad);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCastObject0()
{
    $v = m::mock('UntypedParameter_v_');
    $a = [];
    $s = m::mock(\Symfony\Component\VarDumper\Cloner\Stub::class);
    $isNested = m::mock('UntypedParameter_isNested_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->options['multiline']) == false (line 148)
    // if ($isNested && !$v instanceof \DateTimeInterface) == false (line 152)

    $actual = $this->consoleFormatter->castObject($v, $a, $s, $isNested);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCastObject1()
{
    $v = m::mock('UntypedParameter_v_');
    $a = [];
    $s = m::mock(\Symfony\Component\VarDumper\Cloner\Stub::class);
    $isNested = m::mock('UntypedParameter_isNested_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->options['multiline']) == false (line 148)
    // if ($isNested && !$v instanceof \DateTimeInterface) == true (line 152)

    $actual = $this->consoleFormatter->castObject($v, $a, $s, $isNested);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCastObject2()
{
    $v = m::mock('UntypedParameter_v_');
    $a = [];
    $s = m::mock(\Symfony\Component\VarDumper\Cloner\Stub::class);
    $isNested = m::mock('UntypedParameter_isNested_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->options['multiline']) == true (line 148)

    $actual = $this->consoleFormatter->castObject($v, $a, $s, $isNested);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
