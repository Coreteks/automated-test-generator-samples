<?php

namespace tests;

use Mockery as m;
use WP_Widget_Categories;

class WP_Widget_CategoriesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Categories
*/
protected $wP_Widget_Categories;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Categories = new \WP_Widget_Categories();
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == false (line 58)
    // if ($d) == false (line 68)

    $actual = $this->wP_Widget_Categories->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget1()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == false (line 58)
    // if ($d) == true (line 68)

    $actual = $this->wP_Widget_Categories->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget2()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == true (line 58)
    // if ($d) == false (line 68)

    $actual = $this->wP_Widget_Categories->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget3()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == true (line 58)
    // if ($d) == true (line 68)

    $actual = $this->wP_Widget_Categories->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Categories->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Categories->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
