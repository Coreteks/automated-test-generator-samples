<?php

namespace tests;

use Mockery as m;
use WP_Comment;

class WP_CommentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_comment = null;
/**
* @var \WP_Comment
*/
protected $wP_Comment;

public function setUp()
{
    parent::setUp();

    $this->_comment = null;
    $this->wP_Comment = new \WP_Comment($this->_comment);
}

public function testGet_instance0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$comment_id) == false (line 176)
    // if (!$_comment) == false (line 182)

    $actual = $this->wP_Comment->get_instance($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance1()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$comment_id) == false (line 176)
    // if (!$_comment) == true (line 182)
    // if (!$_comment) == false (line 185)

    $actual = $this->wP_Comment->get_instance($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance2()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$comment_id) == false (line 176)
    // if (!$_comment) == true (line 182)
    // if (!$_comment) == true (line 185)

    $actual = $this->wP_Comment->get_instance($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance3()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$comment_id) == true (line 176)

    $actual = $this->wP_Comment->get_instance($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_array0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Comment->to_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_children0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->children)) == false (line 268)
    // if ('flat' === $_args['format']) == false (line 276)

    $actual = $this->wP_Comment->get_children($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_children1()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->children)) == false (line 268)
    // if ('flat' === $_args['format']) == true (line 276)

    $actual = $this->wP_Comment->get_children($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_children2()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->children)) == false (line 268)
    // if ('flat' === $_args['format']) == true (line 276)

    $actual = $this->wP_Comment->get_children($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_children3()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->children)) == true (line 268)
    // if ($this->populated_children) == false (line 269)
    // if ('flat' === $_args['format']) == false (line 276)

    $actual = $this->wP_Comment->get_children($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_children4()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->children)) == true (line 268)
    // if ($this->populated_children) == false (line 269)
    // if ('flat' === $_args['format']) == true (line 276)

    $actual = $this->wP_Comment->get_children($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_children5()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->children)) == true (line 268)
    // if ($this->populated_children) == false (line 269)
    // if ('flat' === $_args['format']) == true (line 276)

    $actual = $this->wP_Comment->get_children($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_children6()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->children)) == true (line 268)
    // if ($this->populated_children) == true (line 269)
    // if ('flat' === $_args['format']) == false (line 276)

    $actual = $this->wP_Comment->get_children($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_children7()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->children)) == true (line 268)
    // if ($this->populated_children) == true (line 269)
    // if ('flat' === $_args['format']) == true (line 276)

    $actual = $this->wP_Comment->get_children($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_children8()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->children)) == true (line 268)
    // if ($this->populated_children) == true (line 269)
    // if ('flat' === $_args['format']) == true (line 276)

    $actual = $this->wP_Comment->get_children($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_child0()
{
    $child = m::mock(\WP_Comment::class);

    // TODO: Your mock expectations here

    $actual = $this->wP_Comment->add_child($child);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_child0()
{
    $child_id = m::mock('UntypedParameter_child_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->children[$child_id])) == false (line 315)

    $actual = $this->wP_Comment->get_child($child_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_child1()
{
    $child_id = m::mock('UntypedParameter_child_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->children[$child_id])) == true (line 315)

    $actual = $this->wP_Comment->get_child($child_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPopulated_children0()
{
    $set = m::mock('UntypedParameter_set_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Comment->populated_children($set);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->post_fields) && 0 !== (int) $this->comment_post_ID) == false (line 347)

    $actual = $this->wP_Comment->__isset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->post_fields) && 0 !== (int) $this->comment_post_ID) == true (line 347)

    $actual = $this->wP_Comment->__isset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->post_fields)) == false (line 364)

    $actual = $this->wP_Comment->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->post_fields)) == true (line 364)

    $actual = $this->wP_Comment->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
