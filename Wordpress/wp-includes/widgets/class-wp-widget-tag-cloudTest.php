<?php

namespace tests;

use Mockery as m;
use WP_Widget_Tag_Cloud;

class WP_Widget_Tag_CloudTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Tag_Cloud
*/
protected $wP_Widget_Tag_Cloud;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Tag_Cloud = new \WP_Widget_Tag_Cloud();
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($instance['title'])) == false (line 44)
    // if ('post_tag' === $current_taxonomy) == false (line 47)
    // if (empty($tag_cloud)) == false (line 79)
    // if ($title) == false (line 87)

    $actual = $this->wP_Widget_Tag_Cloud->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget1()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($instance['title'])) == false (line 44)
    // if ('post_tag' === $current_taxonomy) == false (line 47)
    // if (empty($tag_cloud)) == false (line 79)
    // if ($title) == true (line 87)

    $actual = $this->wP_Widget_Tag_Cloud->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget2()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($instance['title'])) == false (line 44)
    // if ('post_tag' === $current_taxonomy) == false (line 47)
    // if (empty($tag_cloud)) == true (line 79)

    $actual = $this->wP_Widget_Tag_Cloud->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget3()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($instance['title'])) == false (line 44)
    // if ('post_tag' === $current_taxonomy) == true (line 47)
    // if (empty($tag_cloud)) == false (line 79)
    // if ($title) == false (line 87)

    $actual = $this->wP_Widget_Tag_Cloud->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget4()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($instance['title'])) == false (line 44)
    // if ('post_tag' === $current_taxonomy) == true (line 47)
    // if (empty($tag_cloud)) == false (line 79)
    // if ($title) == true (line 87)

    $actual = $this->wP_Widget_Tag_Cloud->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget5()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($instance['title'])) == false (line 44)
    // if ('post_tag' === $current_taxonomy) == true (line 47)
    // if (empty($tag_cloud)) == true (line 79)

    $actual = $this->wP_Widget_Tag_Cloud->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget6()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($instance['title'])) == true (line 44)
    // if (empty($tag_cloud)) == false (line 79)
    // if ($title) == false (line 87)

    $actual = $this->wP_Widget_Tag_Cloud->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget7()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($instance['title'])) == true (line 44)
    // if (empty($tag_cloud)) == false (line 79)
    // if ($title) == true (line 87)

    $actual = $this->wP_Widget_Tag_Cloud->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget8()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($instance['title'])) == true (line 44)
    // if (empty($tag_cloud)) == true (line 79)

    $actual = $this->wP_Widget_Tag_Cloud->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Tag_Cloud->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\count($taxonomies)) (line 147)
    // Case 0 == false (line 150)
    // Case 1 == false (line 156)
    // Default (line 164)

    $actual = $this->wP_Widget_Tag_Cloud->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm1()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\count($taxonomies)) (line 147)
    // Case 0 == false (line 150)
    // Case 1 == false (line 156)
    // Default (line 164)

    $actual = $this->wP_Widget_Tag_Cloud->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm2()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\count($taxonomies)) (line 147)
    // Case 0 == false (line 150)
    // Case 1 == true (line 156)

    $actual = $this->wP_Widget_Tag_Cloud->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm3()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\count($taxonomies)) (line 147)
    // Case 0 == true (line 150)

    $actual = $this->wP_Widget_Tag_Cloud->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_get_current_taxonomy0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($instance['taxonomy']) && \taxonomy_exists($instance['taxonomy'])) == false (line 195)

    $actual = $this->wP_Widget_Tag_Cloud->_get_current_taxonomy($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_get_current_taxonomy1()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($instance['taxonomy']) && \taxonomy_exists($instance['taxonomy'])) == true (line 195)

    $actual = $this->wP_Widget_Tag_Cloud->_get_current_taxonomy($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
