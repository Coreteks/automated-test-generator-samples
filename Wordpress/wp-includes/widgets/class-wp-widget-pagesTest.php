<?php

namespace tests;

use Mockery as m;
use WP_Widget_Pages;

class WP_Widget_PagesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Pages
*/
protected $wP_Widget_Pages;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Pages = new \WP_Widget_Pages();
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($sortby == 'menu_order') == false (line 59)
    // if (!empty($out)) == false (line 85)

    $actual = $this->wP_Widget_Pages->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget1()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($sortby == 'menu_order') == false (line 59)
    // if (!empty($out)) == true (line 85)
    // if ($title) == false (line 87)

    $actual = $this->wP_Widget_Pages->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget2()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($sortby == 'menu_order') == false (line 59)
    // if (!empty($out)) == true (line 85)
    // if ($title) == true (line 87)

    $actual = $this->wP_Widget_Pages->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget3()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($sortby == 'menu_order') == true (line 59)
    // if (!empty($out)) == false (line 85)

    $actual = $this->wP_Widget_Pages->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget4()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($sortby == 'menu_order') == true (line 59)
    // if (!empty($out)) == true (line 85)
    // if ($title) == false (line 87)

    $actual = $this->wP_Widget_Pages->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget5()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($sortby == 'menu_order') == true (line 59)
    // if (!empty($out)) == true (line 85)
    // if ($title) == true (line 87)

    $actual = $this->wP_Widget_Pages->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($new_instance['sortby'], array('post_title', 'menu_order', 'ID'))) == false (line 112)

    $actual = $this->wP_Widget_Pages->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate1()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($new_instance['sortby'], array('post_title', 'menu_order', 'ID'))) == true (line 112)

    $actual = $this->wP_Widget_Pages->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Pages->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
