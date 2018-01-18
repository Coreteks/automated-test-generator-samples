<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\LogEntriesHandler;

class LogEntriesHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_token = null;
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
* @var \Monolog\Handler\LogEntriesHandler
*/
protected $logEntriesHandler;

public function setUp()
{
    parent::setUp();

    $this->_token = null;
    $this->_useSSL = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->logEntriesHandler = new \Monolog\Handler\LogEntriesHandler($this->_token, $this->_useSSL, $this->_level, $this->_bubble);
}
}
