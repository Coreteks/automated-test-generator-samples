<?php

namespace tests;

use Mockery as m;
use WP_Widget_Recent_Comments;

class WP_Widget_Recent_CommentsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Recent_Comments
*/
protected $wP_Widget_Recent_Comments;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Recent_Comments = new \WP_Widget_Recent_Comments();
}

public function testRecent_comments_style0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\current_theme_supports('widgets') || !\apply_filters('show_recent_comments_widget_style', \true, $this->id_base)) == false (line 52)

    $actual = $this->wP_Widget_Recent_Comments->recent_comments_style();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRecent_comments_style1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\current_theme_supports('widgets') || !\apply_filters('show_recent_comments_widget_style', \true, $this->id_base)) == true (line 52)

    $actual = $this->wP_Widget_Recent_Comments->recent_comments_style();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 71)
    // if (!$number) == false (line 83)
    // if ($title) == false (line 109)
    // if (\is_array($comments) && $comments) == false (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget1()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 71)
    // if (!$number) == false (line 83)
    // if ($title) == false (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget2()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 71)
    // if (!$number) == false (line 83)
    // if ($title) == false (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget3()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 71)
    // if (!$number) == false (line 83)
    // if ($title) == true (line 109)
    // if (\is_array($comments) && $comments) == false (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget4()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 71)
    // if (!$number) == false (line 83)
    // if ($title) == true (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget5()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 71)
    // if (!$number) == false (line 83)
    // if ($title) == true (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget6()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 71)
    // if (!$number) == true (line 83)
    // if ($title) == false (line 109)
    // if (\is_array($comments) && $comments) == false (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget7()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 71)
    // if (!$number) == true (line 83)
    // if ($title) == false (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget8()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 71)
    // if (!$number) == true (line 83)
    // if ($title) == false (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget9()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 71)
    // if (!$number) == true (line 83)
    // if ($title) == true (line 109)
    // if (\is_array($comments) && $comments) == false (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget10()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 71)
    // if (!$number) == true (line 83)
    // if ($title) == true (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget11()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == false (line 71)
    // if (!$number) == true (line 83)
    // if ($title) == true (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget12()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 71)
    // if (!$number) == false (line 83)
    // if ($title) == false (line 109)
    // if (\is_array($comments) && $comments) == false (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget13()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 71)
    // if (!$number) == false (line 83)
    // if ($title) == false (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget14()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 71)
    // if (!$number) == false (line 83)
    // if ($title) == false (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget15()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 71)
    // if (!$number) == false (line 83)
    // if ($title) == true (line 109)
    // if (\is_array($comments) && $comments) == false (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget16()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 71)
    // if (!$number) == false (line 83)
    // if ($title) == true (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget17()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 71)
    // if (!$number) == false (line 83)
    // if ($title) == true (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget18()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 71)
    // if (!$number) == true (line 83)
    // if ($title) == false (line 109)
    // if (\is_array($comments) && $comments) == false (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget19()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 71)
    // if (!$number) == true (line 83)
    // if ($title) == false (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget20()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 71)
    // if (!$number) == true (line 83)
    // if ($title) == false (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget21()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 71)
    // if (!$number) == true (line 83)
    // if ($title) == true (line 109)
    // if (\is_array($comments) && $comments) == false (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget22()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 71)
    // if (!$number) == true (line 83)
    // if ($title) == true (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget23()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['widget_id'])) == true (line 71)
    // if (!$number) == true (line 83)
    // if ($title) == true (line 109)
    // if (\is_array($comments) && $comments) == true (line 114)

    $actual = $this->wP_Widget_Recent_Comments->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Recent_Comments->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Recent_Comments->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush_widget_cache0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Recent_Comments->flush_widget_cache();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
