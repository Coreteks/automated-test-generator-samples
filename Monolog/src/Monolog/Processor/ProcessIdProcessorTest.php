<?php

namespace tests\Monolog\Processor;

use Mockery as m;
use Monolog\Processor\ProcessIdProcessor;

class ProcessIdProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Processor\ProcessIdProcessor
*/
protected $processIdProcessor;

public function setUp()
{
    parent::setUp();

    $this->processIdProcessor = new \Monolog\Processor\ProcessIdProcessor();
}

public function test__invoke0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->processIdProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
