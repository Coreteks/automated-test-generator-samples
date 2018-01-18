<?php

namespace tests;

use Mockery as m;
use WP_Site_Query;

class WP_Site_QueryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_query = null;
/**
* @var \WP_Site_Query
*/
protected $wP_Site_Query;

public function setUp()
{
    parent::setUp();

    $this->_query = null;
    $this->wP_Site_Query = new \WP_Site_Query($this->_query);
}

public function testParse_query0()
{
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query)) == false (line 192)

    $actual = $this->wP_Site_Query->parse_query($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_query1()
{
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query)) == true (line 192)

    $actual = $this->wP_Site_Query->parse_query($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery0()
{
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Site_Query->query($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)
    // if ($_site = \get_site($site_id)) == false (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)
    // if ($_site = \get_site($site_id)) == true (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)
    // if ($_site = \get_site($site_id)) == false (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)
    // if ($_site = \get_site($site_id)) == true (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == true (line 283)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == true (line 276)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)
    // if ($_site = \get_site($site_id)) == false (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)
    // if ($_site = \get_site($site_id)) == true (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)
    // if ($_site = \get_site($site_id)) == false (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)
    // if ($_site = \get_site($site_id)) == true (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == true (line 283)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 255)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == true (line 276)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)
    // if ($_site = \get_site($site_id)) == false (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)
    // if ($_site = \get_site($site_id)) == true (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)
    // if ($_site = \get_site($site_id)) == false (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)
    // if ($_site = \get_site($site_id)) == true (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == true (line 283)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == true (line 276)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)
    // if ($_site = \get_site($site_id)) == false (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)
    // if ($_site = \get_site($site_id)) == true (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)
    // if ($_site = \get_site($site_id)) == false (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)
    // if ($_site = \get_site($site_id)) == true (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == true (line 283)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == false (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == true (line 276)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)
    // if ($_site = \get_site($site_id)) == false (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)
    // if ($_site = \get_site($site_id)) == true (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)
    // if ($_site = \get_site($site_id)) == false (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)
    // if ($_site = \get_site($site_id)) == true (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == true (line 283)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == false (line 271)
    // if ($this->query_vars['count']) == true (line 276)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)
    // if ($_site = \get_site($site_id)) == false (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == false (line 290)
    // if ($_site = \get_site($site_id)) == true (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)
    // if ($_site = \get_site($site_id)) == false (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == false (line 283)
    // if ($this->query_vars['update_site_cache']) == true (line 290)
    // if ($_site = \get_site($site_id)) == true (line 297)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == false (line 276)
    // if ('ids' == $this->query_vars['fields']) == true (line 283)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_sites47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 255)
    // if ($site_ids) == true (line 257)
    // if ($this->found_sites && $this->query_vars['number']) == true (line 271)
    // if ($this->query_vars['count']) == true (line 276)

    $actual = $this->wP_Site_Query->get_sites();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
