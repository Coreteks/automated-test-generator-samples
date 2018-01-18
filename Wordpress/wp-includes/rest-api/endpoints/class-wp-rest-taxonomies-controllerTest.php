<?php

namespace tests;

use Mockery as m;
use WP_REST_Taxonomies_Controller;

class WP_REST_Taxonomies_ControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_REST_Taxonomies_Controller
*/
protected $wP_REST_Taxonomies_Controller;

public function setUp()
{
    parent::setUp();

    $this->wP_REST_Taxonomies_Controller = new \WP_REST_Taxonomies_Controller();
}

public function testRegister_routes0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Taxonomies_Controller->register_routes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == false (line 80)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == true (line 80)
    // if (!empty($request['type'])) == false (line 81)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == true (line 80)
    // if (!empty($request['type'])) == false (line 81)
    // if (!empty($taxonomy->show_in_rest) && \current_user_can($taxonomy->cap->manage_terms)) == false (line 87)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check3()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == true (line 80)
    // if (!empty($request['type'])) == false (line 81)
    // if (!empty($taxonomy->show_in_rest) && \current_user_can($taxonomy->cap->manage_terms)) == true (line 87)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check4()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == true (line 80)
    // if (!empty($request['type'])) == true (line 81)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check5()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == true (line 80)
    // if (!empty($request['type'])) == true (line 81)
    // if (!empty($taxonomy->show_in_rest) && \current_user_can($taxonomy->cap->manage_terms)) == false (line 87)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items_permissions_check6()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('edit' === $request['context']) == true (line 80)
    // if (!empty($request['type'])) == true (line 81)
    // if (!empty($taxonomy->show_in_rest) && \current_user_can($taxonomy->cap->manage_terms)) == true (line 87)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($registered['type']) && !empty($request['type'])) == false (line 109)
    // if (empty($data)) == false (line 124)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($registered['type']) && !empty($request['type'])) == false (line 109)
    // if (empty($data)) == true (line 124)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($registered['type']) && !empty($request['type'])) == false (line 109)
    // if (empty($value->show_in_rest) || 'edit' === $request['context'] && !\current_user_can($value->cap->manage_terms)) == false (line 116)
    // if (empty($data)) == false (line 124)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items3()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($registered['type']) && !empty($request['type'])) == false (line 109)
    // if (empty($value->show_in_rest) || 'edit' === $request['context'] && !\current_user_can($value->cap->manage_terms)) == false (line 116)
    // if (empty($data)) == true (line 124)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items4()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($registered['type']) && !empty($request['type'])) == false (line 109)
    // if (empty($value->show_in_rest) || 'edit' === $request['context'] && !\current_user_can($value->cap->manage_terms)) == true (line 116)
    // if (empty($data)) == false (line 124)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items5()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($registered['type']) && !empty($request['type'])) == false (line 109)
    // if (empty($value->show_in_rest) || 'edit' === $request['context'] && !\current_user_can($value->cap->manage_terms)) == true (line 116)
    // if (empty($data)) == true (line 124)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items6()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($registered['type']) && !empty($request['type'])) == true (line 109)
    // if (empty($data)) == false (line 124)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items7()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($registered['type']) && !empty($request['type'])) == true (line 109)
    // if (empty($data)) == true (line 124)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items8()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($registered['type']) && !empty($request['type'])) == true (line 109)
    // if (empty($value->show_in_rest) || 'edit' === $request['context'] && !\current_user_can($value->cap->manage_terms)) == false (line 116)
    // if (empty($data)) == false (line 124)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items9()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($registered['type']) && !empty($request['type'])) == true (line 109)
    // if (empty($value->show_in_rest) || 'edit' === $request['context'] && !\current_user_can($value->cap->manage_terms)) == false (line 116)
    // if (empty($data)) == true (line 124)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items10()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($registered['type']) && !empty($request['type'])) == true (line 109)
    // if (empty($value->show_in_rest) || 'edit' === $request['context'] && !\current_user_can($value->cap->manage_terms)) == true (line 116)
    // if (empty($data)) == false (line 124)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_items11()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($registered['type']) && !empty($request['type'])) == true (line 109)
    // if (empty($value->show_in_rest) || 'edit' === $request['context'] && !\current_user_can($value->cap->manage_terms)) == true (line 116)
    // if (empty($data)) == true (line 124)

    $actual = $this->wP_REST_Taxonomies_Controller->get_items($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_permissions_check0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tax_obj) == false (line 144)

    $actual = $this->wP_REST_Taxonomies_Controller->get_item_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_permissions_check1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tax_obj) == true (line 144)
    // if (empty($tax_obj->show_in_rest)) == false (line 145)
    // if ('edit' === $request['context'] && !\current_user_can($tax_obj->cap->manage_terms)) == false (line 148)

    $actual = $this->wP_REST_Taxonomies_Controller->get_item_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_permissions_check2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tax_obj) == true (line 144)
    // if (empty($tax_obj->show_in_rest)) == false (line 145)
    // if ('edit' === $request['context'] && !\current_user_can($tax_obj->cap->manage_terms)) == true (line 148)

    $actual = $this->wP_REST_Taxonomies_Controller->get_item_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_permissions_check3()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tax_obj) == true (line 144)
    // if (empty($tax_obj->show_in_rest)) == true (line 145)

    $actual = $this->wP_REST_Taxonomies_Controller->get_item_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($tax_obj)) == false (line 166)

    $actual = $this->wP_REST_Taxonomies_Controller->get_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($tax_obj)) == true (line 166)

    $actual = $this->wP_REST_Taxonomies_Controller->get_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response0()
{
    $taxonomy = m::mock('UntypedParameter_taxonomy_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Taxonomies_Controller->prepare_item_for_response($taxonomy, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_schema0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Taxonomies_Controller->get_item_schema();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_collection_params0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Taxonomies_Controller->get_collection_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
