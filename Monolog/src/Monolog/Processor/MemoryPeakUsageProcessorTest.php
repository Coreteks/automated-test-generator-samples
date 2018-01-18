<?php

namespace tests\Monolog\Processor;

use Mockery as m;
use Monolog\Processor\MemoryPeakUsageProcessor;

class MemoryPeakUsageProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Processor\MemoryPeakUsageProcessor
*/
protected $memoryPeakUsageProcessor;

public function setUp()
{
    parent::setUp();

    $this->memoryPeakUsageProcessor = new \Monolog\Processor\MemoryPeakUsageProcessor();
}

public function test__invoke0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->memoryPeakUsageProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
