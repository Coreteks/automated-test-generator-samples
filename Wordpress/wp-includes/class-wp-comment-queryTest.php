<?php

namespace tests;

use Mockery as m;
use WP_Comment_Query;

class WP_Comment_QueryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_query = null;
/**
* @var \WP_Comment_Query
*/
protected $wP_Comment_Query;

public function setUp()
{
    parent::setUp();

    $this->_query = null;
    $this->wP_Comment_Query = new \WP_Comment_Query($this->_query);
}

public function test__call0()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('get_search_sql' === $name) == false (line 126)

    $actual = $this->wP_Comment_Query->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('get_search_sql' === $name) == true (line 126)

    $actual = $this->wP_Comment_Query->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_query0()
{
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query)) == false (line 315)

    $actual = $this->wP_Comment_Query->parse_query($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_query1()
{
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query)) == true (line 315)

    $actual = $this->wP_Comment_Query->parse_query($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery0()
{
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Comment_Query->query($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == true (line 422)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == true (line 415)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == true (line 422)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == true (line 415)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments48()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments49()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments50()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments51()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments52()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments53()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments54()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments55()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments56()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments57()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments58()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == true (line 422)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments59()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == true (line 415)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments60()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments61()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments62()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments63()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments64()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments65()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments66()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments67()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments68()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments69()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments70()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments71()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments72()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments73()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments74()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments75()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments76()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments77()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments78()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == true (line 422)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments79()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == true (line 415)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments80()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments81()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments82()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments83()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments84()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments85()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments86()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments87()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments88()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments89()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments90()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments91()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments92()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments93()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments94()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments95()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments96()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments97()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments98()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == true (line 422)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments99()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == true (line 415)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments100()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments101()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments102()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments103()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments104()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments105()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments106()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments107()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments108()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments109()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments110()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments111()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments112()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments113()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments114()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments115()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments116()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments117()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments118()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == true (line 422)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments119()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == false (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == true (line 415)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments120()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments121()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments122()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments123()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments124()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments125()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments126()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments127()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments128()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments129()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments130()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments131()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments132()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments133()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments134()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments135()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments136()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments137()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments138()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == true (line 422)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments139()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == true (line 415)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments140()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments141()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments142()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments143()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments144()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments145()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments146()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments147()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments148()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments149()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments150()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments151()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments152()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments153()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments154()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments155()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments156()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments157()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments158()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == true (line 422)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments159()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == false (line 394)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == true (line 415)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments160()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments161()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments162()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments163()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments164()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments165()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments166()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments167()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments168()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments169()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments170()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments171()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments172()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments173()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments174()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments175()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments176()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments177()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments178()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == true (line 422)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments179()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == true (line 415)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments180()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments181()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments182()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments183()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments184()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments185()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments186()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments187()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments188()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments189()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments190()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments191()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments192()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments193()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments194()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments195()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments196()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments197()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments198()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == true (line 422)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments199()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == false (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == true (line 415)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments200()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments201()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments202()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments203()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments204()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments205()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments206()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments207()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments208()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments209()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments210()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments211()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments212()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments213()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments214()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments215()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments216()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments217()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments218()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == true (line 422)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments219()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == false (line 410)
    // if ($this->query_vars['count']) == true (line 415)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments220()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments221()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments222()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments223()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments224()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments225()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments226()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments227()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments228()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments229()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments230()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments231()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == false (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments232()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments233()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == false (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments234()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments235()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments236()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == false (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments237()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == false (line 422)
    // if ($_comment = \get_comment($comment_id)) == true (line 432)
    // if ($this->query_vars['update_comment_post_cache']) == true (line 438)
    // if ($this->query_vars['hierarchical']) == true (line 460)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments238()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == false (line 415)
    // if ('ids' == $this->query_vars['fields']) == true (line 422)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_comments239()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->meta_query->queries)) == true (line 378)
    // if (\false === $cache_value) == true (line 394)
    // if ($comment_ids) == true (line 396)
    // if ($this->found_comments && $this->query_vars['number']) == true (line 410)
    // if ($this->query_vars['count']) == true (line 415)

    $actual = $this->wP_Comment_Query->get_comments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
