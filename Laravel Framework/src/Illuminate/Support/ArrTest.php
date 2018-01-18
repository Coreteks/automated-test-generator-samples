<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\Arr;
use Mockery as m;

class ArrTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Arr
*/
protected $arr;

public function setUp()
{
    parent::setUp();

    $this->arr = new \Illuminate\Support\Arr();
}

public function testAccessible0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->arr->accessible($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd0()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null(static::get($array, $key))) == false (line 34)

    $actual = $this->arr->add($array, $key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd1()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null(static::get($array, $key))) == true (line 34)

    $actual = $this->arr->add($array, $key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollapse0()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    $actual = $this->arr->collapse($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollapse1()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Support\Collection) == false (line 52)
    // if (!is_array($values)) == false (line 54)

    $actual = $this->arr->collapse($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollapse2()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Support\Collection) == false (line 52)
    // if (!is_array($values)) == true (line 54)

    $actual = $this->arr->collapse($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollapse3()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($values instanceof \Illuminate\Support\Collection) == true (line 52)

    $actual = $this->arr->collapse($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrossJoin0()
{
    $arrays = m::mock('UntypedParameter_arrays_');

    // TODO: Your mock expectations here

    $actual = $this->arr->crossJoin($arrays);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrossJoin1()
{
    $arrays = m::mock('UntypedParameter_arrays_');

    // TODO: Your mock expectations here

    $actual = $this->arr->crossJoin($arrays);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrossJoin2()
{
    $arrays = m::mock('UntypedParameter_arrays_');

    // TODO: Your mock expectations here

    $actual = $this->arr->crossJoin($arrays);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrossJoin3()
{
    $arrays = m::mock('UntypedParameter_arrays_');

    // TODO: Your mock expectations here

    $actual = $this->arr->crossJoin($arrays);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDivide0()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    $actual = $this->arr->divide($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDot0()
{
    $array = m::mock('UntypedParameter_array_');
    $prepend = m::mock('UntypedParameter_prepend_');

    // TODO: Your mock expectations here

    $actual = $this->arr->dot($array, $prepend);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDot1()
{
    $array = m::mock('UntypedParameter_array_');
    $prepend = m::mock('UntypedParameter_prepend_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($value) && !empty($value)) == false (line 114)

    $actual = $this->arr->dot($array, $prepend);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDot2()
{
    $array = m::mock('UntypedParameter_array_');
    $prepend = m::mock('UntypedParameter_prepend_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($value) && !empty($value)) == true (line 114)

    $actual = $this->arr->dot($array, $prepend);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExcept0()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    $actual = $this->arr->except($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists0()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \ArrayAccess) == false (line 147)

    $actual = $this->arr->exists($array, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists1()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \ArrayAccess) == true (line 147)

    $actual = $this->arr->exists($array, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst0()
{
    $array = m::mock('UntypedParameter_array_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($callback)) == false (line 164)

    $actual = $this->arr->first($array, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst1()
{
    $array = m::mock('UntypedParameter_array_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($callback)) == false (line 164)
    // if (call_user_func($callback, $value, $key)) == false (line 175)

    $actual = $this->arr->first($array, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst2()
{
    $array = m::mock('UntypedParameter_array_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($callback)) == false (line 164)
    // if (call_user_func($callback, $value, $key)) == true (line 175)

    $actual = $this->arr->first($array, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst3()
{
    $array = m::mock('UntypedParameter_array_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($callback)) == true (line 164)
    // if (empty($array)) == false (line 165)

    $actual = $this->arr->first($array, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst4()
{
    $array = m::mock('UntypedParameter_array_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($callback)) == true (line 164)
    // if (empty($array)) == false (line 165)
    // if (call_user_func($callback, $value, $key)) == false (line 175)

    $actual = $this->arr->first($array, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst5()
{
    $array = m::mock('UntypedParameter_array_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($callback)) == true (line 164)
    // if (empty($array)) == false (line 165)
    // if (call_user_func($callback, $value, $key)) == true (line 175)

    $actual = $this->arr->first($array, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst6()
{
    $array = m::mock('UntypedParameter_array_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($callback)) == true (line 164)
    // if (empty($array)) == false (line 165)

    $actual = $this->arr->first($array, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst7()
{
    $array = m::mock('UntypedParameter_array_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($callback)) == true (line 164)
    // if (empty($array)) == true (line 165)

    $actual = $this->arr->first($array, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLast0()
{
    $array = m::mock('UntypedParameter_array_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($callback)) == false (line 193)

    $actual = $this->arr->last($array, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLast1()
{
    $array = m::mock('UntypedParameter_array_');
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($callback)) == true (line 193)

    $actual = $this->arr->last($array, $callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlatten0()
{
    $array = m::mock('UntypedParameter_array_');
    $depth = m::mock('UntypedParameter_depth_');

    // TODO: Your mock expectations here

    $actual = $this->arr->flatten($array, $depth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlatten1()
{
    $array = m::mock('UntypedParameter_array_');
    $depth = m::mock('UntypedParameter_depth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($item)) == false (line 214)
    // if ($depth === 1) == false (line 216)

    $actual = $this->arr->flatten($array, $depth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlatten2()
{
    $array = m::mock('UntypedParameter_array_');
    $depth = m::mock('UntypedParameter_depth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($item)) == false (line 214)
    // if ($depth === 1) == true (line 216)

    $actual = $this->arr->flatten($array, $depth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlatten3()
{
    $array = m::mock('UntypedParameter_array_');
    $depth = m::mock('UntypedParameter_depth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($item)) == true (line 214)

    $actual = $this->arr->flatten($array, $depth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget0()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($keys) === 0) == false (line 239)

    $actual = $this->arr->forget($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget1()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($keys) === 0) == false (line 239)
    // if (static::exists($array, $key)) == false (line 245)
    // while (count($parts) > 1) == false (line 256)

    $actual = $this->arr->forget($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget2()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($keys) === 0) == false (line 239)
    // if (static::exists($array, $key)) == false (line 245)
    // while (count($parts) > 1) == true (line 256)
    // if (isset($array[$part]) && is_array($array[$part])) == false (line 259)

    $actual = $this->arr->forget($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget3()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($keys) === 0) == false (line 239)
    // if (static::exists($array, $key)) == false (line 245)
    // while (count($parts) > 1) == true (line 256)
    // if (isset($array[$part]) && is_array($array[$part])) == true (line 259)
    // while (count($parts) > 1) == false (line 256)

    $actual = $this->arr->forget($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget4()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($keys) === 0) == false (line 239)
    // if (static::exists($array, $key)) == true (line 245)

    $actual = $this->arr->forget($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget5()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($keys) === 0) == true (line 239)

    $actual = $this->arr->forget($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!static::accessible($array)) == false (line 280)
    // if (is_null($key)) == false (line 284)
    // if (static::exists($array, $key)) == false (line 288)
    // if (strpos($key, '.') === false) == false (line 292)

    $actual = $this->arr->get($array, $key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!static::accessible($array)) == false (line 280)
    // if (is_null($key)) == false (line 284)
    // if (static::exists($array, $key)) == false (line 288)
    // if (strpos($key, '.') === false) == false (line 292)
    // if (static::accessible($array) && static::exists($array, $segment)) == false (line 297)

    $actual = $this->arr->get($array, $key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet2()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!static::accessible($array)) == false (line 280)
    // if (is_null($key)) == false (line 284)
    // if (static::exists($array, $key)) == false (line 288)
    // if (strpos($key, '.') === false) == false (line 292)
    // if (static::accessible($array) && static::exists($array, $segment)) == true (line 297)

    $actual = $this->arr->get($array, $key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet3()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!static::accessible($array)) == false (line 280)
    // if (is_null($key)) == false (line 284)
    // if (static::exists($array, $key)) == false (line 288)
    // if (strpos($key, '.') === false) == true (line 292)

    $actual = $this->arr->get($array, $key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet4()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!static::accessible($array)) == false (line 280)
    // if (is_null($key)) == false (line 284)
    // if (static::exists($array, $key)) == true (line 288)

    $actual = $this->arr->get($array, $key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet5()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!static::accessible($array)) == false (line 280)
    // if (is_null($key)) == true (line 284)

    $actual = $this->arr->get($array, $key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet6()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!static::accessible($array)) == true (line 280)

    $actual = $this->arr->get($array, $key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas0()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($keys)) == false (line 316)
    // if (!$array) == false (line 322)
    // if ($keys === []) == false (line 326)

    $actual = $this->arr->has($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas1()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($keys)) == false (line 316)
    // if (!$array) == false (line 322)
    // if ($keys === []) == false (line 326)
    // if (static::exists($array, $key)) == false (line 333)

    $actual = $this->arr->has($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas2()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($keys)) == false (line 316)
    // if (!$array) == false (line 322)
    // if ($keys === []) == false (line 326)
    // if (static::exists($array, $key)) == false (line 333)
    // if (static::accessible($subKeyArray) && static::exists($subKeyArray, $segment)) == false (line 338)

    $actual = $this->arr->has($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas3()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($keys)) == false (line 316)
    // if (!$array) == false (line 322)
    // if ($keys === []) == false (line 326)
    // if (static::exists($array, $key)) == false (line 333)
    // if (static::accessible($subKeyArray) && static::exists($subKeyArray, $segment)) == true (line 338)

    $actual = $this->arr->has($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas4()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($keys)) == false (line 316)
    // if (!$array) == false (line 322)
    // if ($keys === []) == false (line 326)
    // if (static::exists($array, $key)) == true (line 333)

    $actual = $this->arr->has($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas5()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($keys)) == false (line 316)
    // if (!$array) == false (line 322)
    // if ($keys === []) == true (line 326)

    $actual = $this->arr->has($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas6()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($keys)) == false (line 316)
    // if (!$array) == true (line 322)

    $actual = $this->arr->has($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas7()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($keys)) == true (line 316)

    $actual = $this->arr->has($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsAssoc0()
{
    $array = [];

    // TODO: Your mock expectations here

    $actual = $this->arr->isAssoc($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnly0()
{
    $array = m::mock('UntypedParameter_array_');
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    $actual = $this->arr->only($array, $keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck0()
{
    $array = m::mock('UntypedParameter_array_');
    $value = m::mock('UntypedParameter_value_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->arr->pluck($array, $value, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck1()
{
    $array = m::mock('UntypedParameter_array_');
    $value = m::mock('UntypedParameter_value_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == false (line 396)
    // if (is_object($itemKey) && method_exists($itemKey, '__toString')) == false (line 401)

    $actual = $this->arr->pluck($array, $value, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck2()
{
    $array = m::mock('UntypedParameter_array_');
    $value = m::mock('UntypedParameter_value_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == false (line 396)
    // if (is_object($itemKey) && method_exists($itemKey, '__toString')) == true (line 401)

    $actual = $this->arr->pluck($array, $value, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck3()
{
    $array = m::mock('UntypedParameter_array_');
    $value = m::mock('UntypedParameter_value_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == true (line 396)

    $actual = $this->arr->pluck($array, $value, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepend0()
{
    $array = m::mock('UntypedParameter_array_');
    $value = m::mock('UntypedParameter_value_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == false (line 438)

    $actual = $this->arr->prepend($array, $value, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepend1()
{
    $array = m::mock('UntypedParameter_array_');
    $value = m::mock('UntypedParameter_value_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == true (line 438)

    $actual = $this->arr->prepend($array, $value, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPull0()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->arr->pull($array, $key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandom0()
{
    $array = m::mock('UntypedParameter_array_');
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($requested > $count) == false (line 479)
    // if (is_null($number)) == false (line 485)
    // if ((int) $number === 0) == false (line 489)

    $actual = $this->arr->random($array, $number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandom1()
{
    $array = m::mock('UntypedParameter_array_');
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($requested > $count) == false (line 479)
    // if (is_null($number)) == false (line 485)
    // if ((int) $number === 0) == false (line 489)

    $actual = $this->arr->random($array, $number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandom2()
{
    $array = m::mock('UntypedParameter_array_');
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($requested > $count) == false (line 479)
    // if (is_null($number)) == false (line 485)
    // if ((int) $number === 0) == true (line 489)

    $actual = $this->arr->random($array, $number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandom3()
{
    $array = m::mock('UntypedParameter_array_');
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($requested > $count) == false (line 479)
    // if (is_null($number)) == true (line 485)

    $actual = $this->arr->random($array, $number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testRandom4()
{
    $array = m::mock('UntypedParameter_array_');
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($requested > $count) == true (line 479)
    // throw new \InvalidArgumentException("You requested {$requested} items, but there are only {$count} items available.") -> exception (line 480)

    $actual = $this->arr->random($array, $number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet0()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == false (line 516)
    // while (count($keys) > 1) == false (line 522)

    $actual = $this->arr->set($array, $key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet1()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == false (line 516)
    // while (count($keys) > 1) == true (line 522)
    // if (!isset($array[$key]) || !is_array($array[$key])) == false (line 528)
    // while (count($keys) > 1) == false (line 522)

    $actual = $this->arr->set($array, $key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet2()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == false (line 516)
    // while (count($keys) > 1) == true (line 522)
    // if (!isset($array[$key]) || !is_array($array[$key])) == true (line 528)
    // while (count($keys) > 1) == false (line 522)

    $actual = $this->arr->set($array, $key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet3()
{
    $array = m::mock('UntypedParameter_array_');
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == true (line 516)

    $actual = $this->arr->set($array, $key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShuffle0()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    $actual = $this->arr->shuffle($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort0()
{
    $array = m::mock('UntypedParameter_array_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->arr->sort($array, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSortRecursive0()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::isAssoc($array)) == false (line 579)

    $actual = $this->arr->sortRecursive($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSortRecursive1()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::isAssoc($array)) == true (line 579)

    $actual = $this->arr->sortRecursive($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSortRecursive2()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($value)) == false (line 574)
    // if (static::isAssoc($array)) == false (line 579)

    $actual = $this->arr->sortRecursive($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSortRecursive3()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($value)) == false (line 574)
    // if (static::isAssoc($array)) == true (line 579)

    $actual = $this->arr->sortRecursive($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSortRecursive4()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($value)) == true (line 574)
    // if (static::isAssoc($array)) == false (line 579)

    $actual = $this->arr->sortRecursive($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSortRecursive5()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($value)) == true (line 574)
    // if (static::isAssoc($array)) == true (line 579)

    $actual = $this->arr->sortRecursive($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere0()
{
    $array = m::mock('UntypedParameter_array_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->arr->where($array, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrap0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->arr->wrap($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
