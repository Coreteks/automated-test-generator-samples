<?php

namespace tests;

use Mockery as m;
use WP_Network;

class WP_NetworkTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_network = null;
/**
* @var \WP_Network
*/
protected $wP_Network;

public function setUp()
{
    parent::setUp();

    $this->_network = null;
    $this->wP_Network = new \WP_Network($this->_network);
}

public function testGet_instance0()
{
    $network_id = m::mock('UntypedParameter_network_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$network_id) == false (line 98)
    // if (!$_network) == false (line 104)

    $actual = $this->wP_Network->get_instance($network_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance1()
{
    $network_id = m::mock('UntypedParameter_network_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$network_id) == false (line 98)
    // if (!$_network) == true (line 104)
    // if (empty($_network) || \is_wp_error($_network)) == false (line 107)

    $actual = $this->wP_Network->get_instance($network_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance2()
{
    $network_id = m::mock('UntypedParameter_network_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$network_id) == false (line 98)
    // if (!$_network) == true (line 104)
    // if (empty($_network) || \is_wp_error($_network)) == true (line 107)

    $actual = $this->wP_Network->get_instance($network_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance3()
{
    $network_id = m::mock('UntypedParameter_network_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$network_id) == true (line 98)

    $actual = $this->wP_Network->get_instance($network_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 147)
    // Case 'id' == false (line 148)
    // Case 'blog_id' == false (line 150)
    // Case 'site_id' == false (line 152)

    $actual = $this->wP_Network->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 147)
    // Case 'id' == false (line 148)
    // Case 'blog_id' == false (line 150)
    // Case 'site_id' == true (line 152)

    $actual = $this->wP_Network->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 147)
    // Case 'id' == false (line 148)
    // Case 'blog_id' == true (line 150)

    $actual = $this->wP_Network->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 147)
    // Case 'id' == true (line 148)

    $actual = $this->wP_Network->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 170)
    // Case 'id' == false (line 171)
    // Case 'blog_id' == false (line 172)
    // Case 'site_id' == false (line 173)

    $actual = $this->wP_Network->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 170)
    // Case 'id' == false (line 171)
    // Case 'blog_id' == false (line 172)
    // Case 'site_id' == true (line 173)

    $actual = $this->wP_Network->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 170)
    // Case 'id' == false (line 171)
    // Case 'blog_id' == true (line 172)

    $actual = $this->wP_Network->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 170)
    // Case 'id' == true (line 171)

    $actual = $this->wP_Network->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 191)
    // Case 'id' == false (line 192)
    // Case 'blog_id' == false (line 195)
    // Case 'site_id' == false (line 196)
    // Default (line 199)

    $actual = $this->wP_Network->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 191)
    // Case 'id' == false (line 192)
    // Case 'blog_id' == false (line 195)
    // Case 'site_id' == true (line 196)

    $actual = $this->wP_Network->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set2()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 191)
    // Case 'id' == false (line 192)
    // Case 'blog_id' == true (line 195)

    $actual = $this->wP_Network->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set3()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 191)
    // Case 'id' == true (line 192)

    $actual = $this->wP_Network->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path0()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path1()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path2()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path3()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path4()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path5()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path6()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path7()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path8()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path9()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path10()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path11()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path12()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path13()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path14()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path15()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path16()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path17()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path18()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path19()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path20()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path21()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path22()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path23()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path24()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path25()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path26()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path27()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path28()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path29()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path30()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path31()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path32()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path33()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path34()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path35()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path36()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path37()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path38()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path39()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path40()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path41()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path42()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path43()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path44()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path45()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path46()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path47()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path48()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path49()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path50()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path51()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path52()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path53()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path54()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path55()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path56()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path57()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path58()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path59()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path60()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path61()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path62()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path63()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path64()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path65()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path66()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path67()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path68()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path69()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path70()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path71()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path72()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path73()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path74()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path75()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path76()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path77()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path78()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path79()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path80()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path81()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path82()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path83()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path84()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path85()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path86()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path87()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path88()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path89()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path90()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path91()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path92()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path93()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path94()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path95()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path96()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path97()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path98()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path99()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path100()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path101()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path102()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path103()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path104()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path105()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path106()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path107()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path108()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path109()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path110()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path111()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path112()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path113()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path114()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path115()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path116()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path117()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path118()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path119()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path120()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path121()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path122()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path123()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path124()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path125()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path126()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path127()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path128()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path129()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path130()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path131()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path132()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path133()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path134()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path135()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path136()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path137()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path138()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path139()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path140()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path141()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path142()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path143()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path144()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path145()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path146()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path147()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path148()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path149()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path150()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path151()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path152()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path153()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path154()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path155()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path156()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path157()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path158()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path159()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path160()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path161()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path162()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path163()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path164()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path165()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path166()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path167()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path168()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path169()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path170()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path171()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path172()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path173()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path174()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path175()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path176()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path177()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path178()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path179()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path180()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path181()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path182()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path183()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path184()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path185()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path186()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path187()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path188()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path189()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path190()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path191()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path192()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path193()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path194()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path195()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path196()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path197()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path198()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path199()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path200()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path201()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path202()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path203()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path204()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path205()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path206()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path207()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path208()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path209()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path210()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path211()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path212()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path213()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path214()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path215()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path216()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path217()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path218()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path219()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path220()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path221()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path222()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path223()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path224()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path225()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path226()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path227()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path228()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path229()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path230()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path231()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path232()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path233()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path234()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path235()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path236()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path237()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path238()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path239()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path240()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path241()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path242()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path243()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path244()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path245()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path246()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path247()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path248()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path249()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path250()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path251()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path252()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path253()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path254()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path255()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path256()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path257()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path258()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path259()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path260()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path261()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path262()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path263()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path264()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path265()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path266()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path267()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path268()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path269()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path270()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path271()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path272()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path273()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path274()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path275()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path276()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path277()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path278()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path279()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path280()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path281()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path282()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path283()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path284()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path285()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path286()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path287()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path288()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path289()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path290()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path291()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path292()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path293()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path294()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path295()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path296()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path297()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path298()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path299()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path300()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path301()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path302()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path303()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path304()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path305()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path306()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path307()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path308()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path309()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path310()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path311()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path312()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path313()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path314()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path315()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path316()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path317()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path318()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path319()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path320()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path321()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path322()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path323()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path324()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path325()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path326()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path327()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path328()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path329()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path330()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path331()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path332()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path333()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path334()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path335()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path336()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path337()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path338()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path339()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path340()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path341()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path342()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path343()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path344()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path345()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path346()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path347()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path348()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path349()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path350()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path351()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path352()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path353()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path354()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path355()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path356()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path357()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path358()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path359()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path360()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path361()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path362()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path363()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path364()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path365()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path366()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path367()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path368()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path369()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path370()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path371()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path372()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path373()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path374()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path375()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path376()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path377()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path378()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path379()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path380()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path381()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path382()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path383()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path384()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path385()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path386()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path387()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path388()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path389()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path390()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path391()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path392()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path393()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path394()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path395()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path396()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path397()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path398()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path399()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path400()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path401()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path402()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path403()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path404()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path405()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path406()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path407()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path408()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path409()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path410()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path411()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path412()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path413()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path414()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path415()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path416()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path417()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path418()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path419()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path420()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path421()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path422()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path423()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path424()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path425()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path426()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path427()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path428()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path429()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path430()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path431()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path432()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path433()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path434()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path435()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path436()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path437()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path438()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path439()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path440()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path441()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path442()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path443()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path444()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path445()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path446()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path447()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path448()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path449()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == false (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path450()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path451()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path452()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path453()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path454()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path455()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path456()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path457()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path458()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path459()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path460()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path461()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path462()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path463()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path464()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path465()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path466()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path467()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path468()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path469()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path470()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path471()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path472()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path473()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path474()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path475()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path476()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path477()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path478()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path479()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path480()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path481()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path482()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path483()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path484()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path485()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path486()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path487()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path488()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path489()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path490()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path491()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path492()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path493()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path494()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path495()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path496()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path497()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path498()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path499()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path500()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path501()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path502()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path503()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path504()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path505()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path506()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path507()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path508()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path509()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path510()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path511()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path512()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path513()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path514()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path515()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path516()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path517()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path518()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path519()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path520()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path521()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path522()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path523()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path524()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == false (line 352)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path525()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path526()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path527()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path528()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path529()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path530()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path531()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path532()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path533()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path534()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path535()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path536()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path537()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path538()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path539()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path540()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path541()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path542()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path543()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path544()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path545()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path546()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path547()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path548()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path549()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path550()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path551()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path552()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path553()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path554()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path555()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path556()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path557()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path558()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path559()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path560()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path561()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path562()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path563()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path564()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path565()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path566()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path567()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path568()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path569()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path570()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path571()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path572()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path573()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path574()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path575()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path576()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path577()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path578()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path579()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path580()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path581()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path582()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path583()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path584()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path585()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path586()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path587()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path588()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path589()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path590()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path591()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path592()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path593()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path594()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path595()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path596()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path597()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path598()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path599()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == false (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path600()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path601()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path602()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path603()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path604()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path605()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path606()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path607()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path608()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path609()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path610()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path611()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path612()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path613()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path614()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == false (line 367)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path615()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path616()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path617()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path618()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path619()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path620()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path621()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path622()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path623()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path624()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path625()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path626()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path627()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path628()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path629()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path630()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path631()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path632()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path633()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path634()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path635()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path636()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path637()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path638()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path639()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path640()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path641()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path642()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path643()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path644()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == false (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path645()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path646()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path647()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path648()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path649()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path650()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path651()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path652()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path653()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path654()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path655()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path656()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path657()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path658()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path659()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path660()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path661()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path662()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path663()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path664()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path665()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == false (line 455)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path666()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path667()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == false (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path668()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path669()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == false (line 456)
    // if ($network->path === '/') == true (line 461)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path670()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == false (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path671()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == false (line 419)
    // if ($network->domain === $domain || "www.{$network->domain}" === $domain) == true (line 455)
    // if (\in_array($network->path, $paths, \true)) == true (line 456)
    // if (\true === $found) == true (line 467)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path672()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == false (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path673()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == false (line 415)
    // if (!$using_paths) == true (line 419)
    // if (!empty($networks)) == true (line 430)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_by_path674()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $segments = m::mock('UntypedParameter_segments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\array_shift($pieces)) == true (line 336)
    // if (!empty($pieces)) == true (line 337)
    // while (\array_shift($pieces)) == false (line 336)
    // if (\wp_using_ext_object_cache()) == true (line 352)
    // if (\false === $using_paths) == true (line 354)
    // if ($using_paths) == true (line 367)
    // if (\null !== $segments && \count($path_segments) > $segments) == true (line 383)
    // while (\count($path_segments)) == true (line 387)
    // while (\count($path_segments)) == false (line 387)
    // if (\null !== $pre) == true (line 415)

    $actual = $this->wP_Network->get_by_path($domain, $path, $segments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
