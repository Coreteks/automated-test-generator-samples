<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\LogmaticHandler;

class LogmaticHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_token = null;
/**
* @var mixed
*/
protected $_hostname = null;
/**
* @var mixed
*/
protected $_appname = null;
/**
* @var mixed
*/
protected $_useSSL = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\LogmaticHandler
*/
protected $logmaticHandler;

public function setUp()
{
    parent::setUp();

    $this->_token = null;
    $this->_hostname = null;
    $this->_appname = null;
    $this->_useSSL = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->logmaticHandler = new \Monolog\Handler\LogmaticHandler($this->_token, $this->_hostname, $this->_appname, $this->_useSSL, $this->_level, $this->_bubble);
}
}
