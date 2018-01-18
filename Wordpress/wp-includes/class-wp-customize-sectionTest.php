<?php

namespace tests;

use Mockery as m;
use WP_Customize_Section;

class WP_Customize_SectionTest extends \PHPUnit_Framework_TestCase
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
* @var \WP_Customize_Section
*/
protected $wP_Customize_Section;

public function setUp()
{
    parent::setUp();

    $this->_manager = null;
    $this->_id = null;
    $this->_args = null;
    $this->wP_Customize_Section = new \WP_Customize_Section($this->_manager, $this->_id, $this->_args);
}

public function testActive0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Section->active();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testActive_callback0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Section->active_callback();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->panel) == false (line 228)

    $actual = $this->wP_Customize_Section->json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->panel) == true (line 228)

    $actual = $this->wP_Customize_Section->json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->capability && !\call_user_func_array('current_user_can', (array) $this->capability)) == false (line 247)
    // if ($this->theme_supports && !\call_user_func_array('current_theme_supports', (array) $this->theme_supports)) == false (line 251)

    $actual = $this->wP_Customize_Section->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->capability && !\call_user_func_array('current_user_can', (array) $this->capability)) == false (line 247)
    // if ($this->theme_supports && !\call_user_func_array('current_theme_supports', (array) $this->theme_supports)) == true (line 251)

    $actual = $this->wP_Customize_Section->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->capability && !\call_user_func_array('current_user_can', (array) $this->capability)) == true (line 247)

    $actual = $this->wP_Customize_Section->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_content0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Section->get_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMaybe_render0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->check_capabilities()) == false (line 277)

    $actual = $this->wP_Customize_Section->maybe_render();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMaybe_render1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->check_capabilities()) == true (line 277)

    $actual = $this->wP_Customize_Section->maybe_render();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrint_template0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Section->print_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
