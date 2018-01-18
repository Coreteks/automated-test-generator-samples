<?php

namespace tests;

use Mockery as m;
use WP_List_Util;

class WP_List_UtilTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_input = null;
/**
* @var \WP_List_Util
*/
protected $wP_List_Util;

public function setUp()
{
    parent::setUp();

    $this->_input = null;
    $this->wP_List_Util = new \WP_List_Util($this->_input);
}

public function testGet_input0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_List_Util->get_input();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_output0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_List_Util->get_output();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter0()
{
    $args = m::mock('UntypedParameter_args_');
    $operator = m::mock('UntypedParameter_operator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 90)
    // if (!\in_array($operator, array('AND', 'OR', 'NOT'), \true)) == false (line 96)

    $actual = $this->wP_List_Util->filter($args, $operator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter1()
{
    $args = m::mock('UntypedParameter_args_');
    $operator = m::mock('UntypedParameter_operator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 90)
    // if (!\in_array($operator, array('AND', 'OR', 'NOT'), \true)) == false (line 96)
    // if ('AND' == $operator && $matched == $count || 'OR' == $operator && $matched > 0 || 'NOT' == $operator && 0 == $matched) == false (line 113)

    $actual = $this->wP_List_Util->filter($args, $operator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter2()
{
    $args = m::mock('UntypedParameter_args_');
    $operator = m::mock('UntypedParameter_operator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 90)
    // if (!\in_array($operator, array('AND', 'OR', 'NOT'), \true)) == false (line 96)
    // if ('AND' == $operator && $matched == $count || 'OR' == $operator && $matched > 0 || 'NOT' == $operator && 0 == $matched) == true (line 113)

    $actual = $this->wP_List_Util->filter($args, $operator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter3()
{
    $args = m::mock('UntypedParameter_args_');
    $operator = m::mock('UntypedParameter_operator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 90)
    // if (!\in_array($operator, array('AND', 'OR', 'NOT'), \true)) == false (line 96)
    // if (\array_key_exists($m_key, $to_match) && $m_value == $to_match[$m_key]) == false (line 108)
    // if ('AND' == $operator && $matched == $count || 'OR' == $operator && $matched > 0 || 'NOT' == $operator && 0 == $matched) == false (line 113)

    $actual = $this->wP_List_Util->filter($args, $operator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter4()
{
    $args = m::mock('UntypedParameter_args_');
    $operator = m::mock('UntypedParameter_operator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 90)
    // if (!\in_array($operator, array('AND', 'OR', 'NOT'), \true)) == false (line 96)
    // if (\array_key_exists($m_key, $to_match) && $m_value == $to_match[$m_key]) == false (line 108)
    // if ('AND' == $operator && $matched == $count || 'OR' == $operator && $matched > 0 || 'NOT' == $operator && 0 == $matched) == true (line 113)

    $actual = $this->wP_List_Util->filter($args, $operator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter5()
{
    $args = m::mock('UntypedParameter_args_');
    $operator = m::mock('UntypedParameter_operator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 90)
    // if (!\in_array($operator, array('AND', 'OR', 'NOT'), \true)) == false (line 96)
    // if (\array_key_exists($m_key, $to_match) && $m_value == $to_match[$m_key]) == true (line 108)
    // if ('AND' == $operator && $matched == $count || 'OR' == $operator && $matched > 0 || 'NOT' == $operator && 0 == $matched) == false (line 113)

    $actual = $this->wP_List_Util->filter($args, $operator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter6()
{
    $args = m::mock('UntypedParameter_args_');
    $operator = m::mock('UntypedParameter_operator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 90)
    // if (!\in_array($operator, array('AND', 'OR', 'NOT'), \true)) == false (line 96)
    // if (\array_key_exists($m_key, $to_match) && $m_value == $to_match[$m_key]) == true (line 108)
    // if ('AND' == $operator && $matched == $count || 'OR' == $operator && $matched > 0 || 'NOT' == $operator && 0 == $matched) == true (line 113)

    $actual = $this->wP_List_Util->filter($args, $operator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter7()
{
    $args = m::mock('UntypedParameter_args_');
    $operator = m::mock('UntypedParameter_operator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == false (line 90)
    // if (!\in_array($operator, array('AND', 'OR', 'NOT'), \true)) == true (line 96)

    $actual = $this->wP_List_Util->filter($args, $operator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter8()
{
    $args = m::mock('UntypedParameter_args_');
    $operator = m::mock('UntypedParameter_operator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($args)) == true (line 90)

    $actual = $this->wP_List_Util->filter($args, $operator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck0()
{
    $field = m::mock('UntypedParameter_field_');
    $index_key = m::mock('UntypedParameter_index_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$index_key) == false (line 145)

    $actual = $this->wP_List_Util->pluck($field, $index_key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck1()
{
    $field = m::mock('UntypedParameter_field_');
    $index_key = m::mock('UntypedParameter_index_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$index_key) == false (line 145)
    // if (\is_object($value)) == false (line 168)
    // if (isset($value[$index_key])) == false (line 175)

    $actual = $this->wP_List_Util->pluck($field, $index_key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck2()
{
    $field = m::mock('UntypedParameter_field_');
    $index_key = m::mock('UntypedParameter_index_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$index_key) == false (line 145)
    // if (\is_object($value)) == false (line 168)
    // if (isset($value[$index_key])) == true (line 175)

    $actual = $this->wP_List_Util->pluck($field, $index_key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck3()
{
    $field = m::mock('UntypedParameter_field_');
    $index_key = m::mock('UntypedParameter_index_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$index_key) == false (line 145)
    // if (\is_object($value)) == true (line 168)
    // if (isset($value->{$index_key})) == false (line 169)

    $actual = $this->wP_List_Util->pluck($field, $index_key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck4()
{
    $field = m::mock('UntypedParameter_field_');
    $index_key = m::mock('UntypedParameter_index_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$index_key) == false (line 145)
    // if (\is_object($value)) == true (line 168)
    // if (isset($value->{$index_key})) == true (line 169)

    $actual = $this->wP_List_Util->pluck($field, $index_key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck5()
{
    $field = m::mock('UntypedParameter_field_');
    $index_key = m::mock('UntypedParameter_index_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$index_key) == true (line 145)

    $actual = $this->wP_List_Util->pluck($field, $index_key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck6()
{
    $field = m::mock('UntypedParameter_field_');
    $index_key = m::mock('UntypedParameter_index_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$index_key) == true (line 145)
    // if (\is_object($value)) == false (line 151)

    $actual = $this->wP_List_Util->pluck($field, $index_key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPluck7()
{
    $field = m::mock('UntypedParameter_field_');
    $index_key = m::mock('UntypedParameter_index_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$index_key) == true (line 145)
    // if (\is_object($value)) == true (line 151)

    $actual = $this->wP_List_Util->pluck($field, $index_key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort0()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $order = m::mock('UntypedParameter_order_');
    $preserve_keys = m::mock('UntypedParameter_preserve_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($orderby)) == false (line 201)
    // if (\is_string($orderby)) == false (line 205)
    // if ($preserve_keys) == false (line 215)

    $actual = $this->wP_List_Util->sort($orderby, $order, $preserve_keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort1()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $order = m::mock('UntypedParameter_order_');
    $preserve_keys = m::mock('UntypedParameter_preserve_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($orderby)) == false (line 201)
    // if (\is_string($orderby)) == false (line 205)
    // if ($preserve_keys) == true (line 215)

    $actual = $this->wP_List_Util->sort($orderby, $order, $preserve_keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort2()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $order = m::mock('UntypedParameter_order_');
    $preserve_keys = m::mock('UntypedParameter_preserve_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($orderby)) == false (line 201)
    // if (\is_string($orderby)) == false (line 205)
    // if ($preserve_keys) == false (line 215)

    $actual = $this->wP_List_Util->sort($orderby, $order, $preserve_keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort3()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $order = m::mock('UntypedParameter_order_');
    $preserve_keys = m::mock('UntypedParameter_preserve_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($orderby)) == false (line 201)
    // if (\is_string($orderby)) == false (line 205)
    // if ($preserve_keys) == true (line 215)

    $actual = $this->wP_List_Util->sort($orderby, $order, $preserve_keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort4()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $order = m::mock('UntypedParameter_order_');
    $preserve_keys = m::mock('UntypedParameter_preserve_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($orderby)) == false (line 201)
    // if (\is_string($orderby)) == true (line 205)
    // if ($preserve_keys) == false (line 215)

    $actual = $this->wP_List_Util->sort($orderby, $order, $preserve_keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort5()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $order = m::mock('UntypedParameter_order_');
    $preserve_keys = m::mock('UntypedParameter_preserve_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($orderby)) == false (line 201)
    // if (\is_string($orderby)) == true (line 205)
    // if ($preserve_keys) == true (line 215)

    $actual = $this->wP_List_Util->sort($orderby, $order, $preserve_keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort6()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $order = m::mock('UntypedParameter_order_');
    $preserve_keys = m::mock('UntypedParameter_preserve_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($orderby)) == false (line 201)
    // if (\is_string($orderby)) == true (line 205)
    // if ($preserve_keys) == false (line 215)

    $actual = $this->wP_List_Util->sort($orderby, $order, $preserve_keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort7()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $order = m::mock('UntypedParameter_order_');
    $preserve_keys = m::mock('UntypedParameter_preserve_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($orderby)) == false (line 201)
    // if (\is_string($orderby)) == true (line 205)
    // if ($preserve_keys) == true (line 215)

    $actual = $this->wP_List_Util->sort($orderby, $order, $preserve_keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort8()
{
    $orderby = m::mock('UntypedParameter_orderby_');
    $order = m::mock('UntypedParameter_order_');
    $preserve_keys = m::mock('UntypedParameter_preserve_keys_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($orderby)) == true (line 201)

    $actual = $this->wP_List_Util->sort($orderby, $order, $preserve_keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
