<?php

namespace tests;

use Mockery as m;
use WP_Customize_Control;

class WP_Customize_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_manager = null;
/**
* @var mixed
*/
protected $_id = null;
/**
* @var mixed
*/
protected $_args = null;
/**
* @var \WP_Customize_Control
*/
protected $wP_Customize_Control;

public function setUp()
{
    parent::setUp();

    $this->_manager = null;
    $this->_id = null;
    $this->_args = null;
    $this->wP_Customize_Control = new \WP_Customize_Control($this->_manager, $this->_id, $this->_args);
}

public function testEnqueue0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Control->enqueue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testActive0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Control->active();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testActive_callback0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Control->active_callback();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue0()
{
    $setting_key = m::mock('UntypedParameter_setting_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->settings[$setting_key])) == false (line 295)

    $actual = $this->wP_Customize_Control->value($setting_key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue1()
{
    $setting_key = m::mock('UntypedParameter_setting_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->settings[$setting_key])) == true (line 295)

    $actual = $this->wP_Customize_Control->value($setting_key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('dropdown-pages' === $this->type) == false (line 320)

    $actual = $this->wP_Customize_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('dropdown-pages' === $this->type) == true (line 320)

    $actual = $this->wP_Customize_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('dropdown-pages' === $this->type) == false (line 320)

    $actual = $this->wP_Customize_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('dropdown-pages' === $this->type) == true (line 320)

    $actual = $this->wP_Customize_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Control->json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->capability) && !\current_user_can($this->capability)) == false (line 350)
    // if (isset($section) && !$section->check_capabilities()) == false (line 361)

    $actual = $this->wP_Customize_Control->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->capability) && !\current_user_can($this->capability)) == false (line 350)
    // if (isset($section) && !$section->check_capabilities()) == true (line 361)

    $actual = $this->wP_Customize_Control->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->capability) && !\current_user_can($this->capability)) == false (line 350)
    // if (!$setting || !$setting->check_capabilities()) == false (line 355)
    // if (isset($section) && !$section->check_capabilities()) == false (line 361)

    $actual = $this->wP_Customize_Control->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->capability) && !\current_user_can($this->capability)) == false (line 350)
    // if (!$setting || !$setting->check_capabilities()) == false (line 355)
    // if (isset($section) && !$section->check_capabilities()) == true (line 361)

    $actual = $this->wP_Customize_Control->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->capability) && !\current_user_can($this->capability)) == false (line 350)
    // if (!$setting || !$setting->check_capabilities()) == true (line 355)

    $actual = $this->wP_Customize_Control->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->capability) && !\current_user_can($this->capability)) == true (line 350)

    $actual = $this->wP_Customize_Control->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_content0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Control->get_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMaybe_render0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->check_capabilities()) == false (line 388)

    $actual = $this->wP_Customize_Control->maybe_render();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMaybe_render1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->check_capabilities()) == true (line 388)

    $actual = $this->wP_Customize_Control->maybe_render();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_link0()
{
    $setting_key = m::mock('UntypedParameter_setting_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->settings[$setting_key]) && $this->settings[$setting_key] instanceof \WP_Customize_Setting) == false (line 441)

    $actual = $this->wP_Customize_Control->get_link($setting_key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_link1()
{
    $setting_key = m::mock('UntypedParameter_setting_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->settings[$setting_key]) && $this->settings[$setting_key] instanceof \WP_Customize_Setting) == true (line 441)

    $actual = $this->wP_Customize_Control->get_link($setting_key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLink0()
{
    $setting_key = m::mock('UntypedParameter_setting_key_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Control->link($setting_key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInput_attrs0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Control->input_attrs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInput_attrs1()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Control->input_attrs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrint_template0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Control->print_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
