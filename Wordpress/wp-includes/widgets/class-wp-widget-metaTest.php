<?php

namespace tests;

use Mockery as m;
use WP_Widget_Meta;

class WP_Widget_MetaTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Meta
*/
protected $wP_Widget_Meta;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Meta = new \WP_Widget_Meta();
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == false (line 52)

    $actual = $this->wP_Widget_Meta->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget1()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == true (line 52)

    $actual = $this->wP_Widget_Meta->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Meta->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Meta->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
