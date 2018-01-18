<?php

namespace tests;

use Mockery as m;
use WP_REST_Attachments_Controller;

class WP_REST_Attachments_ControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_REST_Attachments_Controller
*/
protected $wP_REST_Attachments_Controller;

public function setUp()
{
    parent::setUp();

    $this->wP_REST_Attachments_Controller = new \WP_REST_Attachments_Controller();
}

public function testCreate_item_permissions_check0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$ret || \is_wp_error($ret)) == false (line 68)
    // if (!\current_user_can('upload_files')) == false (line 72)
    // if (!empty($request['post'])) == false (line 77)

    $actual = $this->wP_REST_Attachments_Controller->create_item_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item_permissions_check1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$ret || \is_wp_error($ret)) == false (line 68)
    // if (!\current_user_can('upload_files')) == false (line 72)
    // if (!empty($request['post'])) == true (line 77)
    // if (!\current_user_can($post_parent_type->cap->edit_post, $request['post'])) == false (line 81)

    $actual = $this->wP_REST_Attachments_Controller->create_item_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item_permissions_check2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$ret || \is_wp_error($ret)) == false (line 68)
    // if (!\current_user_can('upload_files')) == false (line 72)
    // if (!empty($request['post'])) == true (line 77)
    // if (!\current_user_can($post_parent_type->cap->edit_post, $request['post'])) == true (line 81)

    $actual = $this->wP_REST_Attachments_Controller->create_item_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item_permissions_check3()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$ret || \is_wp_error($ret)) == false (line 68)
    // if (!\current_user_can('upload_files')) == true (line 72)

    $actual = $this->wP_REST_Attachments_Controller->create_item_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item_permissions_check4()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$ret || \is_wp_error($ret)) == true (line 68)

    $actual = $this->wP_REST_Attachments_Controller->create_item_permissions_check($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item3()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item4()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item5()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item6()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item7()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item8()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item9()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item10()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item11()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item12()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item13()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item14()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item15()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item16()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item17()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item18()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item19()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item20()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item21()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item22()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item23()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item24()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item25()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item26()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item27()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item28()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item29()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item30()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item31()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item32()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item33()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item34()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item35()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item36()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item37()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item38()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item39()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item40()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item41()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item42()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item43()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item44()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item45()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item46()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item47()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item48()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item49()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item50()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item51()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item52()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item53()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item54()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item55()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item56()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item57()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item58()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item59()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item60()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == false (line 107)
    // if (\is_wp_error($file)) == true (line 113)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item61()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item62()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item63()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item64()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item65()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item66()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item67()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item68()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item69()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item70()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item71()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item72()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == false (line 128)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item73()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item74()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item75()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item76()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item77()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item78()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item79()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item80()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item81()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item82()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item83()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item84()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item85()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item86()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item87()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item88()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item89()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item90()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item91()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item92()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item93()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item94()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item95()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item96()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == false (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item97()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item98()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item99()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item100()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item101()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item102()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item103()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item104()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item105()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item106()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item107()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item108()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == false (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item109()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item110()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item111()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item112()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item113()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item114()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == false (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item115()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item116()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == false (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item117()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == false (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item118()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == false (line 149)
    // if (isset($request['alt_text'])) == true (line 177)
    // if (\is_wp_error($fields_update)) == true (line 183)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item119()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == false (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item120()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == false (line 113)
    // if (!empty($image_meta)) == true (line 128)
    // if (empty($request['title']) && \trim($image_meta['title']) && !\is_numeric(\sanitize_title($image_meta['title']))) == true (line 129)
    // if (empty($request['caption']) && \trim($image_meta['caption'])) == true (line 133)
    // if (empty($attachment->post_title)) == true (line 143)
    // if (\is_wp_error($id)) == true (line 149)
    // if ('db_update_error' === $id->get_error_code()) == true (line 150)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item121()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 99)
    // if (!empty($files)) == true (line 107)
    // if (\is_wp_error($file)) == true (line 113)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate_item122()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == true (line 99)

    $actual = $this->wP_REST_Attachments_Controller->create_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_item0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 205)
    // if (\is_wp_error($response)) == false (line 211)
    // if (isset($request['alt_text'])) == false (line 218)
    // if (\is_wp_error($fields_update)) == false (line 229)

    $actual = $this->wP_REST_Attachments_Controller->update_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_item1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 205)
    // if (\is_wp_error($response)) == false (line 211)
    // if (isset($request['alt_text'])) == false (line 218)
    // if (\is_wp_error($fields_update)) == true (line 229)

    $actual = $this->wP_REST_Attachments_Controller->update_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_item2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 205)
    // if (\is_wp_error($response)) == false (line 211)
    // if (isset($request['alt_text'])) == true (line 218)
    // if (\is_wp_error($fields_update)) == false (line 229)

    $actual = $this->wP_REST_Attachments_Controller->update_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_item3()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 205)
    // if (\is_wp_error($response)) == false (line 211)
    // if (isset($request['alt_text'])) == true (line 218)
    // if (\is_wp_error($fields_update)) == true (line 229)

    $actual = $this->wP_REST_Attachments_Controller->update_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_item4()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == false (line 205)
    // if (\is_wp_error($response)) == true (line 211)

    $actual = $this->wP_REST_Attachments_Controller->update_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_item5()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($request['post']) && \in_array(\get_post_type($request['post']), array('revision', 'attachment'), \true)) == true (line 205)

    $actual = $this->wP_REST_Attachments_Controller->update_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response0()
{
    $post = m::mock('UntypedParameter_post_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($data['media_details'])) == false (line 310)
    // if (!empty($data['media_details']['sizes'])) == false (line 312)

    $actual = $this->wP_REST_Attachments_Controller->prepare_item_for_response($post, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response1()
{
    $post = m::mock('UntypedParameter_post_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($data['media_details'])) == false (line 310)
    // if (!empty($data['media_details']['sizes'])) == true (line 312)
    // if (!empty($full_src)) == false (line 332)

    $actual = $this->wP_REST_Attachments_Controller->prepare_item_for_response($post, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response2()
{
    $post = m::mock('UntypedParameter_post_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($data['media_details'])) == false (line 310)
    // if (!empty($data['media_details']['sizes'])) == true (line 312)
    // if (!empty($full_src)) == true (line 332)

    $actual = $this->wP_REST_Attachments_Controller->prepare_item_for_response($post, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response3()
{
    $post = m::mock('UntypedParameter_post_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($data['media_details'])) == false (line 310)
    // if (!empty($data['media_details']['sizes'])) == true (line 312)
    // if (isset($size_data['mime-type'])) == false (line 316)
    // if (!$image_src) == false (line 323)
    // if (!empty($full_src)) == false (line 332)

    $actual = $this->wP_REST_Attachments_Controller->prepare_item_for_response($post, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response4()
{
    $post = m::mock('UntypedParameter_post_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($data['media_details'])) == false (line 310)
    // if (!empty($data['media_details']['sizes'])) == true (line 312)
    // if (isset($size_data['mime-type'])) == false (line 316)
    // if (!$image_src) == false (line 323)
    // if (!empty($full_src)) == true (line 332)

    $actual = $this->wP_REST_Attachments_Controller->prepare_item_for_response($post, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response5()
{
    $post = m::mock('UntypedParameter_post_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($data['media_details'])) == false (line 310)
    // if (!empty($data['media_details']['sizes'])) == true (line 312)
    // if (isset($size_data['mime-type'])) == false (line 316)
    // if (!$image_src) == true (line 323)
    // if (!empty($full_src)) == false (line 332)

    $actual = $this->wP_REST_Attachments_Controller->prepare_item_for_response($post, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response6()
{
    $post = m::mock('UntypedParameter_post_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($data['media_details'])) == false (line 310)
    // if (!empty($data['media_details']['sizes'])) == true (line 312)
    // if (isset($size_data['mime-type'])) == false (line 316)
    // if (!$image_src) == true (line 323)
    // if (!empty($full_src)) == true (line 332)

    $actual = $this->wP_REST_Attachments_Controller->prepare_item_for_response($post, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response7()
{
    $post = m::mock('UntypedParameter_post_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($data['media_details'])) == false (line 310)
    // if (!empty($data['media_details']['sizes'])) == true (line 312)
    // if (isset($size_data['mime-type'])) == true (line 316)
    // if (!$image_src) == false (line 323)
    // if (!empty($full_src)) == false (line 332)

    $actual = $this->wP_REST_Attachments_Controller->prepare_item_for_response($post, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response8()
{
    $post = m::mock('UntypedParameter_post_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($data['media_details'])) == false (line 310)
    // if (!empty($data['media_details']['sizes'])) == true (line 312)
    // if (isset($size_data['mime-type'])) == true (line 316)
    // if (!$image_src) == false (line 323)
    // if (!empty($full_src)) == true (line 332)

    $actual = $this->wP_REST_Attachments_Controller->prepare_item_for_response($post, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response9()
{
    $post = m::mock('UntypedParameter_post_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($data['media_details'])) == false (line 310)
    // if (!empty($data['media_details']['sizes'])) == true (line 312)
    // if (isset($size_data['mime-type'])) == true (line 316)
    // if (!$image_src) == true (line 323)
    // if (!empty($full_src)) == false (line 332)

    $actual = $this->wP_REST_Attachments_Controller->prepare_item_for_response($post, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response10()
{
    $post = m::mock('UntypedParameter_post_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($data['media_details'])) == false (line 310)
    // if (!empty($data['media_details']['sizes'])) == true (line 312)
    // if (isset($size_data['mime-type'])) == true (line 316)
    // if (!$image_src) == true (line 323)
    // if (!empty($full_src)) == true (line 332)

    $actual = $this->wP_REST_Attachments_Controller->prepare_item_for_response($post, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_item_for_response11()
{
    $post = m::mock('UntypedParameter_post_');
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($data['media_details'])) == true (line 310)

    $actual = $this->wP_REST_Attachments_Controller->prepare_item_for_response($post, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item_schema0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Attachments_Controller->get_item_schema();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_filename_from_disposition0()
{
    $disposition_header = m::mock('UntypedParameter_disposition_header_');

    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Attachments_Controller->get_filename_from_disposition($disposition_header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_filename_from_disposition1()
{
    $disposition_header = m::mock('UntypedParameter_disposition_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($value, ';') === \false) == false (line 590)
    // if (empty($attributes['filename'])) == false (line 609)
    // if (\substr($filename, 0, 1) === '"' && \substr($filename, -1, 1) === '"') == false (line 616)

    $actual = $this->wP_REST_Attachments_Controller->get_filename_from_disposition($disposition_header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_filename_from_disposition2()
{
    $disposition_header = m::mock('UntypedParameter_disposition_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($value, ';') === \false) == false (line 590)
    // if (empty($attributes['filename'])) == false (line 609)
    // if (\substr($filename, 0, 1) === '"' && \substr($filename, -1, 1) === '"') == true (line 616)

    $actual = $this->wP_REST_Attachments_Controller->get_filename_from_disposition($disposition_header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_filename_from_disposition3()
{
    $disposition_header = m::mock('UntypedParameter_disposition_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($value, ';') === \false) == false (line 590)
    // if (empty($attributes['filename'])) == true (line 609)

    $actual = $this->wP_REST_Attachments_Controller->get_filename_from_disposition($disposition_header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_filename_from_disposition4()
{
    $disposition_header = m::mock('UntypedParameter_disposition_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($value, ';') === \false) == false (line 590)
    // if (\strpos($part, '=') === \false) == false (line 600)
    // if (empty($attributes['filename'])) == false (line 609)
    // if (\substr($filename, 0, 1) === '"' && \substr($filename, -1, 1) === '"') == false (line 616)

    $actual = $this->wP_REST_Attachments_Controller->get_filename_from_disposition($disposition_header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_filename_from_disposition5()
{
    $disposition_header = m::mock('UntypedParameter_disposition_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($value, ';') === \false) == false (line 590)
    // if (\strpos($part, '=') === \false) == false (line 600)
    // if (empty($attributes['filename'])) == false (line 609)
    // if (\substr($filename, 0, 1) === '"' && \substr($filename, -1, 1) === '"') == true (line 616)

    $actual = $this->wP_REST_Attachments_Controller->get_filename_from_disposition($disposition_header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_filename_from_disposition6()
{
    $disposition_header = m::mock('UntypedParameter_disposition_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($value, ';') === \false) == false (line 590)
    // if (\strpos($part, '=') === \false) == false (line 600)
    // if (empty($attributes['filename'])) == true (line 609)

    $actual = $this->wP_REST_Attachments_Controller->get_filename_from_disposition($disposition_header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_filename_from_disposition7()
{
    $disposition_header = m::mock('UntypedParameter_disposition_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($value, ';') === \false) == false (line 590)
    // if (\strpos($part, '=') === \false) == true (line 600)
    // if (empty($attributes['filename'])) == false (line 609)
    // if (\substr($filename, 0, 1) === '"' && \substr($filename, -1, 1) === '"') == false (line 616)

    $actual = $this->wP_REST_Attachments_Controller->get_filename_from_disposition($disposition_header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_filename_from_disposition8()
{
    $disposition_header = m::mock('UntypedParameter_disposition_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($value, ';') === \false) == false (line 590)
    // if (\strpos($part, '=') === \false) == true (line 600)
    // if (empty($attributes['filename'])) == false (line 609)
    // if (\substr($filename, 0, 1) === '"' && \substr($filename, -1, 1) === '"') == true (line 616)

    $actual = $this->wP_REST_Attachments_Controller->get_filename_from_disposition($disposition_header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_filename_from_disposition9()
{
    $disposition_header = m::mock('UntypedParameter_disposition_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($value, ';') === \false) == false (line 590)
    // if (\strpos($part, '=') === \false) == true (line 600)
    // if (empty($attributes['filename'])) == true (line 609)

    $actual = $this->wP_REST_Attachments_Controller->get_filename_from_disposition($disposition_header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_filename_from_disposition10()
{
    $disposition_header = m::mock('UntypedParameter_disposition_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($value, ';') === \false) == true (line 590)

    $actual = $this->wP_REST_Attachments_Controller->get_filename_from_disposition($disposition_header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_collection_params0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_REST_Attachments_Controller->get_collection_params();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate_user_can_query_private_statuses0()
{
    $value = m::mock('UntypedParameter_value_');
    $request = m::mock('UntypedParameter_request_');
    $parameter = m::mock('UntypedParameter_parameter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('inherit' === $value) == false (line 664)

    $actual = $this->wP_REST_Attachments_Controller->validate_user_can_query_private_statuses($value, $request, $parameter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate_user_can_query_private_statuses1()
{
    $value = m::mock('UntypedParameter_value_');
    $request = m::mock('UntypedParameter_request_');
    $parameter = m::mock('UntypedParameter_parameter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('inherit' === $value) == true (line 664)

    $actual = $this->wP_REST_Attachments_Controller->validate_user_can_query_private_statuses($value, $request, $parameter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
