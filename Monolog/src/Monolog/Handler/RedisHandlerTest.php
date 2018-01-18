<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\RedisHandler;

class RedisHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_redis = null;
/**
* @var mixed
*/
protected $_key = null;
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
protected $_capSize = null;
/**
* @var \Monolog\Handler\RedisHandler
*/
protected $redisHandler;

public function setUp()
{
    parent::setUp();

    $this->_redis = null;
    $this->_key = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_capSize = null;
    $this->redisHandler = new \Monolog\Handler\RedisHandler($this->_redis, $this->_key, $this->_level, $this->_bubble, $this->_capSize);
}
}
