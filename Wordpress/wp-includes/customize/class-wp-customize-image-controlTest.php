<?php

namespace tests;

use Mockery as m;
use WP_Customize_Image_Control;

class WP_Customize_Image_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Image_Control
*/
protected $wP_Customize_Image_Control;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Image_Control = new \WP_Customize_Image_Control();
}

public function testPrepare_control0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Image_Control->prepare_control();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_tab0()
{
    $id = m::mock('UntypedParameter_id_');
    $label = m::mock('UntypedParameter_label_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Image_Control->add_tab($id, $label, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_tab0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Image_Control->remove_tab($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrint_tab_image0()
{
    $url = m::mock('UntypedParameter_url_');
    $thumbnail_url = m::mock('UntypedParameter_thumbnail_url_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Image_Control->print_tab_image($url, $thumbnail_url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
