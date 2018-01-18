<?php

namespace tests\Monolog\Formatter;

use Mockery as m;
use Monolog\Formatter\HtmlFormatter;

class HtmlFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_dateFormat = null;
/**
* @var \Monolog\Formatter\HtmlFormatter
*/
protected $htmlFormatter;

public function setUp()
{
    parent::setUp();

    $this->_dateFormat = null;
    $this->htmlFormatter = new \Monolog\Formatter\HtmlFormatter($this->_dateFormat);
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['context']) == false (line 93)
    // if ($record['extra']) == false (line 101)

    $actual = $this->htmlFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['context']) == false (line 93)
    // if ($record['extra']) == true (line 101)

    $actual = $this->htmlFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['context']) == false (line 93)
    // if ($record['extra']) == true (line 101)

    $actual = $this->htmlFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['context']) == true (line 93)
    // if ($record['extra']) == false (line 101)

    $actual = $this->htmlFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['context']) == true (line 93)
    // if ($record['extra']) == true (line 101)

    $actual = $this->htmlFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['context']) == true (line 93)
    // if ($record['extra']) == true (line 101)

    $actual = $this->htmlFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat6()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['context']) == true (line 93)
    // if ($record['extra']) == false (line 101)

    $actual = $this->htmlFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat7()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['context']) == true (line 93)
    // if ($record['extra']) == true (line 101)

    $actual = $this->htmlFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat8()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['context']) == true (line 93)
    // if ($record['extra']) == true (line 101)

    $actual = $this->htmlFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->htmlFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->htmlFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
