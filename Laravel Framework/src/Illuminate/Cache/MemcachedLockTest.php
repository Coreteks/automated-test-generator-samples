<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\MemcachedLock;
use Mockery as m;

class MemcachedLockTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_memcached = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_seconds = null;
/**
* @var \Illuminate\Cache\MemcachedLock
*/
protected $memcachedLock;

public function setUp()
{
    parent::setUp();

    $this->_memcached = null;
    $this->_name = null;
    $this->_seconds = null;
    $this->memcachedLock = new \Illuminate\Cache\MemcachedLock($this->_memcached, $this->_name, $this->_seconds);
}

public function testAcquire0()
{
    // TODO: Your mock expectations here

    $actual = $this->memcachedLock->acquire();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRelease0()
{
    // TODO: Your mock expectations here

    $actual = $this->memcachedLock->release();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
