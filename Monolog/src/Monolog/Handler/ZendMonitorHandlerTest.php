<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\ZendMonitorHandler;

class ZendMonitorHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\ZendMonitorHandler
*/
protected $zendMonitorHandler;

public function setUp()
{
    parent::setUp();

    $this->_level = null;
    $this->_bubble = null;
    $this->zendMonitorHandler = new \Monolog\Handler\ZendMonitorHandler($this->_level, $this->_bubble);
}

public function testGetDefaultFormatter0()
{
    // TODO: Your mock expectations here

    $actual = $this->zendMonitorHandler->getDefaultFormatter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLevelMap0()
{
    // TODO: Your mock expectations here

    $actual = $this->zendMonitorHandler->getLevelMap();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
