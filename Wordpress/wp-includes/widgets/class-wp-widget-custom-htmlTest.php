<?php

namespace tests;

use Mockery as m;
use WP_Widget_Custom_HTML;

class WP_Widget_Custom_HTMLTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Custom_HTML
*/
protected $wP_Widget_Custom_HTML;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Custom_HTML = new \WP_Widget_Custom_HTML();
}

public function test_register_one0()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->registered) == false (line 66)

    $actual = $this->wP_Widget_Custom_HTML->_register_one($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register_one1()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->registered) == true (line 66)

    $actual = $this->wP_Widget_Custom_HTML->_register_one($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_filter_gallery_shortcode_attrs0()
{
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_singular() && empty($attrs['id']) && empty($attrs['include'])) == false (line 95)

    $actual = $this->wP_Widget_Custom_HTML->_filter_gallery_shortcode_attrs($attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_filter_gallery_shortcode_attrs1()
{
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_singular() && empty($attrs['id']) && empty($attrs['include'])) == true (line 95)

    $actual = $this->wP_Widget_Custom_HTML->_filter_gallery_shortcode_attrs($attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_singular()) == false (line 116)
    // if (!empty($title)) == false (line 164)

    $actual = $this->wP_Widget_Custom_HTML->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget1()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_singular()) == false (line 116)
    // if (!empty($title)) == true (line 164)

    $actual = $this->wP_Widget_Custom_HTML->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget2()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_singular()) == true (line 116)
    // if (!empty($title)) == false (line 164)

    $actual = $this->wP_Widget_Custom_HTML->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget3()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_singular()) == true (line 116)
    // if (!empty($title)) == true (line 164)

    $actual = $this->wP_Widget_Custom_HTML->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 186)

    $actual = $this->wP_Widget_Custom_HTML->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate1()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 186)

    $actual = $this->wP_Widget_Custom_HTML->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_admin_scripts0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($settings)) == false (line 211)

    $actual = $this->wP_Widget_Custom_HTML->enqueue_admin_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_admin_scripts1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($settings)) == true (line 211)

    $actual = $this->wP_Widget_Custom_HTML->enqueue_admin_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Custom_HTML->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_control_template_scripts0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\current_user_can('unfiltered_html')) == false (line 266)

    $actual = $this->wP_Widget_Custom_HTML->render_control_template_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_control_template_scripts1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\current_user_can('unfiltered_html')) == true (line 266)
    // if (!empty($disallowed_html)) == false (line 272)

    $actual = $this->wP_Widget_Custom_HTML->render_control_template_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_control_template_scripts2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\current_user_can('unfiltered_html')) == true (line 266)
    // if (!empty($disallowed_html)) == true (line 272)

    $actual = $this->wP_Widget_Custom_HTML->render_control_template_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_help_text0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('false' !== \wp_get_current_user()->syntax_highlighting) == false (line 299)

    $actual = $this->wP_Widget_Custom_HTML->add_help_text();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_help_text1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('false' !== \wp_get_current_user()->syntax_highlighting) == true (line 299)

    $actual = $this->wP_Widget_Custom_HTML->add_help_text();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
