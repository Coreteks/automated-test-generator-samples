<?php

namespace tests;

use Mockery as m;
use WP_Customize_Partial;
use WP_Customize_Selective_Refresh;

class WP_Customize_PartialTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_component;
/**
* @var mixed
*/
protected $_id = null;
/**
* @var mixed
*/
protected $_args = null;
/**
* @var \WP_Customize_Partial
*/
protected $wP_Customize_Partial;

public function setUp()
{
    parent::setUp();

    $this->_component = m::mock(\WP_Customize_Selective_Refresh::class);
    $this->_id = null;
    $this->_args = null;
    $this->wP_Customize_Partial = new \WP_Customize_Partial($this->_component, $this->_id, $this->_args);
}

public function testId_data0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Partial->id_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender0()
{
    $container_context = m::mock('UntypedParameter_container_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->render_callback)) == false (line 201)

    $actual = $this->wP_Customize_Partial->render($container_context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender1()
{
    $container_context = m::mock('UntypedParameter_container_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->render_callback)) == true (line 201)
    // if (\null !== $return_render && '' !== $ob_render) == false (line 206)

    $actual = $this->wP_Customize_Partial->render($container_context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender2()
{
    $container_context = m::mock('UntypedParameter_container_context_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->render_callback)) == true (line 201)
    // if (\null !== $return_render && '' !== $ob_render) == true (line 206)

    $actual = $this->wP_Customize_Partial->render($container_context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_callback0()
{
    $partial = m::mock(\WP_Customize_Partial::class);
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Partial->render_callback($partial, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Partial->json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->capability) && !\current_user_can($this->capability)) == false (line 300)

    $actual = $this->wP_Customize_Partial->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->capability) && !\current_user_can($this->capability)) == false (line 300)
    // if (!$setting || !$setting->check_capabilities()) == false (line 305)

    $actual = $this->wP_Customize_Partial->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->capability) && !\current_user_can($this->capability)) == false (line 300)
    // if (!$setting || !$setting->check_capabilities()) == true (line 305)

    $actual = $this->wP_Customize_Partial->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->capability) && !\current_user_can($this->capability)) == true (line 300)

    $actual = $this->wP_Customize_Partial->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
