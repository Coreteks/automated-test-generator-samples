<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\RedisStore;
use Illuminate\Contracts\Redis\Factory;
use Mockery as m;

class RedisStoreTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_redis;
/**
* @var mixed
*/
protected $_prefix = null;
/**
* @var mixed
*/
protected $_connection = null;
/**
* @var \Illuminate\Cache\RedisStore
*/
protected $redisStore;

public function setUp()
{
    parent::setUp();

    $this->_redis = m::mock(\Illuminate\Contracts\Redis\Factory::class);
    $this->_prefix = null;
    $this->_connection = null;
    $this->redisStore = new \Illuminate\Cache\RedisStore($this->_redis, $this->_prefix, $this->_connection);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->redisStore->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMany0()
{
    $keys = [];

    // TODO: Your mock expectations here

    $actual = $this->redisStore->many($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMany1()
{
    $keys = [];

    // TODO: Your mock expectations here

    $actual = $this->redisStore->many($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->redisStore->put($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPutMany0()
{
    $values = [];
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->redisStore->putMany($values, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPutMany1()
{
    $values = [];
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->redisStore->putMany($values, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->redisStore->add($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->redisStore->increment($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->redisStore->decrement($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForever0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->redisStore->forever($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLock0()
{
    $name = m::mock('UntypedParameter_name_');
    $seconds = m::mock('UntypedParameter_seconds_');

    // TODO: Your mock expectations here

    $actual = $this->redisStore->lock($name, $seconds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->redisStore->forget($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisStore->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTags0()
{
    $names = m::mock('UntypedParameter_names_');

    // TODO: Your mock expectations here

    $actual = $this->redisStore->tags($names);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnection0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisStore->connection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConnection0()
{
    $connection = m::mock('UntypedParameter_connection_');

    // TODO: Your mock expectations here

    $actual = $this->redisStore->setConnection($connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRedis0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisStore->getRedis();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisStore->getPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPrefix0()
{
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    $actual = $this->redisStore->setPrefix($prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
