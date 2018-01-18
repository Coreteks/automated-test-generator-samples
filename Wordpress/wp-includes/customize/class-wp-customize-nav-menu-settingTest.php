<?php

namespace tests;

use Mockery as m;
use WP_Customize_Manager;
use WP_Customize_Nav_Menu_Setting;

class WP_Customize_Nav_Menu_SettingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_manager;
/**
* @var mixed
*/
protected $_id = null;
/**
* @var array
*/
protected $_args = [];
/**
* @var \WP_Customize_Nav_Menu_Setting
*/
protected $wP_Customize_Nav_Menu_Setting;

public function setUp()
{
    parent::setUp();

    $this->_manager = m::mock(\WP_Customize_Manager::class);
    $this->_id = null;
    $this->_args = [];
    $this->wP_Customize_Nav_Menu_Setting = new \WP_Customize_Nav_Menu_Setting($this->_manager, $this->_id, $this->_args);
}

public function testValue0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 159)
    // if ($this->term_id > 0) == false (line 172)
    // if (!\is_array($value)) == false (line 187)

    $actual = $this->wP_Customize_Nav_Menu_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 159)
    // if ($this->term_id > 0) == false (line 172)
    // if (!\is_array($value)) == true (line 187)

    $actual = $this->wP_Customize_Nav_Menu_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 159)
    // if ($this->term_id > 0) == true (line 172)
    // if ($term) == false (line 175)
    // if (!\is_array($value)) == false (line 187)

    $actual = $this->wP_Customize_Nav_Menu_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 159)
    // if ($this->term_id > 0) == true (line 172)
    // if ($term) == false (line 175)
    // if (!\is_array($value)) == true (line 187)

    $actual = $this->wP_Customize_Nav_Menu_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 159)
    // if ($this->term_id > 0) == true (line 172)
    // if ($term) == true (line 175)
    // if (isset($nav_menu_options['auto_add']) && \is_array($nav_menu_options['auto_add'])) == false (line 181)
    // if (!\is_array($value)) == false (line 187)

    $actual = $this->wP_Customize_Nav_Menu_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 159)
    // if ($this->term_id > 0) == true (line 172)
    // if ($term) == true (line 175)
    // if (isset($nav_menu_options['auto_add']) && \is_array($nav_menu_options['auto_add'])) == false (line 181)
    // if (!\is_array($value)) == true (line 187)

    $actual = $this->wP_Customize_Nav_Menu_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 159)
    // if ($this->term_id > 0) == true (line 172)
    // if ($term) == true (line 175)
    // if (isset($nav_menu_options['auto_add']) && \is_array($nav_menu_options['auto_add'])) == true (line 181)
    // if (!\is_array($value)) == false (line 187)

    $actual = $this->wP_Customize_Nav_Menu_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 159)
    // if ($this->term_id > 0) == true (line 172)
    // if ($term) == true (line 175)
    // if (isset($nav_menu_options['auto_add']) && \is_array($nav_menu_options['auto_add'])) == true (line 181)
    // if (!\is_array($value)) == true (line 187)

    $actual = $this->wP_Customize_Nav_Menu_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == true (line 159)
    // if ($undefined === $post_value) == false (line 163)

    $actual = $this->wP_Customize_Nav_Menu_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == true (line 159)
    // if ($undefined === $post_value) == true (line 163)

    $actual = $this->wP_Customize_Nav_Menu_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == false (line 205)
    // if (!$is_placeholder && !$is_dirty) == false (line 212)

    $actual = $this->wP_Customize_Nav_Menu_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == false (line 205)
    // if (!$is_placeholder && !$is_dirty) == true (line 212)

    $actual = $this->wP_Customize_Nav_Menu_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == true (line 205)

    $actual = $this->wP_Customize_Nav_Menu_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus0()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ($is_delete) == false (line 256)
    // if (!$is_delete && !empty($args['orderby'])) == false (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus1()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ($is_delete) == false (line 256)
    // if (!$is_delete && !empty($args['orderby'])) == true (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus2()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ($is_delete) == true (line 256)
    // if (-1 !== $index) == false (line 258)
    // if (!$is_delete && !empty($args['orderby'])) == false (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus3()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ($is_delete) == true (line 256)
    // if (-1 !== $index) == false (line 258)
    // if (!$is_delete && !empty($args['orderby'])) == true (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus4()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ($is_delete) == true (line 256)
    // if (-1 !== $index) == true (line 258)
    // if (!$is_delete && !empty($args['orderby'])) == false (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus5()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ($is_delete) == true (line 256)
    // if (-1 !== $index) == true (line 258)
    // if (!$is_delete && !empty($args['orderby'])) == true (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus6()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ((int) $this->term_id === (int) $menu->term_id || (int) $this->previous_term_id === (int) $menu->term_id) == false (line 250)
    // if ($is_delete) == false (line 256)
    // if (!$is_delete && !empty($args['orderby'])) == false (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus7()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ((int) $this->term_id === (int) $menu->term_id || (int) $this->previous_term_id === (int) $menu->term_id) == false (line 250)
    // if ($is_delete) == false (line 256)
    // if (!$is_delete && !empty($args['orderby'])) == true (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus8()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ((int) $this->term_id === (int) $menu->term_id || (int) $this->previous_term_id === (int) $menu->term_id) == false (line 250)
    // if ($is_delete) == true (line 256)
    // if (-1 !== $index) == false (line 258)
    // if (!$is_delete && !empty($args['orderby'])) == false (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus9()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ((int) $this->term_id === (int) $menu->term_id || (int) $this->previous_term_id === (int) $menu->term_id) == false (line 250)
    // if ($is_delete) == true (line 256)
    // if (-1 !== $index) == false (line 258)
    // if (!$is_delete && !empty($args['orderby'])) == true (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus10()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ((int) $this->term_id === (int) $menu->term_id || (int) $this->previous_term_id === (int) $menu->term_id) == false (line 250)
    // if ($is_delete) == true (line 256)
    // if (-1 !== $index) == true (line 258)
    // if (!$is_delete && !empty($args['orderby'])) == false (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus11()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ((int) $this->term_id === (int) $menu->term_id || (int) $this->previous_term_id === (int) $menu->term_id) == false (line 250)
    // if ($is_delete) == true (line 256)
    // if (-1 !== $index) == true (line 258)
    // if (!$is_delete && !empty($args['orderby'])) == true (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus12()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ((int) $this->term_id === (int) $menu->term_id || (int) $this->previous_term_id === (int) $menu->term_id) == true (line 250)
    // if ($is_delete) == false (line 256)
    // if (!$is_delete && !empty($args['orderby'])) == false (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus13()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ((int) $this->term_id === (int) $menu->term_id || (int) $this->previous_term_id === (int) $menu->term_id) == true (line 250)
    // if ($is_delete) == false (line 256)
    // if (!$is_delete && !empty($args['orderby'])) == true (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus14()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ((int) $this->term_id === (int) $menu->term_id || (int) $this->previous_term_id === (int) $menu->term_id) == true (line 250)
    // if ($is_delete) == true (line 256)
    // if (-1 !== $index) == false (line 258)
    // if (!$is_delete && !empty($args['orderby'])) == false (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus15()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ((int) $this->term_id === (int) $menu->term_id || (int) $this->previous_term_id === (int) $menu->term_id) == true (line 250)
    // if ($is_delete) == true (line 256)
    // if (-1 !== $index) == false (line 258)
    // if (!$is_delete && !empty($args['orderby'])) == true (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus16()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ((int) $this->term_id === (int) $menu->term_id || (int) $this->previous_term_id === (int) $menu->term_id) == true (line 250)
    // if ($is_delete) == true (line 256)
    // if (-1 !== $index) == true (line 258)
    // if (!$is_delete && !empty($args['orderby'])) == false (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus17()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == false (line 240)
    // if ((int) $this->term_id === (int) $menu->term_id || (int) $this->previous_term_id === (int) $menu->term_id) == true (line 250)
    // if ($is_delete) == true (line 256)
    // if (-1 !== $index) == true (line 258)
    // if (!$is_delete && !empty($args['orderby'])) == true (line 279)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menus18()
{
    $menus = m::mock('UntypedParameter_menus_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\get_current_blog_id() !== $this->_previewed_blog_id) == true (line 240)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menus($menus, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_object0()
{
    $menu_obj = m::mock('UntypedParameter_menu_obj_');
    $menu_id = m::mock('UntypedParameter_menu_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$ok) == false (line 344)
    // if (\false === $setting_value) == false (line 351)
    // if (\null === $setting_value) == false (line 356)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menu_object($menu_obj, $menu_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_object1()
{
    $menu_obj = m::mock('UntypedParameter_menu_obj_');
    $menu_id = m::mock('UntypedParameter_menu_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$ok) == false (line 344)
    // if (\false === $setting_value) == false (line 351)
    // if (\null === $setting_value) == true (line 356)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menu_object($menu_obj, $menu_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_object2()
{
    $menu_obj = m::mock('UntypedParameter_menu_obj_');
    $menu_id = m::mock('UntypedParameter_menu_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$ok) == false (line 344)
    // if (\false === $setting_value) == true (line 351)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menu_object($menu_obj, $menu_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_object3()
{
    $menu_obj = m::mock('UntypedParameter_menu_obj_');
    $menu_id = m::mock('UntypedParameter_menu_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$ok) == true (line 344)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_wp_get_nav_menu_object($menu_obj, $menu_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_nav_menu_options0()
{
    $nav_menu_options = m::mock('UntypedParameter_nav_menu_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_previewed_blog_id !== \get_current_blog_id()) == false (line 384)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_nav_menu_options($nav_menu_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_nav_menu_options1()
{
    $nav_menu_options = m::mock('UntypedParameter_nav_menu_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_previewed_blog_id !== \get_current_blog_id()) == true (line 384)

    $actual = $this->wP_Customize_Nav_Menu_Setting->filter_nav_menu_options($nav_menu_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $value) == false (line 412)
    // if (!\is_array($value)) == false (line 417)
    // if ('' === $value['name']) == false (line 435)

    $actual = $this->wP_Customize_Nav_Menu_Setting->sanitize($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $value) == false (line 412)
    // if (!\is_array($value)) == false (line 417)
    // if ('' === $value['name']) == true (line 435)

    $actual = $this->wP_Customize_Nav_Menu_Setting->sanitize($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize2()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $value) == false (line 412)
    // if (!\is_array($value)) == true (line 417)

    $actual = $this->wP_Customize_Nav_Menu_Setting->sanitize($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize3()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $value) == true (line 412)

    $actual = $this->wP_Customize_Nav_Menu_Setting->sanitize($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAmend_customize_save_response0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['nav_menu_updates'])) == false (line 623)
    // if (!isset($data['widget_nav_menu_updates'])) == false (line 626)

    $actual = $this->wP_Customize_Nav_Menu_Setting->amend_customize_save_response($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAmend_customize_save_response1()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['nav_menu_updates'])) == false (line 623)
    // if (!isset($data['widget_nav_menu_updates'])) == true (line 626)

    $actual = $this->wP_Customize_Nav_Menu_Setting->amend_customize_save_response($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAmend_customize_save_response2()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['nav_menu_updates'])) == true (line 623)
    // if (!isset($data['widget_nav_menu_updates'])) == false (line 626)

    $actual = $this->wP_Customize_Nav_Menu_Setting->amend_customize_save_response($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAmend_customize_save_response3()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['nav_menu_updates'])) == true (line 623)
    // if (!isset($data['widget_nav_menu_updates'])) == true (line 626)

    $actual = $this->wP_Customize_Nav_Menu_Setting->amend_customize_save_response($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
