<?php

namespace tests;

use Mockery as m;
use WP_REST_Post_Types_Controller;

class WP_REST_Post_Types_ControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_REST_Post_Types_Controller
*/
protected $wP_REST_Post_Types_Controller;

public function setUp()
{
    parent::setUp();

    $this->wP_REST_Post_Types_Controller = new \WP_REST_Post_Types_Controller();
}

public function testRegister_routes0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Post_Types_Controller->register_routes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == false (line 79)

    $actual = $this->wP_REST_Post_Types_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == true (line 79)

    $actual = $this->wP_REST_Post_Types_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == true (line 79)
    // if (!empty($post_type->show_in_rest) && \current_user_can($post_type->cap->edit_posts)) == false (line 81)

    $actual = $this->wP_REST_Post_Types_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check3()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == true (line 79)
    // if (!empty($post_type->show_in_rest) && \current_user_can($post_type->cap->edit_posts)) == true (line 81)

    $actual = $this->wP_REST_Post_Types_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Post_Types_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($obj->show_in_rest) || 'edit' === $request['context'] && !\current_user_can($obj->cap->edit_posts)) == false (line 104)

    $actual = $this->wP_REST_Post_Types_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($obj->show_in_rest) || 'edit' === $request['context'] && !\current_user_can($obj->cap->edit_posts)) == true (line 104)

    $actual = $this->wP_REST_Post_Types_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($obj)) == false (line 126)
    // if (empty($obj->show_in_rest)) == false (line 130)
    // if ('edit' === $request['context'] && !\current_user_can($obj->cap->edit_posts)) == false (line 134)

    $actual = $this->wP_REST_Post_Types_Controller->get_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($obj)) == false (line 126)
    // if (empty($obj->show_in_rest)) == false (line 130)
    // if ('edit' === $request['context'] && !\current_user_can($obj->cap->edit_posts)) == true (line 134)

    $actual = $this->wP_REST_Post_Types_Controller->get_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($obj)) == false (line 126)
    // if (empty($obj->show_in_rest)) == true (line 130)

    $actual = $this->wP_REST_Post_Types_Controller->get_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item3()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($obj)) == true (line 126)

    $actual = $this->wP_REST_Post_Types_Controller->get_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response0()
{
    $post_type = m::mock('UntypedParameter_post_type_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Post_Types_Controller->prepare_item_for_response($post_type, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_schema0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Post_Types_Controller->get_item_schema();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_collection_params0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Post_Types_Controller->get_collection_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
