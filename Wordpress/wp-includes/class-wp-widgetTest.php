<?php

namespace tests;

use Mockery as m;
use WP_Widget;

class WP_WidgetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_id_base = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_widget_options = null;
/**
* @var mixed
*/
protected $_control_options = null;
/**
* @var \WP_Widget
*/
protected $wP_Widget;

public function setUp()
{
    parent::setUp();

    $this->_id_base = null;
    $this->_name = null;
    $this->_widget_options = null;
    $this->_control_options = null;
    $this->wP_Widget = new \WP_Widget($this->_id_base, $this->_name, $this->_widget_options, $this->_control_options);
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWP_Widget0()
{
    $id_base = m::mock('UntypedParameter_id_base_');
    $name = m::mock('UntypedParameter_name_');
    $widget_options = m::mock('UntypedParameter_widget_options_');
    $control_options = m::mock('UntypedParameter_control_options_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget->WP_Widget($id_base, $name, $widget_options, $control_options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_field_name0()
{
    $field_name = m::mock('UntypedParameter_field_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === ($pos = \strpos($field_name, '['))) == false (line 208)

    $actual = $this->wP_Widget->get_field_name($field_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_field_name1()
{
    $field_name = m::mock('UntypedParameter_field_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === ($pos = \strpos($field_name, '['))) == true (line 208)

    $actual = $this->wP_Widget->get_field_name($field_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_field_id0()
{
    $field_name = m::mock('UntypedParameter_field_name_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget->get_field_id($field_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == false (line 241)
    // if (\is_array($settings)) == false (line 245)
    // if ($empty) == false (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == false (line 241)
    // if (\is_array($settings)) == false (line 245)
    // if ($empty) == true (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == false (line 241)
    // if (\is_array($settings)) == true (line 245)
    // if ($empty) == false (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == false (line 241)
    // if (\is_array($settings)) == true (line 245)
    // if ($empty) == true (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == false (line 241)
    // if (\is_array($settings)) == true (line 245)
    // if (\is_numeric($number)) == false (line 247)
    // if ($empty) == false (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == false (line 241)
    // if (\is_array($settings)) == true (line 245)
    // if (\is_numeric($number)) == false (line 247)
    // if ($empty) == true (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == false (line 241)
    // if (\is_array($settings)) == true (line 245)
    // if (\is_numeric($number)) == true (line 247)
    // if ($empty) == false (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == false (line 241)
    // if (\is_array($settings)) == true (line 245)
    // if (\is_numeric($number)) == true (line 247)
    // if ($empty) == true (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == true (line 241)
    // if (\is_array($settings)) == false (line 245)
    // if ($empty) == false (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == true (line 241)
    // if (\is_array($settings)) == false (line 245)
    // if ($empty) == true (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == true (line 241)
    // if (\is_array($settings)) == true (line 245)
    // if ($empty) == false (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == true (line 241)
    // if (\is_array($settings)) == true (line 245)
    // if ($empty) == true (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == true (line 241)
    // if (\is_array($settings)) == true (line 245)
    // if (\is_numeric($number)) == false (line 247)
    // if ($empty) == false (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == true (line 241)
    // if (\is_array($settings)) == true (line 245)
    // if (\is_numeric($number)) == false (line 247)
    // if ($empty) == true (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == true (line 241)
    // if (\is_array($settings)) == true (line 245)
    // if (\is_numeric($number)) == true (line 247)
    // if ($empty) == false (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator) == true (line 241)
    // if (\is_array($settings)) == true (line 245)
    // if (\is_numeric($number)) == true (line 247)
    // if ($empty) == true (line 255)

    $actual = $this->wP_Widget->_register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_set0()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget->_set($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_get_display_callback0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget->_get_display_callback();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_get_update_callback0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget->_get_update_callback();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_get_form_callback0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget->_get_form_callback();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_preview0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget->is_preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_callback0()
{
    $args = m::mock('UntypedParameter_args_');
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == false (line 344)
    // if (\array_key_exists($this->number, $instances)) == false (line 352)

    $actual = $this->wP_Widget->display_callback($args, $widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_callback1()
{
    $args = m::mock('UntypedParameter_args_');
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == false (line 344)
    // if (\array_key_exists($this->number, $instances)) == true (line 352)
    // if (\false === $instance) == false (line 368)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == false (line 373)
    // if ($this->is_preview()) == false (line 379)

    $actual = $this->wP_Widget->display_callback($args, $widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_callback2()
{
    $args = m::mock('UntypedParameter_args_');
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == false (line 344)
    // if (\array_key_exists($this->number, $instances)) == true (line 352)
    // if (\false === $instance) == false (line 368)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == false (line 373)
    // if ($this->is_preview()) == true (line 379)

    $actual = $this->wP_Widget->display_callback($args, $widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_callback3()
{
    $args = m::mock('UntypedParameter_args_');
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == false (line 344)
    // if (\array_key_exists($this->number, $instances)) == true (line 352)
    // if (\false === $instance) == false (line 368)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == true (line 373)
    // if ($this->is_preview()) == false (line 379)

    $actual = $this->wP_Widget->display_callback($args, $widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_callback4()
{
    $args = m::mock('UntypedParameter_args_');
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == false (line 344)
    // if (\array_key_exists($this->number, $instances)) == true (line 352)
    // if (\false === $instance) == false (line 368)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == true (line 373)
    // if ($this->is_preview()) == true (line 379)

    $actual = $this->wP_Widget->display_callback($args, $widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_callback5()
{
    $args = m::mock('UntypedParameter_args_');
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == false (line 344)
    // if (\array_key_exists($this->number, $instances)) == true (line 352)
    // if (\false === $instance) == true (line 368)

    $actual = $this->wP_Widget->display_callback($args, $widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_callback6()
{
    $args = m::mock('UntypedParameter_args_');
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == true (line 344)
    // if (\array_key_exists($this->number, $instances)) == false (line 352)

    $actual = $this->wP_Widget->display_callback($args, $widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_callback7()
{
    $args = m::mock('UntypedParameter_args_');
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == true (line 344)
    // if (\array_key_exists($this->number, $instances)) == true (line 352)
    // if (\false === $instance) == false (line 368)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == false (line 373)
    // if ($this->is_preview()) == false (line 379)

    $actual = $this->wP_Widget->display_callback($args, $widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_callback8()
{
    $args = m::mock('UntypedParameter_args_');
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == true (line 344)
    // if (\array_key_exists($this->number, $instances)) == true (line 352)
    // if (\false === $instance) == false (line 368)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == false (line 373)
    // if ($this->is_preview()) == true (line 379)

    $actual = $this->wP_Widget->display_callback($args, $widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_callback9()
{
    $args = m::mock('UntypedParameter_args_');
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == true (line 344)
    // if (\array_key_exists($this->number, $instances)) == true (line 352)
    // if (\false === $instance) == false (line 368)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == true (line 373)
    // if ($this->is_preview()) == false (line 379)

    $actual = $this->wP_Widget->display_callback($args, $widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_callback10()
{
    $args = m::mock('UntypedParameter_args_');
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == true (line 344)
    // if (\array_key_exists($this->number, $instances)) == true (line 352)
    // if (\false === $instance) == false (line 368)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == true (line 373)
    // if ($this->is_preview()) == true (line 379)

    $actual = $this->wP_Widget->display_callback($args, $widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_callback11()
{
    $args = m::mock('UntypedParameter_args_');
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == true (line 344)
    // if (\array_key_exists($this->number, $instances)) == true (line 352)
    // if (\false === $instance) == true (line 368)

    $actual = $this->wP_Widget->display_callback($args, $widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback0()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == false (line 420)
    // if (isset($_POST['id_base']) && $_POST['id_base'] == $this->id_base) == false (line 422)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback1()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == false (line 420)
    // if (isset($_POST['id_base']) && $_POST['id_base'] == $this->id_base) == true (line 422)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback2()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == false (line 420)
    // if (isset($_POST['id_base']) && $_POST['id_base'] == $this->id_base) == true (line 422)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == false (line 436)
    // if ($this->is_preview()) == false (line 442)
    // if (\false !== $instance) == false (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback3()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == false (line 420)
    // if (isset($_POST['id_base']) && $_POST['id_base'] == $this->id_base) == true (line 422)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == false (line 436)
    // if ($this->is_preview()) == false (line 442)
    // if (\false !== $instance) == true (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback4()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == false (line 420)
    // if (isset($_POST['id_base']) && $_POST['id_base'] == $this->id_base) == true (line 422)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == false (line 436)
    // if ($this->is_preview()) == true (line 442)
    // if (\false !== $instance) == false (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback5()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == false (line 420)
    // if (isset($_POST['id_base']) && $_POST['id_base'] == $this->id_base) == true (line 422)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == false (line 436)
    // if ($this->is_preview()) == true (line 442)
    // if (\false !== $instance) == true (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback6()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == false (line 420)
    // if (isset($_POST['id_base']) && $_POST['id_base'] == $this->id_base) == true (line 422)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == true (line 436)
    // if ($this->is_preview()) == false (line 442)
    // if (\false !== $instance) == false (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback7()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == false (line 420)
    // if (isset($_POST['id_base']) && $_POST['id_base'] == $this->id_base) == true (line 422)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == true (line 436)
    // if ($this->is_preview()) == false (line 442)
    // if (\false !== $instance) == true (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback8()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == false (line 420)
    // if (isset($_POST['id_base']) && $_POST['id_base'] == $this->id_base) == true (line 422)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == true (line 436)
    // if ($this->is_preview()) == true (line 442)
    // if (\false !== $instance) == false (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback9()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == false (line 420)
    // if (isset($_POST['id_base']) && $_POST['id_base'] == $this->id_base) == true (line 422)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == true (line 436)
    // if ($this->is_preview()) == true (line 442)
    // if (\false !== $instance) == true (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback10()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == true (line 420)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback11()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == true (line 420)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == false (line 436)
    // if ($this->is_preview()) == false (line 442)
    // if (\false !== $instance) == false (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback12()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == true (line 420)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == false (line 436)
    // if ($this->is_preview()) == false (line 442)
    // if (\false !== $instance) == true (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback13()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == true (line 420)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == false (line 436)
    // if ($this->is_preview()) == true (line 442)
    // if (\false !== $instance) == false (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback14()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == true (line 420)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == false (line 436)
    // if ($this->is_preview()) == true (line 442)
    // if (\false !== $instance) == true (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback15()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == true (line 420)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == true (line 436)
    // if ($this->is_preview()) == false (line 442)
    // if (\false !== $instance) == false (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback16()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == true (line 420)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == true (line 436)
    // if ($this->is_preview()) == false (line 442)
    // if (\false !== $instance) == true (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback17()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == true (line 420)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == true (line 436)
    // if ($this->is_preview()) == true (line 442)
    // if (\false !== $instance) == false (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback18()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == false (line 404)
    // if (isset($_POST['widget-' . $this->id_base]) && \is_array($_POST['widget-' . $this->id_base])) == true (line 420)
    // if ($this->is_preview() && !$was_cache_addition_suspended) == true (line 436)
    // if ($this->is_preview()) == true (line 442)
    // if (\false !== $instance) == true (line 460)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback19()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == true (line 404)
    // if (isset($_POST['the-widget-id'])) == false (line 406)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback20()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == true (line 404)
    // if (isset($_POST['the-widget-id'])) == true (line 406)
    // if (isset($wp_registered_widgets[$del_id]['params'][0]['number'])) == false (line 412)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback21()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == true (line 404)
    // if (isset($_POST['the-widget-id'])) == true (line 406)
    // if (isset($wp_registered_widgets[$del_id]['params'][0]['number'])) == true (line 412)
    // if ($this->id_base . '-' . $number == $del_id) == false (line 415)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback22()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == false (line 400)
    // if (isset($_POST['delete_widget']) && $_POST['delete_widget']) == true (line 404)
    // if (isset($_POST['the-widget-id'])) == true (line 406)
    // if (isset($wp_registered_widgets[$del_id]['params'][0]['number'])) == true (line 412)
    // if ($this->id_base . '-' . $number == $del_id) == true (line 415)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate_callback23()
{
    $deprecated = m::mock('UntypedParameter_deprecated_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->updated) == true (line 400)

    $actual = $this->wP_Widget->update_callback($deprecated);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm_callback0()
{
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == false (line 486)
    // if (-1 == $widget_args['number']) == false (line 493)
    // if (\false !== $instance) == false (line 515)

    $actual = $this->wP_Widget->form_callback($widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm_callback1()
{
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == false (line 486)
    // if (-1 == $widget_args['number']) == false (line 493)
    // if (\false !== $instance) == true (line 515)

    $actual = $this->wP_Widget->form_callback($widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm_callback2()
{
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == false (line 486)
    // if (-1 == $widget_args['number']) == true (line 493)
    // if (\false !== $instance) == false (line 515)

    $actual = $this->wP_Widget->form_callback($widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm_callback3()
{
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == false (line 486)
    // if (-1 == $widget_args['number']) == true (line 493)
    // if (\false !== $instance) == true (line 515)

    $actual = $this->wP_Widget->form_callback($widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm_callback4()
{
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == true (line 486)
    // if (-1 == $widget_args['number']) == false (line 493)
    // if (\false !== $instance) == false (line 515)

    $actual = $this->wP_Widget->form_callback($widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm_callback5()
{
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == true (line 486)
    // if (-1 == $widget_args['number']) == false (line 493)
    // if (\false !== $instance) == true (line 515)

    $actual = $this->wP_Widget->form_callback($widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm_callback6()
{
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == true (line 486)
    // if (-1 == $widget_args['number']) == true (line 493)
    // if (\false !== $instance) == false (line 515)

    $actual = $this->wP_Widget->form_callback($widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm_callback7()
{
    $widget_args = m::mock('UntypedParameter_widget_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($widget_args)) == true (line 486)
    // if (-1 == $widget_args['number']) == true (line 493)
    // if (\false !== $instance) == true (line 515)

    $actual = $this->wP_Widget->form_callback($widget_args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register_one0()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget->_register_one($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave_settings0()
{
    $settings = m::mock('UntypedParameter_settings_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget->save_settings($settings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_settings0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $settings) == false (line 576)
    // if (!\is_array($settings) && !($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator)) == false (line 585)
    // if (!empty($settings) && !isset($settings['_multiwidget'])) == false (line 589)

    $actual = $this->wP_Widget->get_settings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_settings1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $settings) == false (line 576)
    // if (!\is_array($settings) && !($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator)) == false (line 585)
    // if (!empty($settings) && !isset($settings['_multiwidget'])) == true (line 589)

    $actual = $this->wP_Widget->get_settings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_settings2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $settings) == false (line 576)
    // if (!\is_array($settings) && !($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator)) == true (line 585)
    // if (!empty($settings) && !isset($settings['_multiwidget'])) == false (line 589)

    $actual = $this->wP_Widget->get_settings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_settings3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $settings) == false (line 576)
    // if (!\is_array($settings) && !($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator)) == true (line 585)
    // if (!empty($settings) && !isset($settings['_multiwidget'])) == true (line 589)

    $actual = $this->wP_Widget->get_settings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_settings4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $settings) == true (line 576)
    // if (isset($this->alt_option_name)) == false (line 577)
    // if (!\is_array($settings) && !($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator)) == false (line 585)
    // if (!empty($settings) && !isset($settings['_multiwidget'])) == false (line 589)

    $actual = $this->wP_Widget->get_settings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_settings5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $settings) == true (line 576)
    // if (isset($this->alt_option_name)) == false (line 577)
    // if (!\is_array($settings) && !($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator)) == false (line 585)
    // if (!empty($settings) && !isset($settings['_multiwidget'])) == true (line 589)

    $actual = $this->wP_Widget->get_settings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_settings6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $settings) == true (line 576)
    // if (isset($this->alt_option_name)) == false (line 577)
    // if (!\is_array($settings) && !($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator)) == true (line 585)
    // if (!empty($settings) && !isset($settings['_multiwidget'])) == false (line 589)

    $actual = $this->wP_Widget->get_settings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_settings7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $settings) == true (line 576)
    // if (isset($this->alt_option_name)) == false (line 577)
    // if (!\is_array($settings) && !($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator)) == true (line 585)
    // if (!empty($settings) && !isset($settings['_multiwidget'])) == true (line 589)

    $actual = $this->wP_Widget->get_settings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_settings8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $settings) == true (line 576)
    // if (isset($this->alt_option_name)) == true (line 577)
    // if (!\is_array($settings) && !($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator)) == false (line 585)
    // if (!empty($settings) && !isset($settings['_multiwidget'])) == false (line 589)

    $actual = $this->wP_Widget->get_settings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_settings9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $settings) == true (line 576)
    // if (isset($this->alt_option_name)) == true (line 577)
    // if (!\is_array($settings) && !($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator)) == false (line 585)
    // if (!empty($settings) && !isset($settings['_multiwidget'])) == true (line 589)

    $actual = $this->wP_Widget->get_settings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_settings10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $settings) == true (line 576)
    // if (isset($this->alt_option_name)) == true (line 577)
    // if (!\is_array($settings) && !($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator)) == true (line 585)
    // if (!empty($settings) && !isset($settings['_multiwidget'])) == false (line 589)

    $actual = $this->wP_Widget->get_settings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_settings11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $settings) == true (line 576)
    // if (isset($this->alt_option_name)) == true (line 577)
    // if (!\is_array($settings) && !($settings instanceof \ArrayObject || $settings instanceof \ArrayIterator)) == true (line 585)
    // if (!empty($settings) && !isset($settings['_multiwidget'])) == true (line 589)

    $actual = $this->wP_Widget->get_settings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
