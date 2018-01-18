<?php

namespace tests\Illuminate\Filesystem;

use Illuminate\Contracts\Cache\Repository;
use Illuminate\Filesystem\Cache;
use Mockery as m;

class CacheTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_repository;
/**
* @var mixed
*/
protected $_key = null;
/**
* @var mixed
*/
protected $_expire = null;
/**
* @var \Illuminate\Filesystem\Cache
*/
protected $cache;

public function setUp()
{
    parent::setUp();

    $this->_repository = m::mock(\Illuminate\Contracts\Cache\Repository::class);
    $this->_key = null;
    $this->_expire = null;
    $this->cache = new \Illuminate\Filesystem\Cache($this->_repository, $this->_key, $this->_expire);
}

public function testLoad0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($contents)) == false (line 57)

    $actual = $this->cache->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($contents)) == true (line 57)

    $actual = $this->cache->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->expire)) == false (line 71)

    $actual = $this->cache->save();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->expire)) == true (line 71)

    $actual = $this->cache->save();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
