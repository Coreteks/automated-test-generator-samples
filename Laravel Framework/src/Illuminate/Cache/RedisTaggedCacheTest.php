<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\RedisTaggedCache;
use Mockery as m;

class RedisTaggedCacheTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Cache\RedisTaggedCache
*/
protected $redisTaggedCache;

public function setUp()
{
    parent::setUp();

    $this->redisTaggedCache = new \Illuminate\Cache\RedisTaggedCache();
}

public function testPut0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->redisTaggedCache->put($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForever0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->redisTaggedCache->forever($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisTaggedCache->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
