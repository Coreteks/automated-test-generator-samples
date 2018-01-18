<?php

namespace tests;

use Mockery as m;
use WP_Customize_Header_Image_Control;

class WP_Customize_Header_Image_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_manager = null;
/**
* @var \WP_Customize_Header_Image_Control
*/
protected $wP_Customize_Header_Image_Control;

public function setUp()
{
    parent::setUp();

    $this->_manager = null;
    $this->wP_Customize_Header_Image_Control = new \WP_Customize_Header_Image_Control($this->_manager);
}

public function testEnqueue0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Header_Image_Control->enqueue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_control0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($custom_image_header)) == false (line 79)

    $actual = $this->wP_Customize_Header_Image_Control->prepare_control();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepare_control1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($custom_image_header)) == true (line 79)

    $actual = $this->wP_Customize_Header_Image_Control->prepare_control();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrint_header_image_template0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Header_Image_Control->print_header_image_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_current_image_src0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->get_url)) == false (line 156)

    $actual = $this->wP_Customize_Header_Image_Control->get_current_image_src();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_current_image_src1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->get_url)) == true (line 156)

    $actual = $this->wP_Customize_Header_Image_Control->get_current_image_src();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == false (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == false (line 178)
    // if ($width && $height) == false (line 180)
    // if ($width) == false (line 186)
    // if (\current_user_can('upload_files')) == false (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == false (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == false (line 178)
    // if ($width && $height) == false (line 180)
    // if ($width) == false (line 186)
    // if (\current_user_can('upload_files')) == true (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == false (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == false (line 178)
    // if ($width && $height) == false (line 180)
    // if ($width) == true (line 186)
    // if (\current_user_can('upload_files')) == false (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == false (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == false (line 178)
    // if ($width && $height) == false (line 180)
    // if ($width) == true (line 186)
    // if (\current_user_can('upload_files')) == true (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == false (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == false (line 178)
    // if ($width && $height) == true (line 180)
    // if (\current_user_can('upload_files')) == false (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == false (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == false (line 178)
    // if ($width && $height) == true (line 180)
    // if (\current_user_can('upload_files')) == true (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == false (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == true (line 178)
    // if (\current_user_can('upload_files')) == false (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == false (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == true (line 178)
    // if (\current_user_can('upload_files')) == true (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == true (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == false (line 178)
    // if ($width && $height) == false (line 180)
    // if ($width) == false (line 186)
    // if (\current_user_can('upload_files')) == false (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == true (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == false (line 178)
    // if ($width && $height) == false (line 180)
    // if ($width) == false (line 186)
    // if (\current_user_can('upload_files')) == true (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == true (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == false (line 178)
    // if ($width && $height) == false (line 180)
    // if ($width) == true (line 186)
    // if (\current_user_can('upload_files')) == false (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == true (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == false (line 178)
    // if ($width && $height) == false (line 180)
    // if ($width) == true (line 186)
    // if (\current_user_can('upload_files')) == true (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == true (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == false (line 178)
    // if ($width && $height) == true (line 180)
    // if (\current_user_can('upload_files')) == false (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == true (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == false (line 178)
    // if ($width && $height) == true (line 180)
    // if (\current_user_can('upload_files')) == true (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == true (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == true (line 178)
    // if (\current_user_can('upload_files')) == false (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('custom-header', 'video')) == true (line 171)
    // if (\current_theme_supports('custom-header', 'video')) == true (line 178)
    // if (\current_user_can('upload_files')) == true (line 211)

    $actual = $this->wP_Customize_Header_Image_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
