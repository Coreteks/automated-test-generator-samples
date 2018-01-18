<?php

namespace tests;

use Mockery as m;
use WP_Widget_Factory;

class WP_Widget_FactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Factory
*/
protected $wP_Widget_Factory;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Factory = new \WP_Widget_Factory();
}

public function testWP_Widget_Factory0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Factory->WP_Widget_Factory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister0()
{
    $widget = m::mock('UntypedParameter_widget_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($widget instanceof \WP_Widget) == false (line 97)

    $actual = $this->wP_Widget_Factory->register($widget);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister1()
{
    $widget = m::mock('UntypedParameter_widget_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($widget instanceof \WP_Widget) == true (line 97)

    $actual = $this->wP_Widget_Factory->register($widget);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnregister0()
{
    $widget = m::mock('UntypedParameter_widget_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($widget instanceof \WP_Widget) == false (line 114)

    $actual = $this->wP_Widget_Factory->unregister($widget);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnregister1()
{
    $widget = m::mock('UntypedParameter_widget_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($widget instanceof \WP_Widget) == true (line 114)

    $actual = $this->wP_Widget_Factory->unregister($widget);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register_widgets0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Factory->_register_widgets();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register_widgets1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($this->widgets[$key]->id_base, $registered, \true)) == false (line 136)

    $actual = $this->wP_Widget_Factory->_register_widgets();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register_widgets2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($this->widgets[$key]->id_base, $registered, \true)) == true (line 136)

    $actual = $this->wP_Widget_Factory->_register_widgets();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
