<?php

namespace tests;

use Mockery as m;
use WP_Widget_Links;

class WP_Widget_LinksTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Links
*/
protected $wP_Widget_Links;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Links = new \WP_Widget_Links();
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Links->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($new_instance['orderby'], array('name', 'rating', 'id', 'rand'))) == false (line 108)

    $actual = $this->wP_Widget_Links->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate1()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($new_instance['orderby'], array('name', 'rating', 'id', 'rand'))) == true (line 108)

    $actual = $this->wP_Widget_Links->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate2()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($new_instance[$field])) == false (line 102)
    // if (\in_array($new_instance['orderby'], array('name', 'rating', 'id', 'rand'))) == false (line 108)

    $actual = $this->wP_Widget_Links->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate3()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($new_instance[$field])) == false (line 102)
    // if (\in_array($new_instance['orderby'], array('name', 'rating', 'id', 'rand'))) == true (line 108)

    $actual = $this->wP_Widget_Links->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate4()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($new_instance[$field])) == true (line 102)
    // if (\in_array($new_instance['orderby'], array('name', 'rating', 'id', 'rand'))) == false (line 108)

    $actual = $this->wP_Widget_Links->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate5()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($new_instance[$field])) == true (line 102)
    // if (\in_array($new_instance['orderby'], array('name', 'rating', 'id', 'rand'))) == true (line 108)

    $actual = $this->wP_Widget_Links->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($limit = \intval($instance['limit']))) == false (line 140)

    $actual = $this->wP_Widget_Links->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm1()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($limit = \intval($instance['limit']))) == false (line 140)

    $actual = $this->wP_Widget_Links->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm2()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($limit = \intval($instance['limit']))) == true (line 140)

    $actual = $this->wP_Widget_Links->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm3()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($limit = \intval($instance['limit']))) == true (line 140)

    $actual = $this->wP_Widget_Links->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
