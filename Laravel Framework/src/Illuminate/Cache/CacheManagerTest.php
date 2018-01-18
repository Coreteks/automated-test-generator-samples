<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\CacheManager;
use Mockery as m;

class CacheManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_app = null;
/**
* @var \Illuminate\Cache\CacheManager
*/
protected $cacheManager;

public function setUp()
{
    parent::setUp();

    $this->_app = null;
    $this->cacheManager = new \Illuminate\Cache\CacheManager($this->_app);
}

public function testStore0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->cacheManager->store($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDriver0()
{
    $driver = m::mock('UntypedParameter_driver_');

    // TODO: Your mock expectations here

    $actual = $this->cacheManager->driver($driver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRepository0()
{
    $store = m::mock(\Illuminate\Contracts\Cache\Store::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->bound(\Illuminate\Contracts\Events\Dispatcher::class)) == false (line 229)

    $actual = $this->cacheManager->repository($store);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRepository1()
{
    $store = m::mock(\Illuminate\Contracts\Cache\Store::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->bound(\Illuminate\Contracts\Events\Dispatcher::class)) == true (line 229)

    $actual = $this->cacheManager->repository($store);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultDriver0()
{
    // TODO: Your mock expectations here

    $actual = $this->cacheManager->getDefaultDriver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultDriver0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->cacheManager->setDefaultDriver($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend0()
{
    $driver = m::mock('UntypedParameter_driver_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->cacheManager->extend($driver, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->cacheManager->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
