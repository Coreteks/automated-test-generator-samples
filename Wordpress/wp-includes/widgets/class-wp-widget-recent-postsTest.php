<?php

namespace tests;

use Mockery as m;
use WP_Widget_Recent_Posts;

class WP_Widget_Recent_PostsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Recent_Posts
*/
protected $wP_Widget_Recent_Posts;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Recent_Posts = new \WP_Widget_Recent_Posts();
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == false (line 87)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget1()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == false (line 87)
    // if ($show_date) == false (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget2()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == false (line 87)
    // if ($show_date) == true (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget3()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == true (line 87)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget4()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == true (line 87)
    // if ($show_date) == false (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget5()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == true (line 87)
    // if ($show_date) == true (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget6()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == true (line 81)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget7()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == false (line 87)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget8()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == false (line 87)
    // if ($show_date) == false (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget9()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == false (line 87)
    // if ($show_date) == true (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget10()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == true (line 87)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget11()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == true (line 87)
    // if ($show_date) == false (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget12()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == true (line 87)
    // if ($show_date) == true (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget13()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == true (line 81)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget14()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == false (line 87)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget15()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == false (line 87)
    // if ($show_date) == false (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget16()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == false (line 87)
    // if ($show_date) == true (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget17()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == true (line 87)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget18()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == true (line 87)
    // if ($show_date) == false (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget19()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == true (line 87)
    // if ($show_date) == true (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget20()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == false (line 54)
    // if (!$r->have_posts()) == true (line 81)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget21()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == false (line 87)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget22()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == false (line 87)
    // if ($show_date) == false (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget23()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == false (line 87)
    // if ($show_date) == true (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget24()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == true (line 87)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget25()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == true (line 87)
    // if ($show_date) == false (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget26()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == false (line 81)
    // if ($title) == true (line 87)
    // if ($show_date) == true (line 99)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget27()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 44)
    // if (!$number) == true (line 54)
    // if (!$r->have_posts()) == true (line 81)

    $actual = $this->wP_Widget_Recent_Posts->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Recent_Posts->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Recent_Posts->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
