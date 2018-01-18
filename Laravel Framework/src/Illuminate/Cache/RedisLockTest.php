<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\RedisLock;
use Mockery as m;

class RedisLockTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_redis = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_seconds = null;
/**
* @var \Illuminate\Cache\RedisLock
*/
protected $redisLock;

public function setUp()
{
    parent::setUp();

    $this->_redis = null;
    $this->_name = null;
    $this->_seconds = null;
    $this->redisLock = new \Illuminate\Cache\RedisLock($this->_redis, $this->_name, $this->_seconds);
}

public function testAcquire0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($result === 1 && $this->seconds > 0) == false (line 40)

    $actual = $this->redisLock->acquire();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAcquire1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($result === 1 && $this->seconds > 0) == true (line 40)

    $actual = $this->redisLock->acquire();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRelease0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisLock->release();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
