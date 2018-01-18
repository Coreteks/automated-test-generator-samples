<?php

namespace tests;

use Mockery as m;
use WP_REST_Post_Statuses_Controller;

class WP_REST_Post_Statuses_ControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_REST_Post_Statuses_Controller
*/
protected $wP_REST_Post_Statuses_Controller;

public function setUp()
{
    parent::setUp();

    $this->wP_REST_Post_Statuses_Controller = new \WP_REST_Post_Statuses_Controller();
}

public function testRegister_routes0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Post_Statuses_Controller->register_routes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == false (line 80)

    $actual = $this->wP_REST_Post_Statuses_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == true (line 80)

    $actual = $this->wP_REST_Post_Statuses_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == true (line 80)
    // if (\current_user_can($type->cap->edit_posts)) == false (line 84)

    $actual = $this->wP_REST_Post_Statuses_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check3()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == true (line 80)
    // if (\current_user_can($type->cap->edit_posts)) == true (line 84)

    $actual = $this->wP_REST_Post_Statuses_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Post_Statuses_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$ret) == false (line 110)

    $actual = $this->wP_REST_Post_Statuses_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$ret) == true (line 110)

    $actual = $this->wP_REST_Post_Statuses_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_permissions_check0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($status)) == false (line 132)
    // if (!$check) == false (line 138)

    $actual = $this->wP_REST_Post_Statuses_Controller->get_item_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_permissions_check1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($status)) == false (line 132)
    // if (!$check) == true (line 138)

    $actual = $this->wP_REST_Post_Statuses_Controller->get_item_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_permissions_check2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($status)) == true (line 132)

    $actual = $this->wP_REST_Post_Statuses_Controller->get_item_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($obj)) == false (line 182)

    $actual = $this->wP_REST_Post_Statuses_Controller->get_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($obj)) == true (line 182)

    $actual = $this->wP_REST_Post_Statuses_Controller->get_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response0()
{
    $status = m::mock('UntypedParameter_status_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('publish' === $status->name) == false (line 218)

    $actual = $this->wP_REST_Post_Statuses_Controller->prepare_item_for_response($status, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response1()
{
    $status = m::mock('UntypedParameter_status_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('publish' === $status->name) == true (line 218)

    $actual = $this->wP_REST_Post_Statuses_Controller->prepare_item_for_response($status, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_schema0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Post_Statuses_Controller->get_item_schema();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_collection_params0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Post_Statuses_Controller->get_collection_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
