<?php

namespace tests\Monolog\Processor;

use Mockery as m;
use Monolog\Processor\WebProcessor;

class WebProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_serverData = null;
/**
* @var array
*/
protected $_extraFields = [];
/**
* @var \Monolog\Processor\WebProcessor
*/
protected $webProcessor;

public function setUp()
{
    parent::setUp();

    $this->_serverData = null;
    $this->_extraFields = [];
    $this->webProcessor = new \Monolog\Processor\WebProcessor($this->_serverData, $this->_extraFields);
}

public function test__invoke0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->serverData['REQUEST_URI'])) == false (line 72)

    $actual = $this->webProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->serverData['REQUEST_URI'])) == true (line 72)

    $actual = $this->webProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddExtraField0()
{
    $extraName = m::mock('UntypedParameter_extraName_');
    $serverName = m::mock('UntypedParameter_serverName_');

    // TODO: Your mock expectations here

    $actual = $this->webProcessor->addExtraField($extraName, $serverName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
