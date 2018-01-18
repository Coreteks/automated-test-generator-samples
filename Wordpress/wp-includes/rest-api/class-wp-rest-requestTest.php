<?php

namespace tests;

use Mockery as m;
use WP_REST_Request;

class WP_REST_RequestTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_method = null;
/**
* @var mixed
*/
protected $_route = null;
/**
* @var mixed
*/
protected $_attributes = null;
/**
* @var \WP_REST_Request
*/
protected $wP_REST_Request;

public function setUp()
{
    parent::setUp();

    $this->_method = null;
    $this->_route = null;
    $this->_attributes = null;
    $this->wP_REST_Request = new \WP_REST_Request($this->_method, $this->_route, $this->_attributes);
}

public function testGet_method0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_method();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_method0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->set_method($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_headers0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_headers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCanonicalize_header_name0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->canonicalize_header_name($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_header0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$key])) == false (line 204)

    $actual = $this->wP_REST_Request->get_header($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_header1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$key])) == true (line 204)

    $actual = $this->wP_REST_Request->get_header($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_header_as_array0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$key])) == false (line 222)

    $actual = $this->wP_REST_Request->get_header_as_array($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_header_as_array1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$key])) == true (line 222)

    $actual = $this->wP_REST_Request->get_header_as_array($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_header0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->set_header($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_header0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$key])) == false (line 256)

    $actual = $this->wP_REST_Request->add_header($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_header1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$key])) == true (line 256)

    $actual = $this->wP_REST_Request->add_header($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_header0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->remove_header($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_headers0()
{
    $headers = m::mock('UntypedParameter_headers_');
    $override = m::mock('UntypedParameter_override_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\true === $override) == false (line 284)

    $actual = $this->wP_REST_Request->set_headers($headers, $override);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_headers1()
{
    $headers = m::mock('UntypedParameter_headers_');
    $override = m::mock('UntypedParameter_override_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\true === $override) == false (line 284)

    $actual = $this->wP_REST_Request->set_headers($headers, $override);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_headers2()
{
    $headers = m::mock('UntypedParameter_headers_');
    $override = m::mock('UntypedParameter_override_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\true === $override) == true (line 284)

    $actual = $this->wP_REST_Request->set_headers($headers, $override);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_headers3()
{
    $headers = m::mock('UntypedParameter_headers_');
    $override = m::mock('UntypedParameter_override_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\true === $override) == true (line 284)

    $actual = $this->wP_REST_Request->set_headers($headers, $override);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_content_type0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($value)) == false (line 302)
    // if (\strpos($value, ';')) == false (line 307)
    // if (\strpos($value, '/') === \false) == false (line 312)

    $actual = $this->wP_REST_Request->get_content_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_content_type1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($value)) == false (line 302)
    // if (\strpos($value, ';')) == false (line 307)
    // if (\strpos($value, '/') === \false) == true (line 312)

    $actual = $this->wP_REST_Request->get_content_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_content_type2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($value)) == false (line 302)
    // if (\strpos($value, ';')) == true (line 307)
    // if (\strpos($value, '/') === \false) == false (line 312)

    $actual = $this->wP_REST_Request->get_content_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_content_type3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($value)) == false (line 302)
    // if (\strpos($value, ';')) == true (line 307)
    // if (\strpos($value, '/') === \false) == true (line 312)

    $actual = $this->wP_REST_Request->get_content_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_content_type4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($value)) == true (line 302)

    $actual = $this->wP_REST_Request->get_content_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_param0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_param($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_param1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->params[$type][$key])) == false (line 391)

    $actual = $this->wP_REST_Request->get_param($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_param2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->params[$type][$key])) == true (line 391)

    $actual = $this->wP_REST_Request->get_param($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_param0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->set_param($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_params0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_params1()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_params2()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_url_params0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_url_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_url_params0()
{
    $params = m::mock('UntypedParameter_params_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->set_url_params($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_query_params0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_query_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_query_params0()
{
    $params = m::mock('UntypedParameter_params_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->set_query_params($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_body_params0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_body_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_body_params0()
{
    $params = m::mock('UntypedParameter_params_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->set_body_params($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_file_params0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_file_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_file_params0()
{
    $params = m::mock('UntypedParameter_params_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->set_file_params($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_default_params0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_default_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_default_params0()
{
    $params = m::mock('UntypedParameter_params_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->set_default_params($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_body0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_body();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_body0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->set_body($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_json_params0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_json_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_route0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_route();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_route0()
{
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->set_route($route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_attributes0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->get_attributes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_attributes0()
{
    $attributes = m::mock('UntypedParameter_attributes_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->set_attributes($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if ($invalid_params) == false (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if ($invalid_params) == true (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if ($invalid_params) == false (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if ($invalid_params) == true (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == false (line 780)
    // if (!\array_key_exists('sanitize_callback', $param_args) && !empty($param_args['type'])) == false (line 786)
    // if (empty($param_args['sanitize_callback'])) == false (line 790)
    // if (\is_wp_error($sanitized_value)) == false (line 796)
    // if ($invalid_params) == false (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == false (line 780)
    // if (!\array_key_exists('sanitize_callback', $param_args) && !empty($param_args['type'])) == false (line 786)
    // if (empty($param_args['sanitize_callback'])) == false (line 790)
    // if (\is_wp_error($sanitized_value)) == false (line 796)
    // if ($invalid_params) == true (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == false (line 780)
    // if (!\array_key_exists('sanitize_callback', $param_args) && !empty($param_args['type'])) == false (line 786)
    // if (empty($param_args['sanitize_callback'])) == false (line 790)
    // if (\is_wp_error($sanitized_value)) == true (line 796)
    // if ($invalid_params) == false (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == false (line 780)
    // if (!\array_key_exists('sanitize_callback', $param_args) && !empty($param_args['type'])) == false (line 786)
    // if (empty($param_args['sanitize_callback'])) == false (line 790)
    // if (\is_wp_error($sanitized_value)) == true (line 796)
    // if ($invalid_params) == true (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == false (line 780)
    // if (!\array_key_exists('sanitize_callback', $param_args) && !empty($param_args['type'])) == false (line 786)
    // if (empty($param_args['sanitize_callback'])) == true (line 790)
    // if ($invalid_params) == false (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == false (line 780)
    // if (!\array_key_exists('sanitize_callback', $param_args) && !empty($param_args['type'])) == false (line 786)
    // if (empty($param_args['sanitize_callback'])) == true (line 790)
    // if ($invalid_params) == true (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == false (line 780)
    // if (!\array_key_exists('sanitize_callback', $param_args) && !empty($param_args['type'])) == true (line 786)
    // if (empty($param_args['sanitize_callback'])) == false (line 790)
    // if (\is_wp_error($sanitized_value)) == false (line 796)
    // if ($invalid_params) == false (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == false (line 780)
    // if (!\array_key_exists('sanitize_callback', $param_args) && !empty($param_args['type'])) == true (line 786)
    // if (empty($param_args['sanitize_callback'])) == false (line 790)
    // if (\is_wp_error($sanitized_value)) == false (line 796)
    // if ($invalid_params) == true (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == false (line 780)
    // if (!\array_key_exists('sanitize_callback', $param_args) && !empty($param_args['type'])) == true (line 786)
    // if (empty($param_args['sanitize_callback'])) == false (line 790)
    // if (\is_wp_error($sanitized_value)) == true (line 796)
    // if ($invalid_params) == false (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == false (line 780)
    // if (!\array_key_exists('sanitize_callback', $param_args) && !empty($param_args['type'])) == true (line 786)
    // if (empty($param_args['sanitize_callback'])) == false (line 790)
    // if (\is_wp_error($sanitized_value)) == true (line 796)
    // if ($invalid_params) == true (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == false (line 780)
    // if (!\array_key_exists('sanitize_callback', $param_args) && !empty($param_args['type'])) == true (line 786)
    // if (empty($param_args['sanitize_callback'])) == true (line 790)
    // if ($invalid_params) == false (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == false (line 780)
    // if (!\array_key_exists('sanitize_callback', $param_args) && !empty($param_args['type'])) == true (line 786)
    // if (empty($param_args['sanitize_callback'])) == true (line 790)
    // if ($invalid_params) == true (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == true (line 780)
    // if ($invalid_params) == false (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == false (line 776)
    // if (!isset($attributes['args'][$key])) == true (line 780)
    // if ($invalid_params) == true (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == true (line 776)
    // if ($invalid_params) == false (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == false (line 767)
    // if (empty($this->params[$type])) == true (line 776)
    // if ($invalid_params) == true (line 804)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_params20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($attributes['args'])) == true (line 767)

    $actual = $this->wP_REST_Request->sanitize_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (!empty($required)) == false (line 847)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (!empty($required)) == false (line 847)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == false (line 867)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == false (line 867)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == false (line 870)
    // if (\is_wp_error($valid_check)) == false (line 874)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == false (line 870)
    // if (\is_wp_error($valid_check)) == false (line 874)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == false (line 870)
    // if (\is_wp_error($valid_check)) == true (line 874)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == false (line 870)
    // if (\is_wp_error($valid_check)) == true (line 874)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == true (line 870)
    // if (\is_wp_error($valid_check)) == false (line 874)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == true (line 870)
    // if (\is_wp_error($valid_check)) == false (line 874)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == true (line 870)
    // if (\is_wp_error($valid_check)) == true (line 874)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == true (line 870)
    // if (\is_wp_error($valid_check)) == true (line 874)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (!empty($required)) == true (line 847)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == false (line 842)
    // if (!empty($required)) == false (line 847)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == false (line 842)
    // if (!empty($required)) == false (line 847)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == false (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == false (line 867)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == false (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == false (line 867)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == false (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == false (line 870)
    // if (\is_wp_error($valid_check)) == false (line 874)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == false (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == false (line 870)
    // if (\is_wp_error($valid_check)) == false (line 874)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == false (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == false (line 870)
    // if (\is_wp_error($valid_check)) == true (line 874)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == false (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == false (line 870)
    // if (\is_wp_error($valid_check)) == true (line 874)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == false (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == true (line 870)
    // if (\is_wp_error($valid_check)) == false (line 874)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == false (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == true (line 870)
    // if (\is_wp_error($valid_check)) == false (line 874)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == false (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == true (line 870)
    // if (\is_wp_error($valid_check)) == true (line 874)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == false (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == true (line 870)
    // if (\is_wp_error($valid_check)) == true (line 874)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == false (line 842)
    // if (!empty($required)) == true (line 847)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == true (line 842)
    // if (!empty($required)) == false (line 847)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == true (line 842)
    // if (!empty($required)) == false (line 847)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == true (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == false (line 867)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == true (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == false (line 867)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == true (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == false (line 870)
    // if (\is_wp_error($valid_check)) == false (line 874)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == true (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == false (line 870)
    // if (\is_wp_error($valid_check)) == false (line 874)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == true (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == false (line 870)
    // if (\is_wp_error($valid_check)) == true (line 874)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == true (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == false (line 870)
    // if (\is_wp_error($valid_check)) == true (line 874)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == true (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == true (line 870)
    // if (\is_wp_error($valid_check)) == false (line 874)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == true (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == true (line 870)
    // if (\is_wp_error($valid_check)) == false (line 874)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == true (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == true (line 870)
    // if (\is_wp_error($valid_check)) == true (line 874)
    // if ($invalid_params) == false (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == true (line 842)
    // if (!empty($required)) == false (line 847)
    // if (\null !== $param && !empty($arg['validate_callback'])) == true (line 867)
    // if (\false === $valid_check) == true (line 870)
    // if (\is_wp_error($valid_check)) == true (line 874)
    // if ($invalid_params) == true (line 880)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == false (line 835)
    // if (isset($arg['required']) && \true === $arg['required'] && \null === $param) == true (line 842)
    // if (!empty($required)) == true (line 847)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == false (line 827)
    // if (empty($attributes['args'])) == true (line 835)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_valid_params40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($json_error)) == true (line 827)

    $actual = $this->wP_REST_Request->has_valid_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetExists0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->offsetExists($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetExists1()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->params[$type][$offset])) == false (line 905)

    $actual = $this->wP_REST_Request->offsetExists($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetExists2()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->params[$type][$offset])) == true (line 905)

    $actual = $this->wP_REST_Request->offsetExists($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet0()
{
    $offset = m::mock('UntypedParameter_offset_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->offsetSet($offset, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetUnset0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->offsetUnset($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetUnset1()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Request->offsetUnset($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom_url0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($bits['query'])) == false (line 966)
    // if (\get_option('permalink_structure') && 0 === \strpos($url, $api_root)) == false (line 971)
    // if (!empty($query_params['rest_route'])) == false (line 975)
    // if (!empty($route)) == false (line 982)

    $actual = $this->wP_REST_Request->from_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom_url1()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($bits['query'])) == false (line 966)
    // if (\get_option('permalink_structure') && 0 === \strpos($url, $api_root)) == false (line 971)
    // if (!empty($query_params['rest_route'])) == false (line 975)
    // if (!empty($route)) == true (line 982)

    $actual = $this->wP_REST_Request->from_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom_url2()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($bits['query'])) == false (line 966)
    // if (\get_option('permalink_structure') && 0 === \strpos($url, $api_root)) == false (line 971)
    // if (!empty($query_params['rest_route'])) == true (line 975)
    // if (!empty($route)) == false (line 982)

    $actual = $this->wP_REST_Request->from_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom_url3()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($bits['query'])) == false (line 966)
    // if (\get_option('permalink_structure') && 0 === \strpos($url, $api_root)) == false (line 971)
    // if (!empty($query_params['rest_route'])) == true (line 975)
    // if (!empty($route)) == true (line 982)

    $actual = $this->wP_REST_Request->from_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom_url4()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($bits['query'])) == false (line 966)
    // if (\get_option('permalink_structure') && 0 === \strpos($url, $api_root)) == true (line 971)
    // if (!empty($route)) == false (line 982)

    $actual = $this->wP_REST_Request->from_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom_url5()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($bits['query'])) == false (line 966)
    // if (\get_option('permalink_structure') && 0 === \strpos($url, $api_root)) == true (line 971)
    // if (!empty($route)) == true (line 982)

    $actual = $this->wP_REST_Request->from_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom_url6()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($bits['query'])) == true (line 966)
    // if (\get_option('permalink_structure') && 0 === \strpos($url, $api_root)) == false (line 971)
    // if (!empty($query_params['rest_route'])) == false (line 975)
    // if (!empty($route)) == false (line 982)

    $actual = $this->wP_REST_Request->from_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom_url7()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($bits['query'])) == true (line 966)
    // if (\get_option('permalink_structure') && 0 === \strpos($url, $api_root)) == false (line 971)
    // if (!empty($query_params['rest_route'])) == false (line 975)
    // if (!empty($route)) == true (line 982)

    $actual = $this->wP_REST_Request->from_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom_url8()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($bits['query'])) == true (line 966)
    // if (\get_option('permalink_structure') && 0 === \strpos($url, $api_root)) == false (line 971)
    // if (!empty($query_params['rest_route'])) == true (line 975)
    // if (!empty($route)) == false (line 982)

    $actual = $this->wP_REST_Request->from_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom_url9()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($bits['query'])) == true (line 966)
    // if (\get_option('permalink_structure') && 0 === \strpos($url, $api_root)) == false (line 971)
    // if (!empty($query_params['rest_route'])) == true (line 975)
    // if (!empty($route)) == true (line 982)

    $actual = $this->wP_REST_Request->from_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom_url10()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($bits['query'])) == true (line 966)
    // if (\get_option('permalink_structure') && 0 === \strpos($url, $api_root)) == true (line 971)
    // if (!empty($route)) == false (line 982)

    $actual = $this->wP_REST_Request->from_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom_url11()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($bits['query'])) == true (line 966)
    // if (\get_option('permalink_structure') && 0 === \strpos($url, $api_root)) == true (line 971)
    // if (!empty($route)) == true (line 982)

    $actual = $this->wP_REST_Request->from_url($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
