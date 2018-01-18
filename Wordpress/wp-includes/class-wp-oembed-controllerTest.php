<?php

namespace tests;

use Mockery as m;
use WP_oEmbed_Controller;

class WP_oEmbed_ControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_oEmbed_Controller
*/
protected $wP_oEmbed_Controller;

public function setUp()
{
    parent::setUp();

    $this->wP_oEmbed_Controller = new \WP_oEmbed_Controller();
}

public function testRegister_routes0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_oEmbed_Controller->register_routes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == false (line 126)

    $actual = $this->wP_oEmbed_Controller->get_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_item1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 126)

    $actual = $this->wP_oEmbed_Controller->get_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_proxy_item_permissions_check0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\current_user_can('edit_posts')) == false (line 141)

    $actual = $this->wP_oEmbed_Controller->get_proxy_item_permissions_check();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_proxy_item_permissions_check1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\current_user_can('edit_posts')) == true (line 141)

    $actual = $this->wP_oEmbed_Controller->get_proxy_item_permissions_check();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_proxy_item0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($data)) == false (line 165)
    // if (isset($args['maxwidth'])) == false (line 173)
    // if (isset($args['maxheight'])) == false (line 176)
    // if (\false === $data) == false (line 182)

    $actual = $this->wP_oEmbed_Controller->get_proxy_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_proxy_item1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($data)) == false (line 165)
    // if (isset($args['maxwidth'])) == false (line 173)
    // if (isset($args['maxheight'])) == false (line 176)
    // if (\false === $data) == true (line 182)

    $actual = $this->wP_oEmbed_Controller->get_proxy_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_proxy_item2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($data)) == false (line 165)
    // if (isset($args['maxwidth'])) == false (line 173)
    // if (isset($args['maxheight'])) == true (line 176)
    // if (\false === $data) == false (line 182)

    $actual = $this->wP_oEmbed_Controller->get_proxy_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_proxy_item3()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($data)) == false (line 165)
    // if (isset($args['maxwidth'])) == false (line 173)
    // if (isset($args['maxheight'])) == true (line 176)
    // if (\false === $data) == true (line 182)

    $actual = $this->wP_oEmbed_Controller->get_proxy_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_proxy_item4()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($data)) == false (line 165)
    // if (isset($args['maxwidth'])) == true (line 173)
    // if (isset($args['maxheight'])) == false (line 176)
    // if (\false === $data) == false (line 182)

    $actual = $this->wP_oEmbed_Controller->get_proxy_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_proxy_item5()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($data)) == false (line 165)
    // if (isset($args['maxwidth'])) == true (line 173)
    // if (isset($args['maxheight'])) == false (line 176)
    // if (\false === $data) == true (line 182)

    $actual = $this->wP_oEmbed_Controller->get_proxy_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_proxy_item6()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($data)) == false (line 165)
    // if (isset($args['maxwidth'])) == true (line 173)
    // if (isset($args['maxheight'])) == true (line 176)
    // if (\false === $data) == false (line 182)

    $actual = $this->wP_oEmbed_Controller->get_proxy_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_proxy_item7()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($data)) == false (line 165)
    // if (isset($args['maxwidth'])) == true (line 173)
    // if (isset($args['maxheight'])) == true (line 176)
    // if (\false === $data) == true (line 182)

    $actual = $this->wP_oEmbed_Controller->get_proxy_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_proxy_item8()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($data)) == true (line 165)

    $actual = $this->wP_oEmbed_Controller->get_proxy_item($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
