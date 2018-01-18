<?php

namespace tests;

use Mockery as m;
use WP_Customize_Nav_Menus_Panel;

class WP_Customize_Nav_Menus_PanelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Nav_Menus_Panel
*/
protected $wP_Customize_Nav_Menus_Panel;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Nav_Menus_Panel = new \WP_Customize_Nav_Menus_Panel();
}

public function testRender_screen_options0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Nav_Menus_Panel->render_screen_options();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWp_nav_menu_manage_columns0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Nav_Menus_Panel->wp_nav_menu_manage_columns();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
