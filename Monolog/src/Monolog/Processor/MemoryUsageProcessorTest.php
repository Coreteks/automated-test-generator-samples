<?php

namespace tests\Monolog\Processor;

use Mockery as m;
use Monolog\Processor\MemoryUsageProcessor;

class MemoryUsageProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Processor\MemoryUsageProcessor
*/
protected $memoryUsageProcessor;

public function setUp()
{
    parent::setUp();

    $this->memoryUsageProcessor = new \Monolog\Processor\MemoryUsageProcessor();
}

public function test__invoke0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->memoryUsageProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
