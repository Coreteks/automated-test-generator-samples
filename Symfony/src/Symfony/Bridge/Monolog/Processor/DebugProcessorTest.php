<?php

namespace tests\Symfony\Bridge\Monolog\Processor;

use Mockery as m;
use Symfony\Bridge\Monolog\Processor\DebugProcessor;

class DebugProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Monolog\Processor\DebugProcessor
*/
protected $debugProcessor;

public function setUp()
{
    parent::setUp();

    $this->debugProcessor = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
}

public function test__invoke0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($record['level']) (line 32)
    // Case \Monolog\Logger::ERROR == false (line 33)
    // Case \Monolog\Logger::CRITICAL == false (line 34)
    // Case \Monolog\Logger::ALERT == false (line 35)
    // Case \Monolog\Logger::EMERGENCY == false (line 36)

    $actual = $this->debugProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($record['level']) (line 32)
    // Case \Monolog\Logger::ERROR == false (line 33)
    // Case \Monolog\Logger::CRITICAL == false (line 34)
    // Case \Monolog\Logger::ALERT == false (line 35)
    // Case \Monolog\Logger::EMERGENCY == true (line 36)

    $actual = $this->debugProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($record['level']) (line 32)
    // Case \Monolog\Logger::ERROR == false (line 33)
    // Case \Monolog\Logger::CRITICAL == false (line 34)
    // Case \Monolog\Logger::ALERT == true (line 35)

    $actual = $this->debugProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($record['level']) (line 32)
    // Case \Monolog\Logger::ERROR == false (line 33)
    // Case \Monolog\Logger::CRITICAL == true (line 34)

    $actual = $this->debugProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($record['level']) (line 32)
    // Case \Monolog\Logger::ERROR == true (line 33)

    $actual = $this->debugProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLogs0()
{
    // TODO: Your mock expectations here

    $actual = $this->debugProcessor->getLogs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCountErrors0()
{
    // TODO: Your mock expectations here

    $actual = $this->debugProcessor->countErrors();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear0()
{
    // TODO: Your mock expectations here

    $actual = $this->debugProcessor->clear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
