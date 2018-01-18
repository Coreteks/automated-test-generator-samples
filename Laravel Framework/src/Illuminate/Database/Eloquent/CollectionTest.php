<?php

namespace tests\Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\Collection;
use Mockery as m;

class CollectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Eloquent\Collection
*/
protected $collection;

public function setUp()
{
    parent::setUp();

    $this->collection = new \Illuminate\Database\Eloquent\Collection();
}

public function testFind0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == false (line 22)
    // if ($key instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 26)
    // if (is_array($key)) == false (line 30)

    $actual = $this->collection->find($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind1()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == false (line 22)
    // if ($key instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 26)
    // if (is_array($key)) == true (line 30)
    // if ($this->isEmpty()) == false (line 31)

    $actual = $this->collection->find($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind2()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == false (line 22)
    // if ($key instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 26)
    // if (is_array($key)) == true (line 30)
    // if ($this->isEmpty()) == true (line 31)

    $actual = $this->collection->find($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind3()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == false (line 22)
    // if ($key instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 26)
    // if (is_array($key)) == false (line 30)

    $actual = $this->collection->find($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind4()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == false (line 22)
    // if ($key instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 26)
    // if (is_array($key)) == true (line 30)
    // if ($this->isEmpty()) == false (line 31)

    $actual = $this->collection->find($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind5()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == false (line 22)
    // if ($key instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 26)
    // if (is_array($key)) == true (line 30)
    // if ($this->isEmpty()) == true (line 31)

    $actual = $this->collection->find($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind6()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == true (line 22)
    // if ($key instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 26)
    // if (is_array($key)) == false (line 30)

    $actual = $this->collection->find($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind7()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == true (line 22)
    // if ($key instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 26)
    // if (is_array($key)) == true (line 30)
    // if ($this->isEmpty()) == false (line 31)

    $actual = $this->collection->find($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind8()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == true (line 22)
    // if ($key instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 26)
    // if (is_array($key)) == true (line 30)
    // if ($this->isEmpty()) == true (line 31)

    $actual = $this->collection->find($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind9()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == true (line 22)
    // if ($key instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 26)
    // if (is_array($key)) == false (line 30)

    $actual = $this->collection->find($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind10()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == true (line 22)
    // if ($key instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 26)
    // if (is_array($key)) == true (line 30)
    // if ($this->isEmpty()) == false (line 31)

    $actual = $this->collection->find($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind11()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == true (line 22)
    // if ($key instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 26)
    // if (is_array($key)) == true (line 30)
    // if ($this->isEmpty()) == true (line 31)

    $actual = $this->collection->find($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad0()
{
    $relations = m::mock('UntypedParameter_relations_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isNotEmpty()) == false (line 51)

    $actual = $this->collection->load($relations);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $relations = m::mock('UntypedParameter_relations_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isNotEmpty()) == true (line 51)
    // if (is_string($relations)) == false (line 52)

    $actual = $this->collection->load($relations);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    $relations = m::mock('UntypedParameter_relations_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isNotEmpty()) == true (line 51)
    // if (is_string($relations)) == true (line 52)

    $actual = $this->collection->load($relations);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd0()
{
    $item = m::mock('UntypedParameter_item_');

    // TODO: Your mock expectations here

    $actual = $this->collection->add($item);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContains0()
{
    $key = m::mock('UntypedParameter_key_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() > 1 || $this->useAsCallable($key)) == false (line 87)
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == false (line 91)

    $actual = $this->collection->contains($key, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContains1()
{
    $key = m::mock('UntypedParameter_key_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() > 1 || $this->useAsCallable($key)) == false (line 87)
    // if ($key instanceof \Illuminate\Database\Eloquent\Model) == true (line 91)

    $actual = $this->collection->contains($key, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContains2()
{
    $key = m::mock('UntypedParameter_key_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() > 1 || $this->useAsCallable($key)) == true (line 87)

    $actual = $this->collection->contains($key, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testModelKeys0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->modelKeys();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMerge0()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    $actual = $this->collection->merge($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMerge1()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    $actual = $this->collection->merge($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMap0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->map($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFresh0()
{
    $with = m::mock('UntypedParameter_with_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isEmpty()) == false (line 154)

    $actual = $this->collection->fresh($with);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFresh1()
{
    $with = m::mock('UntypedParameter_with_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isEmpty()) == true (line 154)

    $actual = $this->collection->fresh($with);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff0()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    $actual = $this->collection->diff($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff1()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($dictionary[$item->getKey()])) == false (line 185)

    $actual = $this->collection->diff($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff2()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($dictionary[$item->getKey()])) == true (line 185)

    $actual = $this->collection->diff($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIntersect0()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    $actual = $this->collection->intersect($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIntersect1()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($dictionary[$item->getKey()])) == false (line 206)

    $actual = $this->collection->intersect($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIntersect2()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($dictionary[$item->getKey()])) == true (line 206)

    $actual = $this->collection->intersect($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnique0()
{
    $key = m::mock('UntypedParameter_key_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($key)) == false (line 223)

    $actual = $this->collection->unique($key, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnique1()
{
    $key = m::mock('UntypedParameter_key_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($key)) == true (line 223)

    $actual = $this->collection->unique($key, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnly0()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($keys)) == false (line 238)

    $actual = $this->collection->only($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnly1()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($keys)) == true (line 238)

    $actual = $this->collection->only($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExcept0()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    $actual = $this->collection->except($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeHidden0()
{
    $attributes = m::mock('UntypedParameter_attributes_');

    // TODO: Your mock expectations here

    $actual = $this->collection->makeHidden($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeVisible0()
{
    $attributes = m::mock('UntypedParameter_attributes_');

    // TODO: Your mock expectations here

    $actual = $this->collection->makeVisible($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDictionary0()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    $actual = $this->collection->getDictionary($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDictionary1()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    $actual = $this->collection->getDictionary($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck0()
{
    $value = m::mock('UntypedParameter_value_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->collection->pluck($value, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKeys0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->keys();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testZip0()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    $actual = $this->collection->zip($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollapse0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->collapse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlatten0()
{
    $depth = m::mock('UntypedParameter_depth_');

    // TODO: Your mock expectations here

    $actual = $this->collection->flatten($depth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlip0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->flip();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPad0()
{
    $size = m::mock('UntypedParameter_size_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->collection->pad($size, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueueableClass0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isEmpty()) == false (line 393)

    $actual = $this->collection->getQueueableClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueueableClass1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isEmpty()) == true (line 393)

    $actual = $this->collection->getQueueableClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueueableIds0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->getQueueableIds();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueueableConnection0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isEmpty()) == false (line 426)

    $actual = $this->collection->getQueueableConnection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueueableConnection1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isEmpty()) == true (line 426)

    $actual = $this->collection->getQueueableConnection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
