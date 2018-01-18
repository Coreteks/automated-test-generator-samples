<?php

namespace tests\Monolog\Formatter;

use Mockery as m;
use Monolog\Formatter\WildfireFormatter;

class WildfireFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Formatter\WildfireFormatter
*/
protected $wildfireFormatter;

public function setUp()
{
    parent::setUp();

    $this->wildfireFormatter = new \Monolog\Formatter\WildfireFormatter();
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat6()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat7()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat8()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat9()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat10()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat11()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat12()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat13()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat14()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat15()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat16()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat17()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat18()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat19()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat20()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat21()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat22()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat23()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat24()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat25()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat26()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat27()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat28()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat29()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat30()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat31()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == false (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat32()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat33()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat34()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat35()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat36()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat37()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat38()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat39()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat40()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat41()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat42()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat43()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat44()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat45()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat46()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat47()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == false (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat48()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat49()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat50()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat51()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat52()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat53()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat54()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat55()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == false (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat56()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat57()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat58()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat59()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == false (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat60()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat61()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == false (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat62()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == false (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat63()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($record['extra']['file'])) == true (line 48)
    // if (isset($record['extra']['line'])) == true (line 52)
    // if ($record['context']) == true (line 60)
    // if ($record['extra']) == true (line 64)
    // if (count($message) === 1) == true (line 68)
    // if (isset($record['context'][self::TABLE])) == true (line 72)

    $actual = $this->wildfireFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function testFormatBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \BadMethodCallException('Batch formatting does not make sense for the WildfireFormatter') -> exception (line 105)

    $actual = $this->wildfireFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
