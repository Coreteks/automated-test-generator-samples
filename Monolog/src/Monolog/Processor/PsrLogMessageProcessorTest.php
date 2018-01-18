<?php

namespace tests\Monolog\Processor;

use Mockery as m;
use Monolog\Processor\PsrLogMessageProcessor;

class PsrLogMessageProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_dateFormat = null;
/**
* @var \Monolog\Processor\PsrLogMessageProcessor
*/
protected $psrLogMessageProcessor;

public function setUp()
{
    parent::setUp();

    $this->_dateFormat = null;
    $this->psrLogMessageProcessor = new \Monolog\Processor\PsrLogMessageProcessor($this->_dateFormat);
}

public function test__invoke0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === strpos($record['message'], '{')) == false (line 41)

    $actual = $this->psrLogMessageProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === strpos($record['message'], '{')) == false (line 41)
    // if (is_null($val) || is_scalar($val) || is_object($val) && method_exists($val, "__toString")) == false (line 47)
    // if ($val instanceof \DateTimeInterface) == false (line 49)
    // if (is_object($val)) == false (line 51)

    $actual = $this->psrLogMessageProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === strpos($record['message'], '{')) == false (line 41)
    // if (is_null($val) || is_scalar($val) || is_object($val) && method_exists($val, "__toString")) == false (line 47)
    // if ($val instanceof \DateTimeInterface) == false (line 49)
    // if (is_object($val)) == true (line 51)

    $actual = $this->psrLogMessageProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === strpos($record['message'], '{')) == false (line 41)
    // if (is_null($val) || is_scalar($val) || is_object($val) && method_exists($val, "__toString")) == false (line 47)
    // if ($val instanceof \DateTimeInterface) == true (line 49)

    $actual = $this->psrLogMessageProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === strpos($record['message'], '{')) == false (line 41)
    // if (is_null($val) || is_scalar($val) || is_object($val) && method_exists($val, "__toString")) == true (line 47)

    $actual = $this->psrLogMessageProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === strpos($record['message'], '{')) == true (line 41)

    $actual = $this->psrLogMessageProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
