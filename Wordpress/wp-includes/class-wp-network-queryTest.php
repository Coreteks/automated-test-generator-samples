<?php

namespace tests;

use Mockery as m;
use WP_Network_Query;

class WP_Network_QueryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_query = null;
/**
* @var \WP_Network_Query
*/
protected $wP_Network_Query;

public function setUp()
{
    parent::setUp();

    $this->_query = null;
    $this->wP_Network_Query = new \WP_Network_Query($this->_query);
}

public function testParse_query0()
{
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query)) == false (line 150)

    $actual = $this->wP_Network_Query->parse_query($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_query1()
{
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($query)) == true (line 150)

    $actual = $this->wP_Network_Query->parse_query($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery0()
{
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Network_Query->query($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)
    // if ($_network = \get_network($network_id)) == false (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)
    // if ($_network = \get_network($network_id)) == true (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)
    // if ($_network = \get_network($network_id)) == false (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)
    // if ($_network = \get_network($network_id)) == true (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == true (line 240)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == true (line 233)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)
    // if ($_network = \get_network($network_id)) == false (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)
    // if ($_network = \get_network($network_id)) == true (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)
    // if ($_network = \get_network($network_id)) == false (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)
    // if ($_network = \get_network($network_id)) == true (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == true (line 240)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == false (line 212)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == true (line 233)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)
    // if ($_network = \get_network($network_id)) == false (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)
    // if ($_network = \get_network($network_id)) == true (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)
    // if ($_network = \get_network($network_id)) == false (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)
    // if ($_network = \get_network($network_id)) == true (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == true (line 240)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == true (line 233)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)
    // if ($_network = \get_network($network_id)) == false (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)
    // if ($_network = \get_network($network_id)) == true (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)
    // if ($_network = \get_network($network_id)) == false (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)
    // if ($_network = \get_network($network_id)) == true (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == true (line 240)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == false (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == true (line 233)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)
    // if ($_network = \get_network($network_id)) == false (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)
    // if ($_network = \get_network($network_id)) == true (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)
    // if ($_network = \get_network($network_id)) == false (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)
    // if ($_network = \get_network($network_id)) == true (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == true (line 240)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == false (line 228)
    // if ($this->query_vars['count']) == true (line 233)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)
    // if ($_network = \get_network($network_id)) == false (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == false (line 245)
    // if ($_network = \get_network($network_id)) == true (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)
    // if ($_network = \get_network($network_id)) == false (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == false (line 240)
    // if ($this->query_vars['update_network_cache']) == true (line 245)
    // if ($_network = \get_network($network_id)) == true (line 252)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == false (line 233)
    // if ('ids' == $this->query_vars['fields']) == true (line 240)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_networks47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $cache_value) == true (line 212)
    // if ($network_ids) == true (line 214)
    // if ($this->found_networks && $this->query_vars['number']) == true (line 228)
    // if ($this->query_vars['count']) == true (line 233)

    $actual = $this->wP_Network_Query->get_networks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
