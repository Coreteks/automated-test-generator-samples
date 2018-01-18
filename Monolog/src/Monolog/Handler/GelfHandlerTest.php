<?php

namespace tests\Monolog\Handler;

use Gelf\PublisherInterface;
use Mockery as m;
use Monolog\Handler\GelfHandler;

class GelfHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_publisher;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\GelfHandler
*/
protected $gelfHandler;

public function setUp()
{
    parent::setUp();

    $this->_publisher = m::mock(\Gelf\PublisherInterface::class);
    $this->_level = null;
    $this->_bubble = null;
    $this->gelfHandler = new \Monolog\Handler\GelfHandler($this->_publisher, $this->_level, $this->_bubble);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->gelfHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
