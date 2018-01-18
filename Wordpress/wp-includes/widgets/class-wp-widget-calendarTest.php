<?php

namespace tests;

use Mockery as m;
use WP_Widget_Calendar;

class WP_Widget_CalendarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Calendar
*/
protected $wP_Widget_Calendar;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Calendar = new \WP_Widget_Calendar();
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == false (line 58)
    // if (0 === self::$instance) == false (line 61)

    $actual = $this->wP_Widget_Calendar->widget($args, $instance);
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
    // if (0 === self::$instance) == true (line 61)

    $actual = $this->wP_Widget_Calendar->widget($args, $instance);
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
    // if (0 === self::$instance) == false (line 61)

    $actual = $this->wP_Widget_Calendar->widget($args, $instance);
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
    // if (0 === self::$instance) == true (line 61)

    $actual = $this->wP_Widget_Calendar->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Calendar->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Calendar->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
