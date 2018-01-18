<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\RavenHandler;
use Raven_Client;

class RavenHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_ravenClient;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\RavenHandler
*/
protected $ravenHandler;

public function setUp()
{
    parent::setUp();

    $this->_ravenClient = m::mock(\Raven_Client::class);
    $this->_level = null;
    $this->_bubble = null;
    $this->ravenHandler = new \Monolog\Handler\RavenHandler($this->_ravenClient, $this->_level, $this->_bubble);
}

public function testHandleBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$records) == false (line 81)
    // if ($logs) == false (line 100)

    $actual = $this->ravenHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$records) == false (line 81)
    // if ($logs) == true (line 100)

    $actual = $this->ravenHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch2()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$records) == false (line 81)
    // if ($logs) == false (line 100)

    $actual = $this->ravenHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch3()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$records) == false (line 81)
    // if ($logs) == true (line 100)

    $actual = $this->ravenHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch4()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$records) == true (line 81)

    $actual = $this->ravenHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetBatchFormatter0()
{
    $formatter = m::mock(\Monolog\Formatter\FormatterInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->ravenHandler->setBatchFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBatchFormatter0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->batchFormatter) == false (line 124)

    $actual = $this->ravenHandler->getBatchFormatter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBatchFormatter1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->batchFormatter) == true (line 124)

    $actual = $this->ravenHandler->getBatchFormatter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRelease0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->ravenHandler->setRelease($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
