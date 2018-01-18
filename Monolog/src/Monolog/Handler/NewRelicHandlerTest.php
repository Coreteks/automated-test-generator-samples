<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\NewRelicHandler;

class NewRelicHandlerTest extends \PHPUnit_Framework_TestCase
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
* @var mixed
*/
protected $_appName = null;
/**
* @var mixed
*/
protected $_explodeArrays = null;
/**
* @var mixed
*/
protected $_transactionName = null;
/**
* @var \Monolog\Handler\NewRelicHandler
*/
protected $newRelicHandler;

public function setUp()
{
    parent::setUp();

    $this->_level = null;
    $this->_bubble = null;
    $this->_appName = null;
    $this->_explodeArrays = null;
    $this->_transactionName = null;
    $this->newRelicHandler = new \Monolog\Handler\NewRelicHandler($this->_level, $this->_bubble, $this->_appName, $this->_explodeArrays, $this->_transactionName);
}
}
