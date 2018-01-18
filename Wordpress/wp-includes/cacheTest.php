<?php

namespace tests;

use Mockery as m;
use WP_Object_Cache;

class WP_Object_CacheTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Object_Cache
*/
protected $wP_Object_Cache;

public function setUp()
{
    parent::setUp();

    $this->wP_Object_Cache = new \WP_Object_Cache();
}

public function test__get0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Object_Cache->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Object_Cache->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Object_Cache->__isset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Object_Cache->__unset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd0()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\wp_suspend_cache_addition()) == false (line 402)
    // if (empty($group)) == false (line 406)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 411)
    // if ($this->_exists($id, $group)) == false (line 415)

    $actual = $this->wP_Object_Cache->add($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd1()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\wp_suspend_cache_addition()) == false (line 402)
    // if (empty($group)) == false (line 406)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 411)
    // if ($this->_exists($id, $group)) == true (line 415)

    $actual = $this->wP_Object_Cache->add($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd2()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\wp_suspend_cache_addition()) == false (line 402)
    // if (empty($group)) == false (line 406)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 411)
    // if ($this->_exists($id, $group)) == false (line 415)

    $actual = $this->wP_Object_Cache->add($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd3()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\wp_suspend_cache_addition()) == false (line 402)
    // if (empty($group)) == false (line 406)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 411)
    // if ($this->_exists($id, $group)) == true (line 415)

    $actual = $this->wP_Object_Cache->add($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd4()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\wp_suspend_cache_addition()) == false (line 402)
    // if (empty($group)) == true (line 406)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 411)
    // if ($this->_exists($id, $group)) == false (line 415)

    $actual = $this->wP_Object_Cache->add($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd5()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\wp_suspend_cache_addition()) == false (line 402)
    // if (empty($group)) == true (line 406)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 411)
    // if ($this->_exists($id, $group)) == true (line 415)

    $actual = $this->wP_Object_Cache->add($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd6()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\wp_suspend_cache_addition()) == false (line 402)
    // if (empty($group)) == true (line 406)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 411)
    // if ($this->_exists($id, $group)) == false (line 415)

    $actual = $this->wP_Object_Cache->add($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd7()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\wp_suspend_cache_addition()) == false (line 402)
    // if (empty($group)) == true (line 406)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 411)
    // if ($this->_exists($id, $group)) == true (line 415)

    $actual = $this->wP_Object_Cache->add($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd8()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\wp_suspend_cache_addition()) == true (line 402)

    $actual = $this->wP_Object_Cache->add($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_global_groups0()
{
    $groups = m::mock('UntypedParameter_groups_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Object_Cache->add_global_groups($groups);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr0()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 459)
    // if ($this->cache[$group][$key] < 0) == false (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr1()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 459)
    // if ($this->cache[$group][$key] < 0) == true (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr2()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 459)
    // if ($this->cache[$group][$key] < 0) == false (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr3()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 459)
    // if ($this->cache[$group][$key] < 0) == true (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr4()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 451)
    // if (!$this->_exists($key, $group)) == true (line 455)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr5()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 459)
    // if ($this->cache[$group][$key] < 0) == false (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr6()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 459)
    // if ($this->cache[$group][$key] < 0) == true (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr7()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 459)
    // if ($this->cache[$group][$key] < 0) == false (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr8()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 459)
    // if ($this->cache[$group][$key] < 0) == true (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr9()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 451)
    // if (!$this->_exists($key, $group)) == true (line 455)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr10()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 459)
    // if ($this->cache[$group][$key] < 0) == false (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr11()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 459)
    // if ($this->cache[$group][$key] < 0) == true (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr12()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 459)
    // if ($this->cache[$group][$key] < 0) == false (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr13()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 459)
    // if ($this->cache[$group][$key] < 0) == true (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr14()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 451)
    // if (!$this->_exists($key, $group)) == true (line 455)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr15()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 459)
    // if ($this->cache[$group][$key] < 0) == false (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr16()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 459)
    // if ($this->cache[$group][$key] < 0) == true (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr17()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 459)
    // if ($this->cache[$group][$key] < 0) == false (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr18()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 451)
    // if (!$this->_exists($key, $group)) == false (line 455)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 459)
    // if ($this->cache[$group][$key] < 0) == true (line 467)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecr19()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 447)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 451)
    // if (!$this->_exists($key, $group)) == true (line 455)

    $actual = $this->wP_Object_Cache->decr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 487)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 491)
    // if (!$this->_exists($key, $group)) == false (line 495)

    $actual = $this->wP_Object_Cache->delete($key, $group, $deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete1()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 487)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 491)
    // if (!$this->_exists($key, $group)) == true (line 495)

    $actual = $this->wP_Object_Cache->delete($key, $group, $deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete2()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 487)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 491)
    // if (!$this->_exists($key, $group)) == false (line 495)

    $actual = $this->wP_Object_Cache->delete($key, $group, $deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete3()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 487)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 491)
    // if (!$this->_exists($key, $group)) == true (line 495)

    $actual = $this->wP_Object_Cache->delete($key, $group, $deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete4()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 487)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 491)
    // if (!$this->_exists($key, $group)) == false (line 495)

    $actual = $this->wP_Object_Cache->delete($key, $group, $deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete5()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 487)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 491)
    // if (!$this->_exists($key, $group)) == true (line 495)

    $actual = $this->wP_Object_Cache->delete($key, $group, $deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete6()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 487)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 491)
    // if (!$this->_exists($key, $group)) == false (line 495)

    $actual = $this->wP_Object_Cache->delete($key, $group, $deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete7()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 487)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 491)
    // if (!$this->_exists($key, $group)) == true (line 495)

    $actual = $this->wP_Object_Cache->delete($key, $group, $deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Object_Cache->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $force = m::mock('UntypedParameter_force_');
    $found = m::mock('UntypedParameter_found_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 536)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 540)
    // if ($this->_exists($key, $group)) == false (line 544)

    $actual = $this->wP_Object_Cache->get($key, $group, $force, $found);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $force = m::mock('UntypedParameter_force_');
    $found = m::mock('UntypedParameter_found_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 536)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 540)
    // if ($this->_exists($key, $group)) == true (line 544)
    // if (\is_object($this->cache[$group][$key])) == false (line 547)

    $actual = $this->wP_Object_Cache->get($key, $group, $force, $found);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet2()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $force = m::mock('UntypedParameter_force_');
    $found = m::mock('UntypedParameter_found_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 536)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 540)
    // if ($this->_exists($key, $group)) == true (line 544)
    // if (\is_object($this->cache[$group][$key])) == true (line 547)

    $actual = $this->wP_Object_Cache->get($key, $group, $force, $found);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet3()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $force = m::mock('UntypedParameter_force_');
    $found = m::mock('UntypedParameter_found_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 536)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 540)
    // if ($this->_exists($key, $group)) == false (line 544)

    $actual = $this->wP_Object_Cache->get($key, $group, $force, $found);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet4()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $force = m::mock('UntypedParameter_force_');
    $found = m::mock('UntypedParameter_found_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 536)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 540)
    // if ($this->_exists($key, $group)) == true (line 544)
    // if (\is_object($this->cache[$group][$key])) == false (line 547)

    $actual = $this->wP_Object_Cache->get($key, $group, $force, $found);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet5()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $force = m::mock('UntypedParameter_force_');
    $found = m::mock('UntypedParameter_found_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 536)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 540)
    // if ($this->_exists($key, $group)) == true (line 544)
    // if (\is_object($this->cache[$group][$key])) == true (line 547)

    $actual = $this->wP_Object_Cache->get($key, $group, $force, $found);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet6()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $force = m::mock('UntypedParameter_force_');
    $found = m::mock('UntypedParameter_found_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 536)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 540)
    // if ($this->_exists($key, $group)) == false (line 544)

    $actual = $this->wP_Object_Cache->get($key, $group, $force, $found);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet7()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $force = m::mock('UntypedParameter_force_');
    $found = m::mock('UntypedParameter_found_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 536)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 540)
    // if ($this->_exists($key, $group)) == true (line 544)
    // if (\is_object($this->cache[$group][$key])) == false (line 547)

    $actual = $this->wP_Object_Cache->get($key, $group, $force, $found);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet8()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $force = m::mock('UntypedParameter_force_');
    $found = m::mock('UntypedParameter_found_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 536)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 540)
    // if ($this->_exists($key, $group)) == true (line 544)
    // if (\is_object($this->cache[$group][$key])) == true (line 547)

    $actual = $this->wP_Object_Cache->get($key, $group, $force, $found);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet9()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $force = m::mock('UntypedParameter_force_');
    $found = m::mock('UntypedParameter_found_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 536)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 540)
    // if ($this->_exists($key, $group)) == false (line 544)

    $actual = $this->wP_Object_Cache->get($key, $group, $force, $found);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet10()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $force = m::mock('UntypedParameter_force_');
    $found = m::mock('UntypedParameter_found_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 536)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 540)
    // if ($this->_exists($key, $group)) == true (line 544)
    // if (\is_object($this->cache[$group][$key])) == false (line 547)

    $actual = $this->wP_Object_Cache->get($key, $group, $force, $found);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet11()
{
    $key = m::mock('UntypedParameter_key_');
    $group = m::mock('UntypedParameter_group_');
    $force = m::mock('UntypedParameter_force_');
    $found = m::mock('UntypedParameter_found_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 536)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 540)
    // if ($this->_exists($key, $group)) == true (line 544)
    // if (\is_object($this->cache[$group][$key])) == true (line 547)

    $actual = $this->wP_Object_Cache->get($key, $group, $force, $found);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr0()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 582)
    // if ($this->cache[$group][$key] < 0) == false (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr1()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 582)
    // if ($this->cache[$group][$key] < 0) == true (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr2()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 582)
    // if ($this->cache[$group][$key] < 0) == false (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr3()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 582)
    // if ($this->cache[$group][$key] < 0) == true (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr4()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 574)
    // if (!$this->_exists($key, $group)) == true (line 578)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr5()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 582)
    // if ($this->cache[$group][$key] < 0) == false (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr6()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 582)
    // if ($this->cache[$group][$key] < 0) == true (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr7()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 582)
    // if ($this->cache[$group][$key] < 0) == false (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr8()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 582)
    // if ($this->cache[$group][$key] < 0) == true (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr9()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 574)
    // if (!$this->_exists($key, $group)) == true (line 578)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr10()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 582)
    // if ($this->cache[$group][$key] < 0) == false (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr11()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 582)
    // if ($this->cache[$group][$key] < 0) == true (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr12()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 582)
    // if ($this->cache[$group][$key] < 0) == false (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr13()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 582)
    // if ($this->cache[$group][$key] < 0) == true (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr14()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 574)
    // if (!$this->_exists($key, $group)) == true (line 578)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr15()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 582)
    // if ($this->cache[$group][$key] < 0) == false (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr16()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == false (line 582)
    // if ($this->cache[$group][$key] < 0) == true (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr17()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 582)
    // if ($this->cache[$group][$key] < 0) == false (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr18()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 574)
    // if (!$this->_exists($key, $group)) == false (line 578)
    // if (!\is_numeric($this->cache[$group][$key])) == true (line 582)
    // if ($this->cache[$group][$key] < 0) == true (line 590)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncr19()
{
    $key = m::mock('UntypedParameter_key_');
    $offset = m::mock('UntypedParameter_offset_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 570)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 574)
    // if (!$this->_exists($key, $group)) == true (line 578)

    $actual = $this->wP_Object_Cache->incr($key, $offset, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplace0()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 611)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 616)
    // if (!$this->_exists($id, $group)) == false (line 620)

    $actual = $this->wP_Object_Cache->replace($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplace1()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 611)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 616)
    // if (!$this->_exists($id, $group)) == true (line 620)

    $actual = $this->wP_Object_Cache->replace($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplace2()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 611)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 616)
    // if (!$this->_exists($id, $group)) == false (line 620)

    $actual = $this->wP_Object_Cache->replace($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplace3()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 611)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 616)
    // if (!$this->_exists($id, $group)) == true (line 620)

    $actual = $this->wP_Object_Cache->replace($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplace4()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 611)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 616)
    // if (!$this->_exists($id, $group)) == false (line 620)

    $actual = $this->wP_Object_Cache->replace($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplace5()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 611)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 616)
    // if (!$this->_exists($id, $group)) == true (line 620)

    $actual = $this->wP_Object_Cache->replace($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplace6()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 611)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 616)
    // if (!$this->_exists($id, $group)) == false (line 620)

    $actual = $this->wP_Object_Cache->replace($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplace7()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 611)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 616)
    // if (!$this->_exists($id, $group)) == true (line 620)

    $actual = $this->wP_Object_Cache->replace($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Object_Cache->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->global_groups[$group])) == false (line 640)

    $actual = $this->wP_Object_Cache->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->global_groups[$group])) == true (line 640)

    $actual = $this->wP_Object_Cache->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet0()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 667)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 671)
    // if (\is_object($data)) == false (line 675)

    $actual = $this->wP_Object_Cache->set($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet1()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 667)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 671)
    // if (\is_object($data)) == true (line 675)

    $actual = $this->wP_Object_Cache->set($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet2()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 667)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 671)
    // if (\is_object($data)) == false (line 675)

    $actual = $this->wP_Object_Cache->set($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet3()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == false (line 667)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 671)
    // if (\is_object($data)) == true (line 675)

    $actual = $this->wP_Object_Cache->set($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet4()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 667)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 671)
    // if (\is_object($data)) == false (line 675)

    $actual = $this->wP_Object_Cache->set($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet5()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 667)
    // if ($this->multisite && !isset($this->global_groups[$group])) == false (line 671)
    // if (\is_object($data)) == true (line 675)

    $actual = $this->wP_Object_Cache->set($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet6()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 667)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 671)
    // if (\is_object($data)) == false (line 675)

    $actual = $this->wP_Object_Cache->set($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet7()
{
    $key = m::mock('UntypedParameter_key_');
    $data = m::mock('UntypedParameter_data_');
    $group = m::mock('UntypedParameter_group_');
    $expire = m::mock('UntypedParameter_expire_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($group)) == true (line 667)
    // if ($this->multisite && !isset($this->global_groups[$group])) == true (line 671)
    // if (\is_object($data)) == true (line 675)

    $actual = $this->wP_Object_Cache->set($key, $data, $group, $expire);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStats0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Object_Cache->stats();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStats1()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Object_Cache->stats();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSwitch_to_blog0()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Object_Cache->switch_to_blog($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Object_Cache->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
