<?php

namespace tests;

use Mockery as m;
use WP_User;

class WP_UserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_id = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_site_id = null;
/**
* @var \WP_User
*/
protected $wP_User;

public function setUp()
{
    parent::setUp();

    $this->_id = null;
    $this->_name = null;
    $this->_site_id = null;
    $this->wP_User = new \WP_User($this->_id, $this->_name, $this->_site_id);
}

public function testInit0()
{
    $data = m::mock('UntypedParameter_data_');
    $site_id = m::mock('UntypedParameter_site_id_');

    // TODO: Your mock expectations here

    $actual = $this->wP_User->init($data, $site_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by0()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == false (line 230)
    // Default (line 235)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by1()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by2()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by3()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by4()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by5()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by6()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by7()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by8()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by9()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by10()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by11()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by12()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by13()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by14()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by15()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by16()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by17()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by18()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by19()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by20()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by21()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == true (line 213)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by22()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == false (line 230)
    // Default (line 235)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by23()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by24()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by25()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by26()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by27()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by28()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by29()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by30()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by31()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by32()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by33()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by34()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by35()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by36()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by37()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by38()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by39()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by40()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by41()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by42()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by43()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == true (line 213)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by44()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == true (line 206)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by45()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == false (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == true (line 202)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by46()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == false (line 230)
    // Default (line 235)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by47()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by48()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by49()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by50()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by51()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by52()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by53()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by54()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by55()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by56()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by57()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by58()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by59()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by60()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by61()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by62()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by63()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by64()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by65()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by66()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by67()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == false (line 199)
    // if (!$value) == true (line 213)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by68()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == false (line 230)
    // Default (line 235)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by69()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by70()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by71()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by72()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by73()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == false (line 226)
    // Case 'login' == true (line 230)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by74()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by75()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by76()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by77()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by78()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == false (line 222)
    // Case 'email' == true (line 226)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by79()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by80()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by81()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by82()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by83()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == false (line 218)
    // Case 'slug' == true (line 222)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by84()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by85()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == false (line 239)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by86()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == false (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by87()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == false (line 240)
    // if (!($user = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->users} WHERE {$db_field} = %s", $value)))) == true (line 245)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by88()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == false (line 213)
    // switch ($field) (line 217)
    // Case 'id' == true (line 218)
    // if (\false !== $user_id) == true (line 239)
    // if ($user = \wp_cache_get($user_id, 'users')) == true (line 240)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by89()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == false (line 206)
    // if (!$value) == true (line 213)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by90()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == false (line 202)
    // if ($value < 1) == true (line 206)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_data_by91()
{
    $field = m::mock('UntypedParameter_field_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('ID' === $field) == true (line 195)
    // if ('id' == $field) == true (line 199)
    // if (!\is_numeric($value)) == true (line 202)

    $actual = $this->wP_User->get_data_by($field, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 267)
    // if (isset($this->data->{$key})) == false (line 279)
    // if (isset(self::$back_compat_keys[$key])) == false (line 283)

    $actual = $this->wP_User->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 267)
    // if (isset($this->data->{$key})) == false (line 279)
    // if (isset(self::$back_compat_keys[$key])) == true (line 283)

    $actual = $this->wP_User->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 267)
    // if (isset($this->data->{$key})) == true (line 279)

    $actual = $this->wP_User->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == true (line 267)
    // if (isset($this->data->{$key})) == false (line 279)
    // if (isset(self::$back_compat_keys[$key])) == false (line 283)

    $actual = $this->wP_User->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset4()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == true (line 267)
    // if (isset($this->data->{$key})) == false (line 279)
    // if (isset(self::$back_compat_keys[$key])) == true (line 283)

    $actual = $this->wP_User->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset5()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == true (line 267)
    // if (isset($this->data->{$key})) == true (line 279)

    $actual = $this->wP_User->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 299)
    // if (isset($this->data->{$key})) == false (line 311)
    // if (isset(self::$back_compat_keys[$key])) == false (line 314)
    // if ($this->filter) == false (line 320)

    $actual = $this->wP_User->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 299)
    // if (isset($this->data->{$key})) == false (line 311)
    // if (isset(self::$back_compat_keys[$key])) == false (line 314)
    // if ($this->filter) == true (line 320)

    $actual = $this->wP_User->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 299)
    // if (isset($this->data->{$key})) == false (line 311)
    // if (isset(self::$back_compat_keys[$key])) == true (line 314)
    // if ($this->filter) == false (line 320)

    $actual = $this->wP_User->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 299)
    // if (isset($this->data->{$key})) == false (line 311)
    // if (isset(self::$back_compat_keys[$key])) == true (line 314)
    // if ($this->filter) == true (line 320)

    $actual = $this->wP_User->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get4()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 299)
    // if (isset($this->data->{$key})) == true (line 311)
    // if ($this->filter) == false (line 320)

    $actual = $this->wP_User->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get5()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 299)
    // if (isset($this->data->{$key})) == true (line 311)
    // if ($this->filter) == true (line 320)

    $actual = $this->wP_User->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get6()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == true (line 299)

    $actual = $this->wP_User->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 339)

    $actual = $this->wP_User->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == true (line 339)

    $actual = $this->wP_User->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 363)
    // if (isset($this->data->{$key})) == false (line 374)
    // if (isset(self::$back_compat_keys[$key])) == false (line 378)

    $actual = $this->wP_User->__unset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 363)
    // if (isset($this->data->{$key})) == false (line 374)
    // if (isset(self::$back_compat_keys[$key])) == true (line 378)

    $actual = $this->wP_User->__unset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 363)
    // if (isset($this->data->{$key})) == true (line 374)
    // if (isset(self::$back_compat_keys[$key])) == false (line 378)

    $actual = $this->wP_User->__unset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == false (line 363)
    // if (isset($this->data->{$key})) == true (line 374)
    // if (isset(self::$back_compat_keys[$key])) == true (line 378)

    $actual = $this->wP_User->__unset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset4()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == true (line 363)
    // if (isset($this->data->{$key})) == false (line 374)
    // if (isset(self::$back_compat_keys[$key])) == false (line 378)

    $actual = $this->wP_User->__unset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset5()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == true (line 363)
    // if (isset($this->data->{$key})) == false (line 374)
    // if (isset(self::$back_compat_keys[$key])) == true (line 378)

    $actual = $this->wP_User->__unset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset6()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == true (line 363)
    // if (isset($this->data->{$key})) == true (line 374)
    // if (isset(self::$back_compat_keys[$key])) == false (line 378)

    $actual = $this->wP_User->__unset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset7()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('id' == $key) == true (line 363)
    // if (isset($this->data->{$key})) == true (line 374)
    // if (isset(self::$back_compat_keys[$key])) == true (line 378)

    $actual = $this->wP_User->__unset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_User->exists();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->wP_User->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_prop0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->wP_User->has_prop($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_array0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_User->to_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('_init_caps' === $name) == false (line 443)

    $actual = $this->wP_User->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('_init_caps' === $name) == true (line 443)

    $actual = $this->wP_User->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == false (line 494)
    // if (\is_array($this->caps)) == false (line 503)
    // if ($switch_site) == false (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == false (line 494)
    // if (\is_array($this->caps)) == false (line 503)
    // if ($switch_site) == true (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == false (line 494)
    // if (\is_array($this->caps)) == false (line 503)
    // if ($switch_site) == false (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == false (line 494)
    // if (\is_array($this->caps)) == false (line 503)
    // if ($switch_site) == true (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == false (line 494)
    // if (\is_array($this->caps)) == true (line 503)
    // if ($switch_site) == false (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == false (line 494)
    // if (\is_array($this->caps)) == true (line 503)
    // if ($switch_site) == true (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == false (line 494)
    // if (\is_array($this->caps)) == true (line 503)
    // if ($switch_site) == false (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == false (line 494)
    // if (\is_array($this->caps)) == true (line 503)
    // if ($switch_site) == true (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == true (line 494)
    // if (\is_array($this->caps)) == false (line 503)
    // if ($switch_site) == false (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == true (line 494)
    // if (\is_array($this->caps)) == false (line 503)
    // if ($switch_site) == true (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == true (line 494)
    // if (\is_array($this->caps)) == false (line 503)
    // if ($switch_site) == false (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == true (line 494)
    // if (\is_array($this->caps)) == false (line 503)
    // if ($switch_site) == true (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == true (line 494)
    // if (\is_array($this->caps)) == true (line 503)
    // if ($switch_site) == false (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == true (line 494)
    // if (\is_array($this->caps)) == true (line 503)
    // if ($switch_site) == true (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == true (line 494)
    // if (\is_array($this->caps)) == true (line 503)
    // if ($switch_site) == false (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role_caps15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_multisite() && $this->site_id != \get_current_blog_id()) == true (line 494)
    // if (\is_array($this->caps)) == true (line 503)
    // if ($switch_site) == true (line 515)

    $actual = $this->wP_User->get_role_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_role0()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($role)) == false (line 532)

    $actual = $this->wP_User->add_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_role1()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($role)) == true (line 532)

    $actual = $this->wP_User->add_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_role0()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array($role, $this->roles)) == false (line 560)

    $actual = $this->wP_User->remove_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_role1()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array($role, $this->roles)) == true (line 560)

    $actual = $this->wP_User->remove_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_role0()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (1 == \count($this->roles) && $role == \current($this->roles)) == false (line 591)
    // if (!empty($role)) == false (line 600)

    $actual = $this->wP_User->set_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_role1()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (1 == \count($this->roles) && $role == \current($this->roles)) == false (line 591)
    // if (!empty($role)) == true (line 600)

    $actual = $this->wP_User->set_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_role2()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (1 == \count($this->roles) && $role == \current($this->roles)) == false (line 591)
    // if (!empty($role)) == false (line 600)

    $actual = $this->wP_User->set_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_role3()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (1 == \count($this->roles) && $role == \current($this->roles)) == false (line 591)
    // if (!empty($role)) == true (line 600)

    $actual = $this->wP_User->set_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_role4()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (1 == \count($this->roles) && $role == \current($this->roles)) == true (line 591)

    $actual = $this->wP_User->set_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLevel_reduction0()
{
    $max = m::mock('UntypedParameter_max_');
    $item = m::mock('UntypedParameter_item_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/^level_(10|[0-9])$/i', $item, $matches)) == false (line 642)

    $actual = $this->wP_User->level_reduction($max, $item);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLevel_reduction1()
{
    $max = m::mock('UntypedParameter_max_');
    $item = m::mock('UntypedParameter_item_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('/^level_(10|[0-9])$/i', $item, $matches)) == true (line 642)

    $actual = $this->wP_User->level_reduction($max, $item);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_user_level_from_caps0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_User->update_user_level_from_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_cap0()
{
    $cap = m::mock('UntypedParameter_cap_');
    $grant = m::mock('UntypedParameter_grant_');

    // TODO: Your mock expectations here

    $actual = $this->wP_User->add_cap($cap, $grant);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_cap0()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->caps[$cap])) == false (line 690)

    $actual = $this->wP_User->remove_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_cap1()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->caps[$cap])) == true (line 690)

    $actual = $this->wP_User->remove_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_all_caps0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_User->remove_all_caps();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_cap0()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($cap)) == false (line 733)
    // if (\is_multisite() && \is_super_admin($this->ID)) == false (line 743)

    $actual = $this->wP_User->has_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_cap1()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($cap)) == false (line 733)
    // if (\is_multisite() && \is_super_admin($this->ID)) == false (line 743)
    // if (empty($capabilities[$cap])) == false (line 771)

    $actual = $this->wP_User->has_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_cap2()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($cap)) == false (line 733)
    // if (\is_multisite() && \is_super_admin($this->ID)) == false (line 743)
    // if (empty($capabilities[$cap])) == true (line 771)

    $actual = $this->wP_User->has_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_cap3()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($cap)) == false (line 733)
    // if (\is_multisite() && \is_super_admin($this->ID)) == true (line 743)
    // if (\in_array('do_not_allow', $caps)) == false (line 744)

    $actual = $this->wP_User->has_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_cap4()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($cap)) == false (line 733)
    // if (\is_multisite() && \is_super_admin($this->ID)) == true (line 743)
    // if (\in_array('do_not_allow', $caps)) == true (line 744)

    $actual = $this->wP_User->has_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_cap5()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($cap)) == true (line 733)
    // if (\is_multisite() && \is_super_admin($this->ID)) == false (line 743)

    $actual = $this->wP_User->has_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_cap6()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($cap)) == true (line 733)
    // if (\is_multisite() && \is_super_admin($this->ID)) == false (line 743)
    // if (empty($capabilities[$cap])) == false (line 771)

    $actual = $this->wP_User->has_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_cap7()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($cap)) == true (line 733)
    // if (\is_multisite() && \is_super_admin($this->ID)) == false (line 743)
    // if (empty($capabilities[$cap])) == true (line 771)

    $actual = $this->wP_User->has_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_cap8()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($cap)) == true (line 733)
    // if (\is_multisite() && \is_super_admin($this->ID)) == true (line 743)
    // if (\in_array('do_not_allow', $caps)) == false (line 744)

    $actual = $this->wP_User->has_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_cap9()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($cap)) == true (line 733)
    // if (\is_multisite() && \is_super_admin($this->ID)) == true (line 743)
    // if (\in_array('do_not_allow', $caps)) == true (line 744)

    $actual = $this->wP_User->has_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTranslate_level_to_cap0()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    $actual = $this->wP_User->translate_level_to_cap($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFor_blog0()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    $actual = $this->wP_User->for_blog($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFor_site0()
{
    $site_id = m::mock('UntypedParameter_site_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($site_id)) == false (line 821)

    $actual = $this->wP_User->for_site($site_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFor_site1()
{
    $site_id = m::mock('UntypedParameter_site_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($site_id)) == true (line 821)

    $actual = $this->wP_User->for_site($site_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_site_id0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_User->get_site_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
