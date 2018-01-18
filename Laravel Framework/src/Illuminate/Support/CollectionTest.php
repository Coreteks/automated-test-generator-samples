<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\Collection;
use Mockery as m;

class CollectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_items = null;
/**
* @var \Illuminate\Support\Collection
*/
protected $collection;

public function setUp()
{
    parent::setUp();

    $this->_items = null;
    $this->collection = new \Illuminate\Support\Collection($this->_items);
}

public function testMake0()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    $actual = $this->collection->make($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrap0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->collection->wrap($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnwrap0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->collection->unwrap($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimes0()
{
    $number = m::mock('UntypedParameter_number_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($number < 1) == false (line 95)
    // if (is_null($callback)) == false (line 99)

    $actual = $this->collection->times($number, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimes1()
{
    $number = m::mock('UntypedParameter_number_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($number < 1) == false (line 95)
    // if (is_null($callback)) == true (line 99)

    $actual = $this->collection->times($number, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimes2()
{
    $number = m::mock('UntypedParameter_number_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($number < 1) == true (line 95)

    $actual = $this->collection->times($number, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->all();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAvg0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($count = $this->count()) == false (line 124)

    $actual = $this->collection->avg($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAvg1()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($count = $this->count()) == true (line 124)

    $actual = $this->collection->avg($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAverage0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->average($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMedian0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($count == 0) == false (line 150)
    // if ($count % 2) == false (line 159)

    $actual = $this->collection->median($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMedian1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($count == 0) == false (line 150)
    // if ($count % 2) == true (line 159)

    $actual = $this->collection->median($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMedian2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($count == 0) == true (line 150)

    $actual = $this->collection->median($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMode0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($count == 0) == false (line 178)

    $actual = $this->collection->mode($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMode1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($count == 0) == true (line 178)

    $actual = $this->collection->mode($key);
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

public function testContains0()
{
    $key = m::mock('UntypedParameter_key_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() == 1) == false (line 219)

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
    // if (func_num_args() == 1) == true (line 219)
    // if ($this->useAsCallable($key)) == false (line 220)

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
    // if (func_num_args() == 1) == true (line 219)
    // if ($this->useAsCallable($key)) == true (line 220)

    $actual = $this->collection->contains($key, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContainsStrict0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() == 2) == false (line 241)
    // if ($this->useAsCallable($key)) == false (line 247)

    $actual = $this->collection->containsStrict($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContainsStrict1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() == 2) == false (line 241)
    // if ($this->useAsCallable($key)) == true (line 247)

    $actual = $this->collection->containsStrict($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContainsStrict2()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() == 2) == true (line 241)

    $actual = $this->collection->containsStrict($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrossJoin0()
{
    $lists = m::mock('UntypedParameter_lists_');

    // TODO: Your mock expectations here

    $actual = $this->collection->crossJoin($lists);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDd0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->collection->dd($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->dump();
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

public function testDiffAssoc0()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    $actual = $this->collection->diffAssoc($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffKeys0()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    $actual = $this->collection->diffKeys($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEach0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->each($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEach1()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($callback($item, $key) === false) == false (line 339)

    $actual = $this->collection->each($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEach2()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($callback($item, $key) === false) == true (line 339)

    $actual = $this->collection->each($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEachSpread0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->eachSpread($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvery0()
{
    $key = m::mock('UntypedParameter_key_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() == 1) == false (line 372)

    $actual = $this->collection->every($key, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvery1()
{
    $key = m::mock('UntypedParameter_key_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() == 1) == true (line 372)

    $actual = $this->collection->every($key, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvery2()
{
    $key = m::mock('UntypedParameter_key_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() == 1) == true (line 372)
    // if (!$callback($v, $k)) == false (line 376)

    $actual = $this->collection->every($key, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvery3()
{
    $key = m::mock('UntypedParameter_key_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() == 1) == true (line 372)
    // if (!$callback($v, $k)) == true (line 376)

    $actual = $this->collection->every($key, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExcept0()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($keys instanceof self) == false (line 395)
    // if (!is_array($keys)) == false (line 397)

    $actual = $this->collection->except($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExcept1()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($keys instanceof self) == false (line 395)
    // if (!is_array($keys)) == true (line 397)

    $actual = $this->collection->except($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExcept2()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($keys instanceof self) == true (line 395)

    $actual = $this->collection->except($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($callback) == false (line 412)

    $actual = $this->collection->filter($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter1()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($callback) == true (line 412)

    $actual = $this->collection->filter($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhen0()
{
    $value = m::mock('UntypedParameter_value_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value) == false (line 429)
    // if ($default) == false (line 431)

    $actual = $this->collection->when($value, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhen1()
{
    $value = m::mock('UntypedParameter_value_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value) == false (line 429)
    // if ($default) == true (line 431)

    $actual = $this->collection->when($value, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhen2()
{
    $value = m::mock('UntypedParameter_value_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value) == true (line 429)

    $actual = $this->collection->when($value, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnless0()
{
    $value = m::mock('UntypedParameter_value_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->collection->unless($value, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere0()
{
    $key = m::mock('UntypedParameter_key_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->collection->where($key, $operator, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereStrict0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->collection->whereStrict($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereIn0()
{
    $key = m::mock('UntypedParameter_key_');
    $values = m::mock('UntypedParameter_values_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    $actual = $this->collection->whereIn($key, $values, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereInStrict0()
{
    $key = m::mock('UntypedParameter_key_');
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    $actual = $this->collection->whereInStrict($key, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereNotIn0()
{
    $key = m::mock('UntypedParameter_key_');
    $values = m::mock('UntypedParameter_values_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    $actual = $this->collection->whereNotIn($key, $values, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhereNotInStrict0()
{
    $key = m::mock('UntypedParameter_key_');
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    $actual = $this->collection->whereNotInStrict($key, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst0()
{
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->collection->first($callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstWhere0()
{
    $key = m::mock('UntypedParameter_key_');
    $operator = m::mock('UntypedParameter_operator_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->collection->firstWhere($key, $operator, $value);
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

public function testForget0()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    $actual = $this->collection->forget($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget1()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    $actual = $this->collection->forget($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->offsetExists($key)) == false (line 647)

    $actual = $this->collection->get($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->offsetExists($key)) == true (line 647)

    $actual = $this->collection->get($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy0()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy1()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy2()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!is_array($groupKeys)) == false (line 676)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy3()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!is_array($groupKeys)) == false (line 676)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy4()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!is_array($groupKeys)) == false (line 676)
    // if (!array_key_exists($groupKey, $results)) == false (line 683)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy5()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!is_array($groupKeys)) == false (line 676)
    // if (!array_key_exists($groupKey, $results)) == false (line 683)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy6()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!is_array($groupKeys)) == false (line 676)
    // if (!array_key_exists($groupKey, $results)) == true (line 683)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy7()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!is_array($groupKeys)) == false (line 676)
    // if (!array_key_exists($groupKey, $results)) == true (line 683)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy8()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!is_array($groupKeys)) == true (line 676)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy9()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!is_array($groupKeys)) == true (line 676)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy10()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!is_array($groupKeys)) == true (line 676)
    // if (!array_key_exists($groupKey, $results)) == false (line 683)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy11()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!is_array($groupKeys)) == true (line 676)
    // if (!array_key_exists($groupKey, $results)) == false (line 683)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy12()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!is_array($groupKeys)) == true (line 676)
    // if (!array_key_exists($groupKey, $results)) == true (line 683)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy13()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == false (line 663)
    // if (!is_array($groupKeys)) == true (line 676)
    // if (!array_key_exists($groupKey, $results)) == true (line 683)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy14()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy15()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy16()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!is_array($groupKeys)) == false (line 676)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy17()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!is_array($groupKeys)) == false (line 676)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy18()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!is_array($groupKeys)) == false (line 676)
    // if (!array_key_exists($groupKey, $results)) == false (line 683)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy19()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!is_array($groupKeys)) == false (line 676)
    // if (!array_key_exists($groupKey, $results)) == false (line 683)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy20()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!is_array($groupKeys)) == false (line 676)
    // if (!array_key_exists($groupKey, $results)) == true (line 683)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy21()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!is_array($groupKeys)) == false (line 676)
    // if (!array_key_exists($groupKey, $results)) == true (line 683)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy22()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!is_array($groupKeys)) == true (line 676)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy23()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!is_array($groupKeys)) == true (line 676)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy24()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!is_array($groupKeys)) == true (line 676)
    // if (!array_key_exists($groupKey, $results)) == false (line 683)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy25()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!is_array($groupKeys)) == true (line 676)
    // if (!array_key_exists($groupKey, $results)) == false (line 683)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy26()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!is_array($groupKeys)) == true (line 676)
    // if (!array_key_exists($groupKey, $results)) == true (line 683)
    // if (!empty($nextGroups)) == false (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroupBy27()
{
    $groupBy = m::mock('UntypedParameter_groupBy_');
    $preserveKeys = m::mock('UntypedParameter_preserveKeys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($groupBy)) == true (line 663)
    // if (!is_array($groupKeys)) == true (line 676)
    // if (!array_key_exists($groupKey, $results)) == true (line 683)
    // if (!empty($nextGroups)) == true (line 693)

    $actual = $this->collection->groupBy($groupBy, $preserveKeys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKeyBy0()
{
    $keyBy = m::mock('UntypedParameter_keyBy_');

    // TODO: Your mock expectations here

    $actual = $this->collection->keyBy($keyBy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKeyBy1()
{
    $keyBy = m::mock('UntypedParameter_keyBy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($resolvedKey)) == false (line 715)

    $actual = $this->collection->keyBy($keyBy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKeyBy2()
{
    $keyBy = m::mock('UntypedParameter_keyBy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($resolvedKey)) == true (line 715)

    $actual = $this->collection->keyBy($keyBy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->collection->has($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->offsetExists($value)) == false (line 736)

    $actual = $this->collection->has($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->offsetExists($value)) == true (line 736)

    $actual = $this->collection->has($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImplode0()
{
    $value = m::mock('UntypedParameter_value_');
    $glue = m::mock('UntypedParameter_glue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($first) || is_object($first)) == false (line 755)

    $actual = $this->collection->implode($value, $glue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImplode1()
{
    $value = m::mock('UntypedParameter_value_');
    $glue = m::mock('UntypedParameter_glue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($first) || is_object($first)) == true (line 755)

    $actual = $this->collection->implode($value, $glue);
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

public function testIntersectByKeys0()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    $actual = $this->collection->intersectByKeys($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsEmpty0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->isEmpty();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsNotEmpty0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->isNotEmpty();
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

public function testLast0()
{
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->collection->last($callback, $default);
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

public function testMap0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->map($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMapSpread0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->mapSpread($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMapToDictionary0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->mapToDictionary($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMapToGroups0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->mapToGroups($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMapWithKeys0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->mapWithKeys($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMapWithKeys1()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->mapWithKeys($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMapWithKeys2()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->mapWithKeys($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlatMap0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->flatMap($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMapInto0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    $actual = $this->collection->mapInto($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMax0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->max($callback);
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

public function testCombine0()
{
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    $actual = $this->collection->combine($values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnion0()
{
    $items = m::mock('UntypedParameter_items_');

    // TODO: Your mock expectations here

    $actual = $this->collection->union($items);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMin0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->min($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNth0()
{
    $step = m::mock('UntypedParameter_step_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->collection->nth($step, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNth1()
{
    $step = m::mock('UntypedParameter_step_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($position % $step === $offset) == false (line 1047)

    $actual = $this->collection->nth($step, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNth2()
{
    $step = m::mock('UntypedParameter_step_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($position % $step === $offset) == true (line 1047)

    $actual = $this->collection->nth($step, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnly0()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($keys)) == false (line 1065)
    // if ($keys instanceof self) == false (line 1069)

    $actual = $this->collection->only($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnly1()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($keys)) == false (line 1065)
    // if ($keys instanceof self) == true (line 1069)

    $actual = $this->collection->only($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnly2()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($keys)) == true (line 1065)

    $actual = $this->collection->only($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForPage0()
{
    $page = m::mock('UntypedParameter_page_');
    $perPage = m::mock('UntypedParameter_perPage_');

    // TODO: Your mock expectations here

    $actual = $this->collection->forPage($page, $perPage);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPartition0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->partition($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPartition1()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->partition($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPipe0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->pipe($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPop0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->pop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepend0()
{
    $value = m::mock('UntypedParameter_value_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->collection->prepend($value, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->collection->push($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConcat0()
{
    $source = m::mock('UntypedParameter_source_');

    // TODO: Your mock expectations here

    $actual = $this->collection->concat($source);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConcat1()
{
    $source = m::mock('UntypedParameter_source_');

    // TODO: Your mock expectations here

    $actual = $this->collection->concat($source);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPull0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->collection->pull($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->collection->put($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandom0()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($number)) == false (line 1212)

    $actual = $this->collection->random($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandom1()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($number)) == true (line 1212)

    $actual = $this->collection->random($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReduce0()
{
    $callback = m::mock('UntypedParameter_callback_');
    $initial = m::mock('UntypedParameter_initial_');

    // TODO: Your mock expectations here

    $actual = $this->collection->reduce($callback, $initial);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReject0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->useAsCallable($callback)) == false (line 1239)

    $actual = $this->collection->reject($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReject1()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->useAsCallable($callback)) == true (line 1239)

    $actual = $this->collection->reject($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReverse0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->reverse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSearch0()
{
    $value = m::mock('UntypedParameter_value_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->useAsCallable($value)) == false (line 1269)

    $actual = $this->collection->search($value, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSearch1()
{
    $value = m::mock('UntypedParameter_value_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->useAsCallable($value)) == false (line 1269)
    // if (call_user_func($value, $item, $key)) == false (line 1274)

    $actual = $this->collection->search($value, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSearch2()
{
    $value = m::mock('UntypedParameter_value_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->useAsCallable($value)) == false (line 1269)
    // if (call_user_func($value, $item, $key)) == true (line 1274)

    $actual = $this->collection->search($value, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSearch3()
{
    $value = m::mock('UntypedParameter_value_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->useAsCallable($value)) == true (line 1269)

    $actual = $this->collection->search($value, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShift0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->shift();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShuffle0()
{
    $seed = m::mock('UntypedParameter_seed_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($seed)) == false (line 1302)

    $actual = $this->collection->shuffle($seed);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShuffle1()
{
    $seed = m::mock('UntypedParameter_seed_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($seed)) == true (line 1302)

    $actual = $this->collection->shuffle($seed);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlice0()
{
    $offset = m::mock('UntypedParameter_offset_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    $actual = $this->collection->slice($offset, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSplit0()
{
    $numberOfGroups = m::mock('UntypedParameter_numberOfGroups_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isEmpty()) == false (line 1335)

    $actual = $this->collection->split($numberOfGroups);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSplit1()
{
    $numberOfGroups = m::mock('UntypedParameter_numberOfGroups_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isEmpty()) == true (line 1335)

    $actual = $this->collection->split($numberOfGroups);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChunk0()
{
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($size <= 0) == false (line 1352)

    $actual = $this->collection->chunk($size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChunk1()
{
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($size <= 0) == false (line 1352)

    $actual = $this->collection->chunk($size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChunk2()
{
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($size <= 0) == true (line 1352)

    $actual = $this->collection->chunk($size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->sort($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSortBy0()
{
    $callback = m::mock('UntypedParameter_callback_');
    $options = m::mock('UntypedParameter_options_');
    $descending = m::mock('UntypedParameter_descending_');

    // TODO: Your mock expectations here

    $actual = $this->collection->sortBy($callback, $options, $descending);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSortBy1()
{
    $callback = m::mock('UntypedParameter_callback_');
    $options = m::mock('UntypedParameter_options_');
    $descending = m::mock('UntypedParameter_descending_');

    // TODO: Your mock expectations here

    $actual = $this->collection->sortBy($callback, $options, $descending);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSortBy2()
{
    $callback = m::mock('UntypedParameter_callback_');
    $options = m::mock('UntypedParameter_options_');
    $descending = m::mock('UntypedParameter_descending_');

    // TODO: Your mock expectations here

    $actual = $this->collection->sortBy($callback, $options, $descending);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSortBy3()
{
    $callback = m::mock('UntypedParameter_callback_');
    $options = m::mock('UntypedParameter_options_');
    $descending = m::mock('UntypedParameter_descending_');

    // TODO: Your mock expectations here

    $actual = $this->collection->sortBy($callback, $options, $descending);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSortByDesc0()
{
    $callback = m::mock('UntypedParameter_callback_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->collection->sortByDesc($callback, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSplice0()
{
    $offset = m::mock('UntypedParameter_offset_');
    $length = m::mock('UntypedParameter_length_');
    $replacement = m::mock('UntypedParameter_replacement_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() == 1) == false (line 1438)

    $actual = $this->collection->splice($offset, $length, $replacement);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSplice1()
{
    $offset = m::mock('UntypedParameter_offset_');
    $length = m::mock('UntypedParameter_length_');
    $replacement = m::mock('UntypedParameter_replacement_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (func_num_args() == 1) == true (line 1438)

    $actual = $this->collection->splice($offset, $length, $replacement);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSum0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($callback)) == false (line 1453)

    $actual = $this->collection->sum($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSum1()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($callback)) == true (line 1453)

    $actual = $this->collection->sum($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTake0()
{
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($limit < 0) == false (line 1472)

    $actual = $this->collection->take($limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTake1()
{
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($limit < 0) == true (line 1472)

    $actual = $this->collection->take($limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTap0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->tap($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->collection->transform($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnique0()
{
    $key = m::mock('UntypedParameter_key_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == false (line 1514)

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
    // if (is_null($key)) == true (line 1514)

    $actual = $this->collection->unique($key, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUniqueStrict0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->collection->uniqueStrict($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValues0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->values();
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

public function testPad0()
{
    $size = m::mock('UntypedParameter_size_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->collection->pad($size, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToArray0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->toArray();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJsonSerialize0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->jsonSerialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToJson0()
{
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->collection->toJson($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIterator0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->getIterator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCachingIterator0()
{
    $flags = m::mock('UntypedParameter_flags_');

    // TODO: Your mock expectations here

    $actual = $this->collection->getCachingIterator($flags);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToBase0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->toBase();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetExists0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->collection->offsetExists($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->collection->offsetGet($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == false (line 1718)

    $actual = $this->collection->offsetSet($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == true (line 1718)

    $actual = $this->collection->offsetSet($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetUnset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->collection->offsetUnset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->collection->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProxy0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    $actual = $this->collection->proxy($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array($key, static::$proxies)) == false (line 1792)

    $actual = $this->collection->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__get1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array($key, static::$proxies)) == true (line 1792)
    // throw new \Exception("Property [{$key}] does not exist on this collection instance.") -> exception (line 1793)

    $actual = $this->collection->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
