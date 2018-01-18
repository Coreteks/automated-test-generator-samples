<?php

namespace tests\Symfony\Bridge\Monolog;

use Mockery as m;
use Symfony\Bridge\Monolog\Logger;

class LoggerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Monolog\Logger
*/
protected $logger;

public function setUp()
{
    parent::setUp();

    $this->logger = new \Symfony\Bridge\Monolog\Logger();
}

public function testGetLogs0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($logger = $this->getDebugLogger()) == false (line 29)

    $actual = $this->logger->getLogs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLogs1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($logger = $this->getDebugLogger()) == true (line 29)

    $actual = $this->logger->getLogs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCountErrors0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($logger = $this->getDebugLogger()) == false (line 41)

    $actual = $this->logger->countErrors();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCountErrors1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($logger = $this->getDebugLogger()) == true (line 41)

    $actual = $this->logger->countErrors();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($logger = $this->getDebugLogger()) == false (line 53)

    $actual = $this->logger->clear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($logger = $this->getDebugLogger()) == true (line 53)

    $actual = $this->logger->clear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
