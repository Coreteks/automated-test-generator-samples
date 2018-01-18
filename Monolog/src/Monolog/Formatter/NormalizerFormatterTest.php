<?php

namespace tests\Monolog\Formatter;

use Mockery as m;
use Monolog\Formatter\NormalizerFormatter;

class NormalizerFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_dateFormat = null;
/**
* @var \Monolog\Formatter\NormalizerFormatter
*/
protected $normalizerFormatter;

public function setUp()
{
    parent::setUp();

    $this->_dateFormat = null;
    $this->normalizerFormatter = new \Monolog\Formatter\NormalizerFormatter($this->_dateFormat);
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->normalizerFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->normalizerFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->normalizerFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDetectAndCleanUtf80()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($data) && !preg_match('//u', $data)) == false (line 291)

    $actual = $this->normalizerFormatter->detectAndCleanUtf8($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDetectAndCleanUtf81()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($data) && !preg_match('//u', $data)) == true (line 291)

    $actual = $this->normalizerFormatter->detectAndCleanUtf8($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
