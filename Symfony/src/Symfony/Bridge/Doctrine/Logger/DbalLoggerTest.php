<?php

namespace tests\Symfony\Bridge\Doctrine\Logger;

use Mockery as m;
use Psr\Log\LoggerInterface;
use Symfony\Bridge\Doctrine\Logger\DbalLogger;
use Symfony\Component\Stopwatch\Stopwatch;

class DbalLoggerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_logger;
/**
* @var \Mockery\MockInterface
*/
protected $_stopwatch;
/**
* @var \Symfony\Bridge\Doctrine\Logger\DbalLogger
*/
protected $dbalLogger;

public function setUp()
{
    parent::setUp();

    $this->_logger = m::mock(\Psr\Log\LoggerInterface::class);
    $this->_stopwatch = m::mock(\Symfony\Component\Stopwatch\Stopwatch::class);
    $this->dbalLogger = new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->_logger, $this->_stopwatch);
}

public function testStartQuery0()
{
    $sql = m::mock('UntypedParameter_sql_');
    $params = [];
    $types = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->stopwatch) == false (line 40)
    // if (null !== $this->logger) == false (line 44)

    $actual = $this->dbalLogger->startQuery($sql, $params, $types);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartQuery1()
{
    $sql = m::mock('UntypedParameter_sql_');
    $params = [];
    $types = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->stopwatch) == false (line 40)
    // if (null !== $this->logger) == true (line 44)

    $actual = $this->dbalLogger->startQuery($sql, $params, $types);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartQuery2()
{
    $sql = m::mock('UntypedParameter_sql_');
    $params = [];
    $types = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->stopwatch) == true (line 40)
    // if (null !== $this->logger) == false (line 44)

    $actual = $this->dbalLogger->startQuery($sql, $params, $types);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartQuery3()
{
    $sql = m::mock('UntypedParameter_sql_');
    $params = [];
    $types = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->stopwatch) == true (line 40)
    // if (null !== $this->logger) == true (line 44)

    $actual = $this->dbalLogger->startQuery($sql, $params, $types);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStopQuery0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->stopwatch) == false (line 54)

    $actual = $this->dbalLogger->stopQuery();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStopQuery1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->stopwatch) == true (line 54)

    $actual = $this->dbalLogger->stopQuery();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
