<?php

namespace tests;

use Mockery as m;
use WP_REST_Settings_Controller;

class WP_REST_Settings_ControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_REST_Settings_Controller
*/
protected $wP_REST_Settings_Controller;

public function setUp()
{
    parent::setUp();

    $this->wP_REST_Settings_Controller = new \WP_REST_Settings_Controller();
}

public function testRegister_routes0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Settings_Controller->register_routes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_permissions_check0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Settings_Controller->get_item_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Settings_Controller->get_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($response[$name])) == false (line 99)

    $actual = $this->wP_REST_Settings_Controller->get_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($response[$name])) == true (line 99)

    $actual = $this->wP_REST_Settings_Controller->get_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_item0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Settings_Controller->update_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_item1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\array_key_exists($name, $params)) == false (line 147)
    // if ($updated) == false (line 167)
    // if (\is_null($request[$name])) == false (line 176)

    $actual = $this->wP_REST_Settings_Controller->update_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_item2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\array_key_exists($name, $params)) == false (line 147)
    // if ($updated) == false (line 167)
    // if (\is_null($request[$name])) == true (line 176)
    // if (\is_wp_error(\rest_validate_value_from_schema(\get_option($args['option_name'], \false), $args['schema']))) == false (line 188)

    $actual = $this->wP_REST_Settings_Controller->update_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_item3()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\array_key_exists($name, $params)) == false (line 147)
    // if ($updated) == false (line 167)
    // if (\is_null($request[$name])) == true (line 176)
    // if (\is_wp_error(\rest_validate_value_from_schema(\get_option($args['option_name'], \false), $args['schema']))) == true (line 188)

    $actual = $this->wP_REST_Settings_Controller->update_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_item4()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\array_key_exists($name, $params)) == false (line 147)
    // if ($updated) == true (line 167)

    $actual = $this->wP_REST_Settings_Controller->update_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_item5()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\array_key_exists($name, $params)) == true (line 147)

    $actual = $this->wP_REST_Settings_Controller->update_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_schema0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Settings_Controller->get_item_schema();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_schema1()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Settings_Controller->get_item_schema();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_callback0()
{
    $value = m::mock('UntypedParameter_value_');
    $request = m::mock('UntypedParameter_request_');
    $param = m::mock('UntypedParameter_param_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($value)) == false (line 303)

    $actual = $this->wP_REST_Settings_Controller->sanitize_callback($value, $request, $param);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize_callback1()
{
    $value = m::mock('UntypedParameter_value_');
    $request = m::mock('UntypedParameter_request_');
    $param = m::mock('UntypedParameter_param_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($value)) == true (line 303)

    $actual = $this->wP_REST_Settings_Controller->sanitize_callback($value, $request, $param);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
