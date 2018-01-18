<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\MemcachedStore;
use Mockery as m;

class MemcachedStoreTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_memcached = null;
/**
* @var mixed
*/
protected $_prefix = null;
/**
* @var \Illuminate\Cache\MemcachedStore
*/
protected $memcachedStore;

public function setUp()
{
    parent::setUp();

    $this->_memcached = null;
    $this->_prefix = null;
    $this->memcachedStore = new \Illuminate\Cache\MemcachedStore($this->_memcached, $this->_prefix);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->memcached->getResultCode() == 0) == false (line 62)

    $actual = $this->memcachedStore->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->memcached->getResultCode() == 0) == true (line 62)

    $actual = $this->memcachedStore->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMany0()
{
    $keys = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->onVersionThree) == false (line 81)
    // if ($this->memcached->getResultCode() != 0) == false (line 89)

    $actual = $this->memcachedStore->many($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMany1()
{
    $keys = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->onVersionThree) == false (line 81)
    // if ($this->memcached->getResultCode() != 0) == true (line 89)

    $actual = $this->memcachedStore->many($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMany2()
{
    $keys = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->onVersionThree) == true (line 81)
    // if ($this->memcached->getResultCode() != 0) == false (line 89)

    $actual = $this->memcachedStore->many($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMany3()
{
    $keys = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->onVersionThree) == true (line 81)
    // if ($this->memcached->getResultCode() != 0) == true (line 89)

    $actual = $this->memcachedStore->many($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->memcachedStore->put($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPutMany0()
{
    $values = [];
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->memcachedStore->putMany($values, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPutMany1()
{
    $values = [];
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->memcachedStore->putMany($values, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->memcachedStore->add($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->memcachedStore->increment($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->memcachedStore->decrement($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForever0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->memcachedStore->forever($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLock0()
{
    $name = m::mock('UntypedParameter_name_');
    $seconds = m::mock('UntypedParameter_seconds_');

    // TODO: Your mock expectations here

    $actual = $this->memcachedStore->lock($name, $seconds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->memcachedStore->forget($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->memcachedStore->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMemcached0()
{
    // TODO: Your mock expectations here

    $actual = $this->memcachedStore->getMemcached();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->memcachedStore->getPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPrefix0()
{
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    $actual = $this->memcachedStore->setPrefix($prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
