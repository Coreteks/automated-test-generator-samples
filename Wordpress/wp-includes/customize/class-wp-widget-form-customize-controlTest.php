<?php

namespace tests;

use Mockery as m;
use WP_Widget_Form_Customize_Control;

class WP_Widget_Form_Customize_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Form_Customize_Control
*/
protected $wP_Widget_Form_Customize_Control;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Form_Customize_Control = new \WP_Widget_Form_Customize_Control();
}

public function testTo_json0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($widget['params'][0])) == false (line 47)

    $actual = $this->wP_Widget_Form_Customize_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($widget['params'][0])) == true (line 47)

    $actual = $this->wP_Widget_Form_Customize_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($widget['params'][0])) == false (line 47)

    $actual = $this->wP_Widget_Form_Customize_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($widget['params'][0])) == true (line 47)

    $actual = $this->wP_Widget_Form_Customize_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Form_Customize_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testActive_callback0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Form_Customize_Control->active_callback();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
