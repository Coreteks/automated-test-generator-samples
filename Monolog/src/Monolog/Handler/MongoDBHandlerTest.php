<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\MongoDBHandler;

class MongoDBHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_mongodb = null;
/**
* @var mixed
*/
protected $_database = null;
/**
* @var mixed
*/
protected $_collection = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\MongoDBHandler
*/
protected $mongoDBHandler;

public function setUp()
{
    parent::setUp();

    $this->_mongodb = null;
    $this->_database = null;
    $this->_collection = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->mongoDBHandler = new \Monolog\Handler\MongoDBHandler($this->_mongodb, $this->_database, $this->_collection, $this->_level, $this->_bubble);
}
}
