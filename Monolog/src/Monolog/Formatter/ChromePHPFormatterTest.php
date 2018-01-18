<?php

namespace tests\Monolog\Formatter;

use Mockery as m;
use Monolog\Formatter\ChromePHPFormatter;

class ChromePHPFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Formatter\ChromePHPFormatter
*/
protected $chromePHPFormatter;

public function setUp()
{
    parent::setUp();

    $this->chromePHPFormatter = new \Monolog\Formatter\ChromePHPFormatter();
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == false (line 44)
    // if ($record['context']) == false (line 50)
    // if ($record['extra']) == false (line 53)
    // if (count($message) === 1) == false (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == false (line 44)
    // if ($record['context']) == false (line 50)
    // if ($record['extra']) == false (line 53)
    // if (count($message) === 1) == true (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == false (line 44)
    // if ($record['context']) == false (line 50)
    // if ($record['extra']) == true (line 53)
    // if (count($message) === 1) == false (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == false (line 44)
    // if ($record['context']) == false (line 50)
    // if ($record['extra']) == true (line 53)
    // if (count($message) === 1) == true (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == false (line 44)
    // if ($record['context']) == true (line 50)
    // if ($record['extra']) == false (line 53)
    // if (count($message) === 1) == false (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == false (line 44)
    // if ($record['context']) == true (line 50)
    // if ($record['extra']) == false (line 53)
    // if (count($message) === 1) == true (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat6()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == false (line 44)
    // if ($record['context']) == true (line 50)
    // if ($record['extra']) == true (line 53)
    // if (count($message) === 1) == false (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat7()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == false (line 44)
    // if ($record['context']) == true (line 50)
    // if ($record['extra']) == true (line 53)
    // if (count($message) === 1) == true (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat8()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == true (line 44)
    // if ($record['context']) == false (line 50)
    // if ($record['extra']) == false (line 53)
    // if (count($message) === 1) == false (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat9()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == true (line 44)
    // if ($record['context']) == false (line 50)
    // if ($record['extra']) == false (line 53)
    // if (count($message) === 1) == true (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat10()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == true (line 44)
    // if ($record['context']) == false (line 50)
    // if ($record['extra']) == true (line 53)
    // if (count($message) === 1) == false (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat11()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == true (line 44)
    // if ($record['context']) == false (line 50)
    // if ($record['extra']) == true (line 53)
    // if (count($message) === 1) == true (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat12()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == true (line 44)
    // if ($record['context']) == true (line 50)
    // if ($record['extra']) == false (line 53)
    // if (count($message) === 1) == false (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat13()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == true (line 44)
    // if ($record['context']) == true (line 50)
    // if ($record['extra']) == false (line 53)
    // if (count($message) === 1) == true (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat14()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == true (line 44)
    // if ($record['context']) == true (line 50)
    // if ($record['extra']) == true (line 53)
    // if (count($message) === 1) == false (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat15()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'], $record['extra']['line'])) == true (line 44)
    // if ($record['context']) == true (line 50)
    // if ($record['extra']) == true (line 53)
    // if (count($message) === 1) == true (line 56)

    $actual = $this->chromePHPFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->chromePHPFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->chromePHPFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
