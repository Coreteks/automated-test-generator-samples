<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\TagSet;
use Illuminate\Cache\TaggedCache;
use Illuminate\Contracts\Cache\Store;
use Mockery as m;

class TaggedCacheTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_store;
/**
* @var \Mockery\MockInterface
*/
protected $_tags;
/**
* @var \Illuminate\Cache\TaggedCache
*/
protected $taggedCache;

public function setUp()
{
    parent::setUp();

    $this->_store = m::mock(\Illuminate\Contracts\Cache\Store::class);
    $this->_tags = m::mock(\Illuminate\Cache\TagSet::class);
    $this->taggedCache = new \Illuminate\Cache\TaggedCache($this->_store, $this->_tags);
}

public function testIncrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->taggedCache->increment($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->taggedCache->decrement($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->taggedCache->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTaggedItemKey0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->taggedCache->taggedItemKey($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
