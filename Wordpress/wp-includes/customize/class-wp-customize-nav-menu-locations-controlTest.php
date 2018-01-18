<?php

namespace tests;

use Mockery as m;
use WP_Customize_Nav_Menu_Locations_Control;

class WP_Customize_Nav_Menu_Locations_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Nav_Menu_Locations_Control
*/
protected $wP_Customize_Nav_Menu_Locations_Control;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Nav_Menu_Locations_Control = new \WP_Customize_Nav_Menu_Locations_Control();
}

public function testRender_content0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Nav_Menu_Locations_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent_template0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('menus')) == false (line 38)

    $actual = $this->wP_Customize_Nav_Menu_Locations_Control->content_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent_template1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('menus')) == true (line 38)

    $actual = $this->wP_Customize_Nav_Menu_Locations_Control->content_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent_template2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_theme_supports('menus')) == true (line 38)

    $actual = $this->wP_Customize_Nav_Menu_Locations_Control->content_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
