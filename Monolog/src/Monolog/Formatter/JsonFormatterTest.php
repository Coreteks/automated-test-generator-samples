<?php

namespace tests\Monolog\Formatter;

use Mockery as m;
use Monolog\Formatter\JsonFormatter;

class JsonFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_batchMode = null;
/**
* @var mixed
*/
protected $_appendNewline = null;
/**
* @var \Monolog\Formatter\JsonFormatter
*/
protected $jsonFormatter;

public function setUp()
{
    parent::setUp();

    $this->_batchMode = null;
    $this->_appendNewline = null;
    $this->jsonFormatter = new \Monolog\Formatter\JsonFormatter($this->_batchMode, $this->_appendNewline);
}

public function testGetBatchMode0()
{
    // TODO: Your mock expectations here

    $actual = $this->jsonFormatter->getBatchMode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsAppendingNewlines0()
{
    // TODO: Your mock expectations here

    $actual = $this->jsonFormatter->isAppendingNewlines();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->jsonFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->batchMode) (line 75)
    // Case static::BATCH_MODE_NEWLINES == false (line 76)
    // Case static::BATCH_MODE_JSON == false (line 79)
    // Default (line 80)

    $actual = $this->jsonFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->batchMode) (line 75)
    // Case static::BATCH_MODE_NEWLINES == false (line 76)
    // Case static::BATCH_MODE_JSON == true (line 79)

    $actual = $this->jsonFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch2()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->batchMode) (line 75)
    // Case static::BATCH_MODE_NEWLINES == true (line 76)

    $actual = $this->jsonFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncludeStacktraces0()
{
    $include = m::mock('UntypedParameter_include_');

    // TODO: Your mock expectations here

    $actual = $this->jsonFormatter->includeStacktraces($include);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
