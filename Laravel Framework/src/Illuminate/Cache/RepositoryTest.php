<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\Repository;
use Illuminate\Contracts\Cache\Store;
use Mockery as m;

class RepositoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_store;
/**
* @var \Illuminate\Cache\Repository
*/
protected $repository;

public function setUp()
{
    parent::setUp();

    $this->_store = m::mock(\Illuminate\Contracts\Cache\Store::class);
    $this->repository = new \Illuminate\Cache\Repository($this->_store);
}

public function testHas0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->repository->has($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == false (line 82)
    // if (is_null($value)) == false (line 91)

    $actual = $this->repository->get($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == false (line 82)
    // if (is_null($value)) == true (line 91)

    $actual = $this->repository->get($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet2()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == true (line 82)

    $actual = $this->repository->get($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMany0()
{
    $keys = [];

    // TODO: Your mock expectations here

    $actual = $this->repository->many($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMultiple0()
{
    $keys = m::mock('UntypedParameter_keys_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($default)) == false (line 126)

    $actual = $this->repository->getMultiple($keys, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMultiple1()
{
    $keys = m::mock('UntypedParameter_keys_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($default)) == false (line 126)
    // if (!isset($default[$key])) == false (line 131)

    $actual = $this->repository->getMultiple($keys, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMultiple2()
{
    $keys = m::mock('UntypedParameter_keys_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($default)) == false (line 126)
    // if (!isset($default[$key])) == true (line 131)

    $actual = $this->repository->getMultiple($keys, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMultiple3()
{
    $keys = m::mock('UntypedParameter_keys_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($default)) == true (line 126)

    $actual = $this->repository->getMultiple($keys, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPull0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->repository->pull($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == false (line 190)
    // if (!is_null($minutes = $this->getMinutes($minutes))) == false (line 194)

    $actual = $this->repository->put($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == false (line 190)
    // if (!is_null($minutes = $this->getMinutes($minutes))) == true (line 194)

    $actual = $this->repository->put($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut2()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == true (line 190)

    $actual = $this->repository->put($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $ttl = m::mock('UntypedParameter_ttl_');

    // TODO: Your mock expectations here

    $actual = $this->repository->set($key, $value, $ttl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPutMany0()
{
    $values = [];
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($minutes = $this->getMinutes($minutes))) == false (line 218)

    $actual = $this->repository->putMany($values, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPutMany1()
{
    $values = [];
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($minutes = $this->getMinutes($minutes))) == true (line 218)

    $actual = $this->repository->putMany($values, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPutMany2()
{
    $values = [];
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($minutes = $this->getMinutes($minutes))) == true (line 218)

    $actual = $this->repository->putMany($values, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetMultiple0()
{
    $values = m::mock('UntypedParameter_values_');
    $ttl = m::mock('UntypedParameter_ttl_');

    // TODO: Your mock expectations here

    $actual = $this->repository->setMultiple($values, $ttl);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($minutes = $this->getMinutes($minutes))) == false (line 245)
    // if (method_exists($this->store, 'add')) == false (line 252)
    // if (is_null($this->get($key))) == false (line 261)

    $actual = $this->repository->add($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($minutes = $this->getMinutes($minutes))) == false (line 245)
    // if (method_exists($this->store, 'add')) == false (line 252)
    // if (is_null($this->get($key))) == true (line 261)

    $actual = $this->repository->add($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd2()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($minutes = $this->getMinutes($minutes))) == false (line 245)
    // if (method_exists($this->store, 'add')) == true (line 252)

    $actual = $this->repository->add($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd3()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($minutes = $this->getMinutes($minutes))) == true (line 245)

    $actual = $this->repository->add($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->repository->increment($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->repository->decrement($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForever0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->repository->forever($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemember0()
{
    $key = m::mock('UntypedParameter_key_');
    $minutes = m::mock('UntypedParameter_minutes_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($value)) == false (line 323)

    $actual = $this->repository->remember($key, $minutes, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemember1()
{
    $key = m::mock('UntypedParameter_key_');
    $minutes = m::mock('UntypedParameter_minutes_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($value)) == true (line 323)

    $actual = $this->repository->remember($key, $minutes, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSear0()
{
    $key = m::mock('UntypedParameter_key_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->repository->sear($key, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRememberForever0()
{
    $key = m::mock('UntypedParameter_key_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($value)) == false (line 358)

    $actual = $this->repository->rememberForever($key, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRememberForever1()
{
    $key = m::mock('UntypedParameter_key_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($value)) == true (line 358)

    $actual = $this->repository->rememberForever($key, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->repository->forget($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->repository->delete($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteMultiple0()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    $actual = $this->repository->deleteMultiple($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteMultiple1()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    $actual = $this->repository->deleteMultiple($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear0()
{
    // TODO: Your mock expectations here

    $actual = $this->repository->clear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTags0()
{
    $names = m::mock('UntypedParameter_names_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!method_exists($this->store, 'tags')) == false (line 418)
    // if (!is_null($this->events)) == false (line 424)

    $actual = $this->repository->tags($names);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTags1()
{
    $names = m::mock('UntypedParameter_names_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!method_exists($this->store, 'tags')) == false (line 418)
    // if (!is_null($this->events)) == true (line 424)

    $actual = $this->repository->tags($names);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function testTags2()
{
    $names = m::mock('UntypedParameter_names_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!method_exists($this->store, 'tags')) == true (line 418)
    // throw new \BadMethodCallException('This cache store does not support tagging.') -> exception (line 419)

    $actual = $this->repository->tags($names);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultCacheTime0()
{
    // TODO: Your mock expectations here

    $actual = $this->repository->getDefaultCacheTime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultCacheTime0()
{
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->repository->setDefaultCacheTime($minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetStore0()
{
    // TODO: Your mock expectations here

    $actual = $this->repository->getStore();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetEventDispatcher0()
{
    $events = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);

    // TODO: Your mock expectations here

    $actual = $this->repository->setEventDispatcher($events);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetExists0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->repository->offsetExists($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->repository->offsetGet($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->repository->offsetSet($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetUnset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->repository->offsetUnset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($method)) == false (line 570)

    $actual = $this->repository->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($method)) == true (line 570)

    $actual = $this->repository->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__clone0()
{
    // TODO: Your mock expectations here

    $actual = $this->repository->__clone();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
