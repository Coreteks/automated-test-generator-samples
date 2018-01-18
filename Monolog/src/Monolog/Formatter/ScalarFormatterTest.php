<?php

namespace tests\Monolog\Formatter;

use Mockery as m;
use Monolog\Formatter\ScalarFormatter;

class ScalarFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Formatter\ScalarFormatter
*/
protected $scalarFormatter;

public function setUp()
{
    parent::setUp();

    $this->scalarFormatter = new \Monolog\Formatter\ScalarFormatter();
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->scalarFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat1()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->scalarFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
