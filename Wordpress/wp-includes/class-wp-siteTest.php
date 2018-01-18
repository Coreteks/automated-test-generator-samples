<?php

namespace tests;

use Mockery as m;
use WP_Site;

class WP_SiteTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_site = null;
/**
* @var \WP_Site
*/
protected $wP_Site;

public function setUp()
{
    parent::setUp();

    $this->_site = null;
    $this->wP_Site = new \WP_Site($this->_site);
}

public function testGet_instance0()
{
    $site_id = m::mock('UntypedParameter_site_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$site_id) == false (line 160)
    // if (!$_site) == false (line 166)

    $actual = $this->wP_Site->get_instance($site_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance1()
{
    $site_id = m::mock('UntypedParameter_site_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$site_id) == false (line 160)
    // if (!$_site) == true (line 166)
    // if (empty($_site) || \is_wp_error($_site)) == false (line 169)

    $actual = $this->wP_Site->get_instance($site_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance2()
{
    $site_id = m::mock('UntypedParameter_site_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$site_id) == false (line 160)
    // if (!$_site) == true (line 166)
    // if (empty($_site) || \is_wp_error($_site)) == true (line 169)

    $actual = $this->wP_Site->get_instance($site_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance3()
{
    $site_id = m::mock('UntypedParameter_site_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$site_id) == true (line 160)

    $actual = $this->wP_Site->get_instance($site_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_array0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Site->to_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == false (line 223)
    // Case 'siteurl' == false (line 224)
    // Case 'post_count' == false (line 225)
    // Case 'home' == false (line 226)
    // Default (line 227)
    // if (!\did_action('ms_loaded')) == false (line 228)
    // if (isset($details->{$key})) == false (line 233)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == false (line 223)
    // Case 'siteurl' == false (line 224)
    // Case 'post_count' == false (line 225)
    // Case 'home' == false (line 226)
    // Default (line 227)
    // if (!\did_action('ms_loaded')) == false (line 228)
    // if (isset($details->{$key})) == true (line 233)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == false (line 223)
    // Case 'siteurl' == false (line 224)
    // Case 'post_count' == false (line 225)
    // Case 'home' == false (line 226)
    // Default (line 227)
    // if (!\did_action('ms_loaded')) == true (line 228)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == false (line 223)
    // Case 'siteurl' == false (line 224)
    // Case 'post_count' == false (line 225)
    // Case 'home' == true (line 226)
    // if (!\did_action('ms_loaded')) == false (line 228)
    // if (isset($details->{$key})) == false (line 233)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get4()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == false (line 223)
    // Case 'siteurl' == false (line 224)
    // Case 'post_count' == false (line 225)
    // Case 'home' == true (line 226)
    // if (!\did_action('ms_loaded')) == false (line 228)
    // if (isset($details->{$key})) == true (line 233)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get5()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == false (line 223)
    // Case 'siteurl' == false (line 224)
    // Case 'post_count' == false (line 225)
    // Case 'home' == true (line 226)
    // if (!\did_action('ms_loaded')) == true (line 228)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get6()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == false (line 223)
    // Case 'siteurl' == false (line 224)
    // Case 'post_count' == true (line 225)
    // if (!\did_action('ms_loaded')) == false (line 228)
    // if (isset($details->{$key})) == false (line 233)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get7()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == false (line 223)
    // Case 'siteurl' == false (line 224)
    // Case 'post_count' == true (line 225)
    // if (!\did_action('ms_loaded')) == false (line 228)
    // if (isset($details->{$key})) == true (line 233)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get8()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == false (line 223)
    // Case 'siteurl' == false (line 224)
    // Case 'post_count' == true (line 225)
    // if (!\did_action('ms_loaded')) == true (line 228)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get9()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == false (line 223)
    // Case 'siteurl' == true (line 224)
    // if (!\did_action('ms_loaded')) == false (line 228)
    // if (isset($details->{$key})) == false (line 233)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get10()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == false (line 223)
    // Case 'siteurl' == true (line 224)
    // if (!\did_action('ms_loaded')) == false (line 228)
    // if (isset($details->{$key})) == true (line 233)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get11()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == false (line 223)
    // Case 'siteurl' == true (line 224)
    // if (!\did_action('ms_loaded')) == true (line 228)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get12()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == true (line 223)
    // if (!\did_action('ms_loaded')) == false (line 228)
    // if (isset($details->{$key})) == false (line 233)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get13()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == true (line 223)
    // if (!\did_action('ms_loaded')) == false (line 228)
    // if (isset($details->{$key})) == true (line 233)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get14()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == false (line 221)
    // Case 'blogname' == true (line 223)
    // if (!\did_action('ms_loaded')) == true (line 228)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get15()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == false (line 219)
    // Case 'network_id' == true (line 221)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get16()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 218)
    // Case 'id' == true (line 219)

    $actual = $this->wP_Site->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 253)
    // Case 'id' == false (line 254)
    // Case 'network_id' == false (line 255)
    // Case 'blogname' == false (line 257)
    // Case 'siteurl' == false (line 258)
    // Case 'post_count' == false (line 259)
    // Case 'home' == false (line 260)
    // Default (line 265)
    // if (!\did_action('ms_loaded')) == false (line 266)
    // if (isset($details->{$key})) == false (line 271)

    $actual = $this->wP_Site->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 253)
    // Case 'id' == false (line 254)
    // Case 'network_id' == false (line 255)
    // Case 'blogname' == false (line 257)
    // Case 'siteurl' == false (line 258)
    // Case 'post_count' == false (line 259)
    // Case 'home' == false (line 260)
    // Default (line 265)
    // if (!\did_action('ms_loaded')) == false (line 266)
    // if (isset($details->{$key})) == true (line 271)

    $actual = $this->wP_Site->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 253)
    // Case 'id' == false (line 254)
    // Case 'network_id' == false (line 255)
    // Case 'blogname' == false (line 257)
    // Case 'siteurl' == false (line 258)
    // Case 'post_count' == false (line 259)
    // Case 'home' == false (line 260)
    // Default (line 265)
    // if (!\did_action('ms_loaded')) == true (line 266)

    $actual = $this->wP_Site->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 253)
    // Case 'id' == false (line 254)
    // Case 'network_id' == false (line 255)
    // Case 'blogname' == false (line 257)
    // Case 'siteurl' == false (line 258)
    // Case 'post_count' == false (line 259)
    // Case 'home' == true (line 260)
    // if (!\did_action('ms_loaded')) == false (line 261)

    $actual = $this->wP_Site->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset4()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 253)
    // Case 'id' == false (line 254)
    // Case 'network_id' == false (line 255)
    // Case 'blogname' == false (line 257)
    // Case 'siteurl' == false (line 258)
    // Case 'post_count' == false (line 259)
    // Case 'home' == true (line 260)
    // if (!\did_action('ms_loaded')) == true (line 261)

    $actual = $this->wP_Site->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset5()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 253)
    // Case 'id' == false (line 254)
    // Case 'network_id' == false (line 255)
    // Case 'blogname' == false (line 257)
    // Case 'siteurl' == false (line 258)
    // Case 'post_count' == true (line 259)
    // if (!\did_action('ms_loaded')) == false (line 261)

    $actual = $this->wP_Site->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset6()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 253)
    // Case 'id' == false (line 254)
    // Case 'network_id' == false (line 255)
    // Case 'blogname' == false (line 257)
    // Case 'siteurl' == false (line 258)
    // Case 'post_count' == true (line 259)
    // if (!\did_action('ms_loaded')) == true (line 261)

    $actual = $this->wP_Site->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset7()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 253)
    // Case 'id' == false (line 254)
    // Case 'network_id' == false (line 255)
    // Case 'blogname' == false (line 257)
    // Case 'siteurl' == true (line 258)
    // if (!\did_action('ms_loaded')) == false (line 261)

    $actual = $this->wP_Site->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset8()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 253)
    // Case 'id' == false (line 254)
    // Case 'network_id' == false (line 255)
    // Case 'blogname' == false (line 257)
    // Case 'siteurl' == true (line 258)
    // if (!\did_action('ms_loaded')) == true (line 261)

    $actual = $this->wP_Site->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset9()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 253)
    // Case 'id' == false (line 254)
    // Case 'network_id' == false (line 255)
    // Case 'blogname' == true (line 257)
    // if (!\did_action('ms_loaded')) == false (line 261)

    $actual = $this->wP_Site->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset10()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 253)
    // Case 'id' == false (line 254)
    // Case 'network_id' == false (line 255)
    // Case 'blogname' == true (line 257)
    // if (!\did_action('ms_loaded')) == true (line 261)

    $actual = $this->wP_Site->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset11()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 253)
    // Case 'id' == false (line 254)
    // Case 'network_id' == true (line 255)

    $actual = $this->wP_Site->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset12()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 253)
    // Case 'id' == true (line 254)

    $actual = $this->wP_Site->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 290)
    // Case 'id' == false (line 291)
    // Case 'network_id' == false (line 294)
    // Default (line 297)

    $actual = $this->wP_Site->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 290)
    // Case 'id' == false (line 291)
    // Case 'network_id' == true (line 294)

    $actual = $this->wP_Site->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set2()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($key) (line 290)
    // Case 'id' == true (line 291)

    $actual = $this->wP_Site->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
