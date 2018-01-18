<?php

namespace tests;

use Mockery as m;
use WP_Nav_Menu_Widget;

class WP_Nav_Menu_WidgetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Nav_Menu_Widget
*/
protected $wP_Nav_Menu_Widget;

public function setUp()
{
    parent::setUp();

    $this->wP_Nav_Menu_Widget = new \WP_Nav_Menu_Widget();
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$nav_menu) == false (line 45)
    // if ($title) == false (line 56)

    $actual = $this->wP_Nav_Menu_Widget->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget1()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$nav_menu) == false (line 45)
    // if ($title) == true (line 56)

    $actual = $this->wP_Nav_Menu_Widget->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget2()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$nav_menu) == true (line 45)

    $actual = $this->wP_Nav_Menu_Widget->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($new_instance['title'])) == false (line 98)
    // if (!empty($new_instance['nav_menu'])) == false (line 101)

    $actual = $this->wP_Nav_Menu_Widget->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate1()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($new_instance['title'])) == false (line 98)
    // if (!empty($new_instance['nav_menu'])) == true (line 101)

    $actual = $this->wP_Nav_Menu_Widget->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate2()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($new_instance['title'])) == true (line 98)
    // if (!empty($new_instance['nav_menu'])) == false (line 101)

    $actual = $this->wP_Nav_Menu_Widget->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate3()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($new_instance['title'])) == true (line 98)
    // if (!empty($new_instance['nav_menu'])) == true (line 101)

    $actual = $this->wP_Nav_Menu_Widget->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm1()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm2()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm3()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm4()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm5()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm6()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm7()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm8()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm9()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm10()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm11()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm12()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm13()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm14()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm15()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == false (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm16()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm17()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm18()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm19()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm20()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm21()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm22()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm23()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == false (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm24()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm25()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm26()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm27()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm28()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm29()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm30()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == false (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm31()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($menus)) == true (line 124)
    // if (!$nav_menu) == true (line 131)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 139)
    // if ($wp_customize instanceof \WP_Customize_Manager) == true (line 163)

    $actual = $this->wP_Nav_Menu_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
