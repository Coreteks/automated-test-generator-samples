<?php

namespace tests;

use Mockery as m;
use WP_Widget_Archives;

class WP_Widget_ArchivesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Archives
*/
protected $wP_Widget_Archives;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Archives = new \WP_Widget_Archives();
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == false (line 53)
    // if ($d) == false (line 57)

    $actual = $this->wP_Widget_Archives->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget1()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == false (line 53)
    // if ($d) == true (line 57)
    // switch ($dropdown_args['type']) (line 82)
    // Case 'yearly' == false (line 83)
    // Case 'monthly' == false (line 86)
    // Case 'daily' == false (line 89)
    // Case 'weekly' == false (line 92)
    // Default (line 95)

    $actual = $this->wP_Widget_Archives->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget2()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == false (line 53)
    // if ($d) == true (line 57)
    // switch ($dropdown_args['type']) (line 82)
    // Case 'yearly' == false (line 83)
    // Case 'monthly' == false (line 86)
    // Case 'daily' == false (line 89)
    // Case 'weekly' == true (line 92)

    $actual = $this->wP_Widget_Archives->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget3()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == false (line 53)
    // if ($d) == true (line 57)
    // switch ($dropdown_args['type']) (line 82)
    // Case 'yearly' == false (line 83)
    // Case 'monthly' == false (line 86)
    // Case 'daily' == true (line 89)

    $actual = $this->wP_Widget_Archives->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget4()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == false (line 53)
    // if ($d) == true (line 57)
    // switch ($dropdown_args['type']) (line 82)
    // Case 'yearly' == false (line 83)
    // Case 'monthly' == true (line 86)

    $actual = $this->wP_Widget_Archives->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget5()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == false (line 53)
    // if ($d) == true (line 57)
    // switch ($dropdown_args['type']) (line 82)
    // Case 'yearly' == true (line 83)

    $actual = $this->wP_Widget_Archives->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget6()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == true (line 53)
    // if ($d) == false (line 57)

    $actual = $this->wP_Widget_Archives->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget7()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == true (line 53)
    // if ($d) == true (line 57)
    // switch ($dropdown_args['type']) (line 82)
    // Case 'yearly' == false (line 83)
    // Case 'monthly' == false (line 86)
    // Case 'daily' == false (line 89)
    // Case 'weekly' == false (line 92)
    // Default (line 95)

    $actual = $this->wP_Widget_Archives->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget8()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == true (line 53)
    // if ($d) == true (line 57)
    // switch ($dropdown_args['type']) (line 82)
    // Case 'yearly' == false (line 83)
    // Case 'monthly' == false (line 86)
    // Case 'daily' == false (line 89)
    // Case 'weekly' == true (line 92)

    $actual = $this->wP_Widget_Archives->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget9()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == true (line 53)
    // if ($d) == true (line 57)
    // switch ($dropdown_args['type']) (line 82)
    // Case 'yearly' == false (line 83)
    // Case 'monthly' == false (line 86)
    // Case 'daily' == true (line 89)

    $actual = $this->wP_Widget_Archives->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget10()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == true (line 53)
    // if ($d) == true (line 57)
    // switch ($dropdown_args['type']) (line 82)
    // Case 'yearly' == false (line 83)
    // Case 'monthly' == true (line 86)

    $actual = $this->wP_Widget_Archives->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget11()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($title) == true (line 53)
    // if ($d) == true (line 57)
    // switch ($dropdown_args['type']) (line 82)
    // Case 'yearly' == true (line 83)

    $actual = $this->wP_Widget_Archives->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Archives->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Archives->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
