<?php

namespace tests;

use Mockery as m;
use WP_Customize_Panel;

class WP_Customize_PanelTest extends \PHPUnit_Framework_TestCase
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
* @var \WP_Customize_Panel
*/
protected $wP_Customize_Panel;

public function setUp()
{
    parent::setUp();

    $this->_manager = null;
    $this->_id = null;
    $this->_args = null;
    $this->wP_Customize_Panel = new \WP_Customize_Panel($this->_manager, $this->_id, $this->_args);
}

public function testActive0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Panel->active();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testActive_callback0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Panel->active_callback();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Panel->json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->capability && !\call_user_func_array('current_user_can', (array) $this->capability)) == false (line 229)
    // if ($this->theme_supports && !\call_user_func_array('current_theme_supports', (array) $this->theme_supports)) == false (line 233)

    $actual = $this->wP_Customize_Panel->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->capability && !\call_user_func_array('current_user_can', (array) $this->capability)) == false (line 229)
    // if ($this->theme_supports && !\call_user_func_array('current_theme_supports', (array) $this->theme_supports)) == true (line 233)

    $actual = $this->wP_Customize_Panel->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->capability && !\call_user_func_array('current_user_can', (array) $this->capability)) == true (line 229)

    $actual = $this->wP_Customize_Panel->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_content0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Panel->get_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMaybe_render0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->check_capabilities()) == false (line 259)

    $actual = $this->wP_Customize_Panel->maybe_render();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMaybe_render1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->check_capabilities()) == true (line 259)

    $actual = $this->wP_Customize_Panel->maybe_render();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrint_template0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Panel->print_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
