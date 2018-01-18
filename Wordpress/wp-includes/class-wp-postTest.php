<?php

namespace tests;

use Mockery as m;
use WP_Post;

class WP_PostTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_post = null;
/**
* @var \WP_Post
*/
protected $wP_Post;

public function setUp()
{
    parent::setUp();

    $this->_post = null;
    $this->wP_Post = new \WP_Post($this->_post);
}

public function testGet_instance0()
{
    $post_id = m::mock('UntypedParameter_post_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$post_id) == false (line 236)
    // if (!$_post) == false (line 242)
    // if (empty($_post->filter)) == false (line 251)

    $actual = $this->wP_Post->get_instance($post_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance1()
{
    $post_id = m::mock('UntypedParameter_post_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$post_id) == false (line 236)
    // if (!$_post) == false (line 242)
    // if (empty($_post->filter)) == true (line 251)

    $actual = $this->wP_Post->get_instance($post_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance2()
{
    $post_id = m::mock('UntypedParameter_post_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$post_id) == false (line 236)
    // if (!$_post) == true (line 242)
    // if (!$_post) == false (line 245)

    $actual = $this->wP_Post->get_instance($post_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance3()
{
    $post_id = m::mock('UntypedParameter_post_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$post_id) == false (line 236)
    // if (!$_post) == true (line 242)
    // if (!$_post) == true (line 245)

    $actual = $this->wP_Post->get_instance($post_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance4()
{
    $post_id = m::mock('UntypedParameter_post_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$post_id) == true (line 236)

    $actual = $this->wP_Post->get_instance($post_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ancestors' == $key) == false (line 280)
    // if ('page_template' == $key) == false (line 284)
    // if ('post_category' == $key) == false (line 288)
    // if ('tags_input' == $key) == false (line 292)

    $actual = $this->wP_Post->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ancestors' == $key) == false (line 280)
    // if ('page_template' == $key) == false (line 284)
    // if ('post_category' == $key) == false (line 288)
    // if ('tags_input' == $key) == true (line 292)

    $actual = $this->wP_Post->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ancestors' == $key) == false (line 280)
    // if ('page_template' == $key) == false (line 284)
    // if ('post_category' == $key) == true (line 288)

    $actual = $this->wP_Post->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ancestors' == $key) == false (line 280)
    // if ('page_template' == $key) == true (line 284)

    $actual = $this->wP_Post->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset4()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ancestors' == $key) == true (line 280)

    $actual = $this->wP_Post->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('page_template' == $key && $this->__isset($key)) == false (line 308)
    // if ('post_category' == $key) == false (line 312)
    // if ('tags_input' == $key) == false (line 324)
    // if ('ancestors' == $key) == false (line 337)
    // if ($this->filter) == false (line 343)

    $actual = $this->wP_Post->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('page_template' == $key && $this->__isset($key)) == false (line 308)
    // if ('post_category' == $key) == false (line 312)
    // if ('tags_input' == $key) == false (line 324)
    // if ('ancestors' == $key) == false (line 337)
    // if ($this->filter) == true (line 343)

    $actual = $this->wP_Post->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('page_template' == $key && $this->__isset($key)) == false (line 308)
    // if ('post_category' == $key) == false (line 312)
    // if ('tags_input' == $key) == false (line 324)
    // if ('ancestors' == $key) == true (line 337)
    // if ($this->filter) == false (line 343)

    $actual = $this->wP_Post->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('page_template' == $key && $this->__isset($key)) == false (line 308)
    // if ('post_category' == $key) == false (line 312)
    // if ('tags_input' == $key) == false (line 324)
    // if ('ancestors' == $key) == true (line 337)
    // if ($this->filter) == true (line 343)

    $actual = $this->wP_Post->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get4()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('page_template' == $key && $this->__isset($key)) == false (line 308)
    // if ('post_category' == $key) == false (line 312)
    // if ('tags_input' == $key) == true (line 324)
    // if (\is_object_in_taxonomy($this->post_type, 'post_tag')) == false (line 325)
    // if (empty($terms)) == false (line 329)

    $actual = $this->wP_Post->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get5()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('page_template' == $key && $this->__isset($key)) == false (line 308)
    // if ('post_category' == $key) == false (line 312)
    // if ('tags_input' == $key) == true (line 324)
    // if (\is_object_in_taxonomy($this->post_type, 'post_tag')) == false (line 325)
    // if (empty($terms)) == true (line 329)

    $actual = $this->wP_Post->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get6()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('page_template' == $key && $this->__isset($key)) == false (line 308)
    // if ('post_category' == $key) == false (line 312)
    // if ('tags_input' == $key) == true (line 324)
    // if (\is_object_in_taxonomy($this->post_type, 'post_tag')) == true (line 325)
    // if (empty($terms)) == false (line 329)

    $actual = $this->wP_Post->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get7()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('page_template' == $key && $this->__isset($key)) == false (line 308)
    // if ('post_category' == $key) == false (line 312)
    // if ('tags_input' == $key) == true (line 324)
    // if (\is_object_in_taxonomy($this->post_type, 'post_tag')) == true (line 325)
    // if (empty($terms)) == true (line 329)

    $actual = $this->wP_Post->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get8()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('page_template' == $key && $this->__isset($key)) == false (line 308)
    // if ('post_category' == $key) == true (line 312)
    // if (\is_object_in_taxonomy($this->post_type, 'category')) == false (line 313)
    // if (empty($terms)) == false (line 317)

    $actual = $this->wP_Post->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get9()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('page_template' == $key && $this->__isset($key)) == false (line 308)
    // if ('post_category' == $key) == true (line 312)
    // if (\is_object_in_taxonomy($this->post_type, 'category')) == false (line 313)
    // if (empty($terms)) == true (line 317)

    $actual = $this->wP_Post->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get10()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('page_template' == $key && $this->__isset($key)) == false (line 308)
    // if ('post_category' == $key) == true (line 312)
    // if (\is_object_in_taxonomy($this->post_type, 'category')) == true (line 313)
    // if (empty($terms)) == false (line 317)

    $actual = $this->wP_Post->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get11()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('page_template' == $key && $this->__isset($key)) == false (line 308)
    // if ('post_category' == $key) == true (line 312)
    // if (\is_object_in_taxonomy($this->post_type, 'category')) == true (line 313)
    // if (empty($terms)) == true (line 317)

    $actual = $this->wP_Post->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get12()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('page_template' == $key && $this->__isset($key)) == true (line 308)

    $actual = $this->wP_Post->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter0()
{
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->filter == $filter) == false (line 359)
    // if ($filter == 'raw') == false (line 363)

    $actual = $this->wP_Post->filter($filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter1()
{
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->filter == $filter) == false (line 359)
    // if ($filter == 'raw') == true (line 363)

    $actual = $this->wP_Post->filter($filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter2()
{
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->filter == $filter) == true (line 359)

    $actual = $this->wP_Post->filter($filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_array0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Post->to_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_array1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->__isset($key)) == false (line 381)

    $actual = $this->wP_Post->to_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_array2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->__isset($key)) == true (line 381)

    $actual = $this->wP_Post->to_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
