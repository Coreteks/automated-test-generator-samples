<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\PsrHandler;
use Psr\Log\LoggerInterface;

class PsrHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_logger;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\PsrHandler
*/
protected $psrHandler;

public function setUp()
{
    parent::setUp();

    $this->_logger = m::mock(\Psr\Log\LoggerInterface::class);
    $this->_level = null;
    $this->_bubble = null;
    $this->psrHandler = new \Monolog\Handler\PsrHandler($this->_logger, $this->_level, $this->_bubble);
}

public function testHandle0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 48)

    $actual = $this->psrHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == true (line 48)

    $actual = $this->psrHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
