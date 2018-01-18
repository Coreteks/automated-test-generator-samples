<?php

namespace tests\Monolog\Formatter;

use Mockery as m;
use Monolog\Formatter\FluentdFormatter;

class FluentdFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_levelTag = null;
/**
* @var \Monolog\Formatter\FluentdFormatter
*/
protected $fluentdFormatter;

public function setUp()
{
    parent::setUp();

    $this->_levelTag = null;
    $this->fluentdFormatter = new \Monolog\Formatter\FluentdFormatter($this->_levelTag);
}

public function testIsUsingLevelsInTag0()
{
    // TODO: Your mock expectations here

    $actual = $this->fluentdFormatter->isUsingLevelsInTag();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->levelTag) == false (line 59)
    // if (!$this->levelTag) == false (line 68)

    $actual = $this->fluentdFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->levelTag) == false (line 59)
    // if (!$this->levelTag) == true (line 68)

    $actual = $this->fluentdFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->levelTag) == true (line 59)
    // if (!$this->levelTag) == false (line 68)

    $actual = $this->fluentdFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->levelTag) == true (line 59)
    // if (!$this->levelTag) == true (line 68)

    $actual = $this->fluentdFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->fluentdFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->fluentdFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
