<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\CubeHandler;

class CubeHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_url = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\CubeHandler
*/
protected $cubeHandler;

public function setUp()
{
    parent::setUp();

    $this->_url = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->cubeHandler = new \Monolog\Handler\CubeHandler($this->_url, $this->_level, $this->_bubble);
}
}
