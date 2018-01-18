<?php

namespace tests;

use Mockery as m;
use WP_Customize_Manager;
use WP_Customize_Nav_Menu_Item_Setting;

class WP_Customize_Nav_Menu_Item_SettingTest extends \PHPUnit_Framework_TestCase
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
* @var \WP_Customize_Nav_Menu_Item_Setting
*/
protected $wP_Customize_Nav_Menu_Item_Setting;

public function setUp()
{
    parent::setUp();

    $this->_manager = m::mock(\WP_Customize_Manager::class);
    $this->_id = null;
    $this->_args = [];
    $this->wP_Customize_Nav_Menu_Item_Setting = new \WP_Customize_Nav_Menu_Item_Setting($this->_manager, $this->_id, $this->_args);
}

public function testFlush_cached_value0()
{
    $menu_id = m::mock('UntypedParameter_menu_id_');
    $menu_item_id = m::mock('UntypedParameter_menu_item_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($menu_item_id === $this->post_id) == false (line 199)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->flush_cached_value($menu_id, $menu_item_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush_cached_value1()
{
    $menu_id = m::mock('UntypedParameter_menu_id_');
    $menu_item_id = m::mock('UntypedParameter_menu_item_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($menu_item_id === $this->post_id) == true (line 199)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->flush_cached_value($menu_id, $menu_item_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == false (line 232)
    // if (!\is_array($value)) == false (line 243)
    // if (!empty($value) && empty($value['type_label'])) == false (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == false (line 232)
    // if (!\is_array($value)) == false (line 243)
    // if (!empty($value) && empty($value['type_label'])) == true (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == false (line 232)
    // if (!\is_array($value)) == true (line 243)
    // if (!empty($value) && empty($value['type_label'])) == false (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == false (line 232)
    // if (!\is_array($value)) == true (line 243)
    // if (!empty($value) && empty($value['type_label'])) == true (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == true (line 232)
    // if ($post && self::POST_TYPE === $post->post_type) == false (line 234)
    // if (!\is_array($value)) == false (line 243)
    // if (!empty($value) && empty($value['type_label'])) == false (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == true (line 232)
    // if ($post && self::POST_TYPE === $post->post_type) == false (line 234)
    // if (!\is_array($value)) == false (line 243)
    // if (!empty($value) && empty($value['type_label'])) == true (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == true (line 232)
    // if ($post && self::POST_TYPE === $post->post_type) == false (line 234)
    // if (!\is_array($value)) == true (line 243)
    // if (!empty($value) && empty($value['type_label'])) == false (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == true (line 232)
    // if ($post && self::POST_TYPE === $post->post_type) == false (line 234)
    // if (!\is_array($value)) == true (line 243)
    // if (!empty($value) && empty($value['type_label'])) == true (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == true (line 232)
    // if ($post && self::POST_TYPE === $post->post_type) == true (line 234)
    // if ($is_title_empty) == false (line 237)
    // if (!\is_array($value)) == false (line 243)
    // if (!empty($value) && empty($value['type_label'])) == false (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == true (line 232)
    // if ($post && self::POST_TYPE === $post->post_type) == true (line 234)
    // if ($is_title_empty) == false (line 237)
    // if (!\is_array($value)) == false (line 243)
    // if (!empty($value) && empty($value['type_label'])) == true (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == true (line 232)
    // if ($post && self::POST_TYPE === $post->post_type) == true (line 234)
    // if ($is_title_empty) == false (line 237)
    // if (!\is_array($value)) == true (line 243)
    // if (!empty($value) && empty($value['type_label'])) == false (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == true (line 232)
    // if ($post && self::POST_TYPE === $post->post_type) == true (line 234)
    // if ($is_title_empty) == false (line 237)
    // if (!\is_array($value)) == true (line 243)
    // if (!empty($value) && empty($value['type_label'])) == true (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == true (line 232)
    // if ($post && self::POST_TYPE === $post->post_type) == true (line 234)
    // if ($is_title_empty) == true (line 237)
    // if (!\is_array($value)) == false (line 243)
    // if (!empty($value) && empty($value['type_label'])) == false (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == true (line 232)
    // if ($post && self::POST_TYPE === $post->post_type) == true (line 234)
    // if ($is_title_empty) == true (line 237)
    // if (!\is_array($value)) == false (line 243)
    // if (!empty($value) && empty($value['type_label'])) == true (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == true (line 232)
    // if ($post && self::POST_TYPE === $post->post_type) == true (line 234)
    // if ($is_title_empty) == true (line 237)
    // if (!\is_array($value)) == true (line 243)
    // if (!empty($value) && empty($value['type_label'])) == false (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == false (line 226)
    // if ($this->post_id > 0) == true (line 232)
    // if ($post && self::POST_TYPE === $post->post_type) == true (line 234)
    // if ($is_title_empty) == true (line 237)
    // if (!\is_array($value)) == true (line 243)
    // if (!empty($value) && empty($value['type_label'])) == true (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == true (line 226)
    // if (!empty($value) && empty($value['type_label'])) == false (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == false (line 214)
    // if (isset($this->value)) == true (line 226)
    // if (!empty($value) && empty($value['type_label'])) == true (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == true (line 214)
    // if ($undefined === $post_value) == false (line 218)
    // if (!empty($value) && empty($value['original_title'])) == false (line 223)
    // if (!empty($value) && empty($value['type_label'])) == false (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == true (line 214)
    // if ($undefined === $post_value) == false (line 218)
    // if (!empty($value) && empty($value['original_title'])) == false (line 223)
    // if (!empty($value) && empty($value['type_label'])) == true (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == true (line 214)
    // if ($undefined === $post_value) == false (line 218)
    // if (!empty($value) && empty($value['original_title'])) == true (line 223)
    // if (!empty($value) && empty($value['type_label'])) == false (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == true (line 214)
    // if ($undefined === $post_value) == false (line 218)
    // if (!empty($value) && empty($value['original_title'])) == true (line 223)
    // if (!empty($value) && empty($value['type_label'])) == true (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == true (line 214)
    // if ($undefined === $post_value) == true (line 218)
    // if (!empty($value) && empty($value['original_title'])) == false (line 223)
    // if (!empty($value) && empty($value['type_label'])) == false (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == true (line 214)
    // if ($undefined === $post_value) == true (line 218)
    // if (!empty($value) && empty($value['original_title'])) == false (line 223)
    // if (!empty($value) && empty($value['type_label'])) == true (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == true (line 214)
    // if ($undefined === $post_value) == true (line 218)
    // if (!empty($value) && empty($value['original_title'])) == true (line 223)
    // if (!empty($value) && empty($value['type_label'])) == false (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed && $this->_previewed_blog_id === \get_current_blog_id()) == true (line 214)
    // if ($undefined === $post_value) == true (line 218)
    // if (!empty($value) && empty($value['original_title'])) == true (line 223)
    // if (!empty($value) && empty($value['type_label'])) == true (line 253)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == false (line 436)
    // if (!$is_placeholder && !$is_dirty) == false (line 443)
    // if (!\has_filter('wp_get_nav_menu_items', $sort_callback)) == false (line 455)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == false (line 436)
    // if (!$is_placeholder && !$is_dirty) == false (line 443)
    // if (!\has_filter('wp_get_nav_menu_items', $sort_callback)) == true (line 455)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == false (line 436)
    // if (!$is_placeholder && !$is_dirty) == true (line 443)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == true (line 436)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_items0()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$should_filter) == false (line 486)
    // if ($should_remove) == false (line 502)
    // if ($should_update) == false (line 518)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->filter_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_items1()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$should_filter) == false (line 486)
    // if ($should_remove) == false (line 502)
    // if ($should_update) == true (line 518)
    // if (!$mutated) == false (line 529)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->filter_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_items2()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$should_filter) == false (line 486)
    // if ($should_remove) == false (line 502)
    // if ($should_update) == true (line 518)
    // if (!$mutated) == true (line 529)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->filter_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_items3()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$should_filter) == false (line 486)
    // if ($should_remove) == false (line 502)
    // if ($should_update) == true (line 518)
    // if ($item->db_id === $this->post_id) == false (line 520)
    // if (!$mutated) == false (line 529)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->filter_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_items4()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$should_filter) == false (line 486)
    // if ($should_remove) == false (line 502)
    // if ($should_update) == true (line 518)
    // if ($item->db_id === $this->post_id) == false (line 520)
    // if (!$mutated) == true (line 529)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->filter_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_items5()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$should_filter) == false (line 486)
    // if ($should_remove) == false (line 502)
    // if ($should_update) == true (line 518)
    // if ($item->db_id === $this->post_id) == true (line 520)
    // if (!$mutated) == false (line 529)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->filter_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_items6()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$should_filter) == false (line 486)
    // if ($should_remove) == false (line 502)
    // if ($should_update) == true (line 518)
    // if ($item->db_id === $this->post_id) == true (line 520)
    // if (!$mutated) == true (line 529)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->filter_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_items7()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$should_filter) == false (line 486)
    // if ($should_remove) == false (line 502)
    // if ($should_update) == true (line 518)
    // if ($item->db_id === $this->post_id) == true (line 520)
    // if (!$mutated) == false (line 529)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->filter_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_items8()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$should_filter) == false (line 486)
    // if ($should_remove) == false (line 502)
    // if ($should_update) == true (line 518)
    // if ($item->db_id === $this->post_id) == true (line 520)
    // if (!$mutated) == true (line 529)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->filter_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_items9()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$should_filter) == false (line 486)
    // if ($should_remove) == true (line 502)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->filter_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_items10()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$should_filter) == false (line 486)
    // if ($should_remove) == true (line 502)
    // if ($item->db_id !== $this->post_id) == false (line 505)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->filter_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_items11()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$should_filter) == false (line 486)
    // if ($should_remove) == true (line 502)
    // if ($item->db_id !== $this->post_id) == true (line 505)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->filter_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_wp_get_nav_menu_items12()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$should_filter) == true (line 486)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->filter_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort_wp_get_nav_menu_items0()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_admin()) == false (line 555)
    // if (\ARRAY_A === $args['output']) == false (line 559)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sort_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort_wp_get_nav_menu_items1()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_admin()) == false (line 555)
    // if (\ARRAY_A === $args['output']) == true (line 559)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sort_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort_wp_get_nav_menu_items2()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_admin()) == false (line 555)
    // if (\ARRAY_A === $args['output']) == true (line 559)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sort_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort_wp_get_nav_menu_items3()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_admin()) == true (line 555)
    // if (\ARRAY_A === $args['output']) == false (line 559)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sort_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort_wp_get_nav_menu_items4()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_admin()) == true (line 555)
    // if (\ARRAY_A === $args['output']) == true (line 559)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sort_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort_wp_get_nav_menu_items5()
{
    $items = m::mock('UntypedParameter_items_');
    $menu = m::mock('UntypedParameter_menu_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_admin()) == true (line 555)
    // if (\ARRAY_A === $args['output']) == true (line 559)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sort_wp_get_nav_menu_items($items, $menu, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item48()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item49()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item50()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item51()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item52()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item53()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item54()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item55()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item56()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item57()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item58()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item59()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item60()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item61()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item62()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item63()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item64()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item65()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item66()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item67()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item68()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item69()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item70()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item71()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item72()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item73()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item74()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item75()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item76()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item77()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item78()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item79()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item80()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item81()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item82()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item83()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item84()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item85()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item86()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item87()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item88()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item89()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item90()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item91()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item92()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item93()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item94()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item95()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item96()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item97()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item98()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item99()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item100()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item101()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item102()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item103()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item104()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item105()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item106()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item107()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item108()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item109()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item110()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item111()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item112()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item113()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item114()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item115()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item116()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item117()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item118()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item119()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item120()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item121()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item122()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item123()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item124()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item125()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item126()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item127()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == false (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item128()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item129()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item130()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item131()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item132()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item133()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item134()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item135()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item136()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item137()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item138()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item139()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item140()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item141()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item142()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item143()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item144()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item145()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item146()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item147()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item148()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item149()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item150()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item151()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item152()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item153()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item154()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item155()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item156()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item157()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item158()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item159()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item160()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item161()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item162()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item163()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item164()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item165()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item166()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item167()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item168()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item169()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item170()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item171()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item172()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item173()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item174()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item175()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item176()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item177()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item178()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item179()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item180()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item181()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item182()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item183()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item184()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item185()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item186()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item187()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item188()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item189()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item190()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item191()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == false (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item192()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item193()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item194()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item195()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item196()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item197()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item198()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item199()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item200()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item201()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item202()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item203()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item204()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item205()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item206()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item207()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item208()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item209()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item210()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item211()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item212()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item213()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item214()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item215()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item216()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item217()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item218()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item219()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item220()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item221()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item222()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item223()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == false (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item224()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item225()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item226()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item227()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item228()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item229()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item230()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item231()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item232()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item233()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item234()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item235()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item236()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item237()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item238()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item239()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == false (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item240()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item241()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item242()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item243()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item244()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item245()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item246()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item247()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == false (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item248()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item249()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == false (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item250()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item251()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == false (line 618)
    // if ('post_type_archive' === $post->type && !empty($post->object)) == true (line 620)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item252()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item253()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == false (line 616)
    // if ('taxonomy' === $post->type && !empty($post->object) && !empty($post->object_id)) == true (line 618)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item254()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == false (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue_as_wp_post_nav_menu_item255()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($item->original_title)) == true (line 593)
    // if (empty($item->title) && !empty($item->original_title)) == true (line 596)
    // if ($item->title) == true (line 599)
    // if (empty($post->post_author)) == true (line 607)
    // if (!isset($post->type_label)) == true (line 611)
    // if ('post_type' === $post->type && !empty($post->object_id)) == true (line 616)
    // if (\is_wp_error($post->url)) == true (line 623)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->value_as_wp_post_nav_menu_item();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize0()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize1()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize2()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize3()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize4()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == true (line 716)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize5()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize6()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize7()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize8()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize9()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == true (line 716)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize10()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize11()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize12()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize13()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize14()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == true (line 716)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize15()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize16()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize17()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize18()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize19()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == true (line 716)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize20()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize21()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize22()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize23()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize24()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == true (line 716)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize25()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize26()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize27()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize28()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize29()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == true (line 716)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize30()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize31()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize32()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize33()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize34()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == true (line 716)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize35()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize36()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize37()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize38()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize39()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == true (line 716)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize40()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize41()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize42()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize43()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize44()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == true (line 716)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize45()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize46()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize47()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize48()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize49()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == true (line 716)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize50()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize51()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize52()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize53()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize54()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == false (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == true (line 716)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize55()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize56()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == false (line 714)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize57()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == false (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize58()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == false (line 716)
    // if ('publish' !== $menu_item_value['status']) == true (line 720)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize59()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == false (line 658)
    // if (!\is_array($value)) == true (line 695)
    // if ('' !== $menu_item_value['url']) == true (line 714)
    // if ('' === $menu_item_value['url']) == true (line 716)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize60()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == false (line 653)
    // if (!\is_array($menu_item_value)) == true (line 658)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize61()
{
    $menu_item_value = m::mock('UntypedParameter_menu_item_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $menu_item_value) == true (line 653)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->sanitize($menu_item_value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAmend_customize_save_response0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['nav_menu_item_updates'])) == false (line 881)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->amend_customize_save_response($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAmend_customize_save_response1()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['nav_menu_item_updates'])) == true (line 881)

    $actual = $this->wP_Customize_Nav_Menu_Item_Setting->amend_customize_save_response($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
