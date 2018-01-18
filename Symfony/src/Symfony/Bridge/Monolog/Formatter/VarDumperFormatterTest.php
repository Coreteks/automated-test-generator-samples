<?php

namespace tests\Symfony\Bridge\Monolog\Formatter;

use Mockery as m;
use Symfony\Bridge\Monolog\Formatter\VarDumperFormatter;
use Symfony\Component\VarDumper\Cloner\VarCloner;

class VarDumperFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cloner;
/**
* @var \Symfony\Bridge\Monolog\Formatter\VarDumperFormatter
*/
protected $varDumperFormatter;

public function setUp()
{
    parent::setUp();

    $this->_cloner = m::mock(\Symfony\Component\VarDumper\Cloner\VarCloner::class);
    $this->varDumperFormatter = new \Symfony\Bridge\Monolog\Formatter\VarDumperFormatter($this->_cloner);
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->varDumperFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->varDumperFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->varDumperFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
