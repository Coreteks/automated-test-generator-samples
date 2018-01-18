<?php

namespace tests\Monolog\Formatter;

use Mockery as m;
use Monolog\Formatter\MongoDBFormatter;

class MongoDBFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_maxNestingLevel = null;
/**
* @var mixed
*/
protected $_exceptionTraceAsString = null;
/**
* @var \Monolog\Formatter\MongoDBFormatter
*/
protected $mongoDBFormatter;

public function setUp()
{
    parent::setUp();

    $this->_maxNestingLevel = null;
    $this->_exceptionTraceAsString = null;
    $this->mongoDBFormatter = new \Monolog\Formatter\MongoDBFormatter($this->_maxNestingLevel, $this->_exceptionTraceAsString);
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->mongoDBFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->mongoDBFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->mongoDBFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
