<?php

namespace tests;

use Mockery as m;
use WP_Widget_Text;

class WP_Widget_TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Text
*/
protected $wP_Widget_Text;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Text = new \WP_Widget_Text();
}

public function test_register_one0()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->registered) == false (line 53)

    $actual = $this->wP_Widget_Text->_register_one($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_register_one1()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->registered) == true (line 53)

    $actual = $this->wP_Widget_Text->_register_one($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_legacy_instance0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['visual'])) == false (line 84)
    // if (isset($instance['filter']) && 'content' === $instance['filter']) == false (line 89)
    // if (empty($instance['text'])) == false (line 94)
    // if (!$wpautop && $has_line_breaks) == false (line 102)
    // if (\false !== \strpos($instance['text'], '<!--')) == false (line 107)
    // if (!\class_exists('DOMDocument')) == false (line 112)

    $actual = $this->wP_Widget_Text->is_legacy_instance($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_legacy_instance1()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['visual'])) == false (line 84)
    // if (isset($instance['filter']) && 'content' === $instance['filter']) == false (line 89)
    // if (empty($instance['text'])) == false (line 94)
    // if (!$wpautop && $has_line_breaks) == false (line 102)
    // if (\false !== \strpos($instance['text'], '<!--')) == false (line 107)
    // if (!\class_exists('DOMDocument')) == false (line 112)
    // if (!isset($safe_elements_attributes[$tag_name])) == false (line 159)
    // if (!\in_array($tag_name, $safe_empty_elements, \true) && '' === \trim($element->textContent)) == false (line 164)

    $actual = $this->wP_Widget_Text->is_legacy_instance($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_legacy_instance2()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['visual'])) == false (line 84)
    // if (isset($instance['filter']) && 'content' === $instance['filter']) == false (line 89)
    // if (empty($instance['text'])) == false (line 94)
    // if (!$wpautop && $has_line_breaks) == false (line 102)
    // if (\false !== \strpos($instance['text'], '<!--')) == false (line 107)
    // if (!\class_exists('DOMDocument')) == false (line 112)
    // if (!isset($safe_elements_attributes[$tag_name])) == false (line 159)
    // if (!\in_array($tag_name, $safe_empty_elements, \true) && '' === \trim($element->textContent)) == false (line 164)
    // if (!isset($safe_elements_attributes[$tag_name][$attribute_name])) == false (line 173)

    $actual = $this->wP_Widget_Text->is_legacy_instance($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_legacy_instance3()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['visual'])) == false (line 84)
    // if (isset($instance['filter']) && 'content' === $instance['filter']) == false (line 89)
    // if (empty($instance['text'])) == false (line 94)
    // if (!$wpautop && $has_line_breaks) == false (line 102)
    // if (\false !== \strpos($instance['text'], '<!--')) == false (line 107)
    // if (!\class_exists('DOMDocument')) == false (line 112)
    // if (!isset($safe_elements_attributes[$tag_name])) == false (line 159)
    // if (!\in_array($tag_name, $safe_empty_elements, \true) && '' === \trim($element->textContent)) == false (line 164)
    // if (!isset($safe_elements_attributes[$tag_name][$attribute_name])) == true (line 173)

    $actual = $this->wP_Widget_Text->is_legacy_instance($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_legacy_instance4()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['visual'])) == false (line 84)
    // if (isset($instance['filter']) && 'content' === $instance['filter']) == false (line 89)
    // if (empty($instance['text'])) == false (line 94)
    // if (!$wpautop && $has_line_breaks) == false (line 102)
    // if (\false !== \strpos($instance['text'], '<!--')) == false (line 107)
    // if (!\class_exists('DOMDocument')) == false (line 112)
    // if (!isset($safe_elements_attributes[$tag_name])) == false (line 159)
    // if (!\in_array($tag_name, $safe_empty_elements, \true) && '' === \trim($element->textContent)) == true (line 164)

    $actual = $this->wP_Widget_Text->is_legacy_instance($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_legacy_instance5()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['visual'])) == false (line 84)
    // if (isset($instance['filter']) && 'content' === $instance['filter']) == false (line 89)
    // if (empty($instance['text'])) == false (line 94)
    // if (!$wpautop && $has_line_breaks) == false (line 102)
    // if (\false !== \strpos($instance['text'], '<!--')) == false (line 107)
    // if (!\class_exists('DOMDocument')) == false (line 112)
    // if (!isset($safe_elements_attributes[$tag_name])) == true (line 159)

    $actual = $this->wP_Widget_Text->is_legacy_instance($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_legacy_instance6()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['visual'])) == false (line 84)
    // if (isset($instance['filter']) && 'content' === $instance['filter']) == false (line 89)
    // if (empty($instance['text'])) == false (line 94)
    // if (!$wpautop && $has_line_breaks) == false (line 102)
    // if (\false !== \strpos($instance['text'], '<!--')) == false (line 107)
    // if (!\class_exists('DOMDocument')) == true (line 112)

    $actual = $this->wP_Widget_Text->is_legacy_instance($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_legacy_instance7()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['visual'])) == false (line 84)
    // if (isset($instance['filter']) && 'content' === $instance['filter']) == false (line 89)
    // if (empty($instance['text'])) == false (line 94)
    // if (!$wpautop && $has_line_breaks) == false (line 102)
    // if (\false !== \strpos($instance['text'], '<!--')) == true (line 107)

    $actual = $this->wP_Widget_Text->is_legacy_instance($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_legacy_instance8()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['visual'])) == false (line 84)
    // if (isset($instance['filter']) && 'content' === $instance['filter']) == false (line 89)
    // if (empty($instance['text'])) == false (line 94)
    // if (!$wpautop && $has_line_breaks) == true (line 102)

    $actual = $this->wP_Widget_Text->is_legacy_instance($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_legacy_instance9()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['visual'])) == false (line 84)
    // if (isset($instance['filter']) && 'content' === $instance['filter']) == false (line 89)
    // if (empty($instance['text'])) == true (line 94)

    $actual = $this->wP_Widget_Text->is_legacy_instance($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_legacy_instance10()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['visual'])) == false (line 84)
    // if (isset($instance['filter']) && 'content' === $instance['filter']) == true (line 89)

    $actual = $this->wP_Widget_Text->is_legacy_instance($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_legacy_instance11()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($instance['visual'])) == true (line 84)

    $actual = $this->wP_Widget_Text->is_legacy_instance($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_filter_gallery_shortcode_attrs0()
{
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_singular() && empty($attrs['id']) && empty($attrs['include'])) == false (line 195)

    $actual = $this->wP_Widget_Text->_filter_gallery_shortcode_attrs($attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_filter_gallery_shortcode_attrs1()
{
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_singular() && empty($attrs['id']) && empty($attrs['include'])) == true (line 195)

    $actual = $this->wP_Widget_Text->_filter_gallery_shortcode_attrs($attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget0()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget1()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget2()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget3()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget4()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget5()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget6()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget7()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget8()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget9()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget10()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget11()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget12()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget13()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget14()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget15()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget16()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget17()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget18()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget19()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget20()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget21()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget22()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget23()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget24()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget25()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget26()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget27()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget28()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget29()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget30()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget31()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget32()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget33()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget34()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget35()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget36()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget37()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget38()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget39()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget40()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget41()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget42()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget43()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget44()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget45()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget46()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget47()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget48()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget49()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget50()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget51()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget52()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget53()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget54()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget55()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget56()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget57()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget58()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget59()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget60()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget61()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget62()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget63()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget64()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget65()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget66()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget67()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget68()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget69()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget70()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget71()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget72()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget73()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget74()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget75()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget76()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget77()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget78()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget79()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget80()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget81()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget82()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget83()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget84()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget85()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget86()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget87()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget88()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget89()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget90()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget91()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget92()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget93()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget94()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget95()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget96()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget97()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget98()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget99()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget100()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget101()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget102()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget103()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget104()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget105()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget106()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget107()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget108()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget109()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget110()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget111()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget112()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget113()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget114()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget115()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget116()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget117()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget118()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget119()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget120()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget121()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget122()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget123()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget124()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget125()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget126()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget127()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget128()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget129()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget130()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget131()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget132()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget133()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget134()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget135()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget136()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget137()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget138()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget139()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget140()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget141()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget142()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget143()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget144()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget145()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget146()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget147()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget148()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget149()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget150()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget151()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget152()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget153()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget154()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget155()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget156()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget157()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget158()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget159()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget160()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget161()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget162()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget163()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget164()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget165()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget166()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget167()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget168()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget169()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget170()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget171()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget172()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget173()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget174()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget175()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget176()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget177()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget178()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget179()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget180()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget181()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget182()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget183()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget184()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget185()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget186()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget187()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget188()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget189()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget190()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget191()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget192()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget193()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget194()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget195()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget196()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget197()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget198()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget199()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget200()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget201()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget202()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget203()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget204()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget205()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget206()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget207()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget208()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget209()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget210()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget211()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget212()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget213()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget214()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget215()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget216()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget217()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget218()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget219()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget220()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget221()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget222()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget223()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == false (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget224()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget225()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget226()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget227()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget228()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget229()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget230()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget231()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget232()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget233()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget234()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget235()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget236()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget237()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget238()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget239()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget240()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget241()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget242()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget243()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget244()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget245()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget246()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget247()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget248()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget249()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget250()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget251()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget252()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget253()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget254()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget255()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget256()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget257()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget258()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget259()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget260()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget261()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget262()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget263()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget264()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget265()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget266()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget267()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget268()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget269()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget270()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget271()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget272()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget273()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget274()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget275()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget276()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget277()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget278()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget279()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget280()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget281()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget282()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget283()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget284()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget285()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget286()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget287()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget288()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget289()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget290()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget291()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget292()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget293()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget294()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget295()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget296()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget297()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget298()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget299()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget300()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget301()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget302()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget303()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget304()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget305()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget306()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget307()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget308()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget309()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget310()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget311()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget312()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget313()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget314()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget315()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget316()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget317()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget318()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget319()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget320()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget321()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget322()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget323()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget324()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget325()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget326()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget327()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget328()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget329()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget330()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget331()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget332()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget333()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget334()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget335()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == false (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget336()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget337()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget338()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget339()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget340()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget341()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget342()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget343()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget344()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget345()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget346()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget347()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget348()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget349()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget350()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget351()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget352()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget353()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget354()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget355()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget356()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget357()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget358()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget359()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget360()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget361()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget362()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget363()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget364()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget365()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget366()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget367()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget368()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget369()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget370()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget371()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget372()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget373()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget374()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget375()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget376()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget377()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget378()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget379()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget380()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget381()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget382()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget383()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget384()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget385()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget386()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget387()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget388()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget389()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget390()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget391()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == false (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget392()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget393()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget394()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget395()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget396()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget397()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget398()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget399()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget400()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget401()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget402()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget403()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget404()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget405()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget406()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget407()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget408()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget409()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget410()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget411()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget412()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget413()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget414()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget415()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget416()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget417()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget418()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget419()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == false (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget420()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget421()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget422()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget423()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget424()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget425()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget426()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget427()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget428()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget429()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget430()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget431()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == false (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget432()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget433()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget434()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget435()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == false (line 298)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget436()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget437()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget438()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget439()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == false (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget440()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget441()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget442()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget443()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == false (line 270)
    // if (!empty($instance['filter'])) == true (line 286)
    // if (\has_filter('widget_text_content', 'do_shortcode') && !$widget_text_do_shortcode_priority) == true (line 298)
    // if (!empty($instance['filter'])) == true (line 299)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget444()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget445()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == false (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget446()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == false (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget447()
{
    $args = m::mock('UntypedParameter_args_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_visual_text_widget) == true (line 224)
    // if ($is_visual_text_widget) == true (line 227)
    // if ($should_suspend_legacy_shortcode_support) == true (line 240)
    // if (\is_singular()) == true (line 246)
    // if ($is_visual_text_widget) == true (line 270)
    // if ($should_suspend_legacy_shortcode_support) == true (line 311)
    // if (!empty($title)) == true (line 316)

    $actual = $this->wP_Widget_Text->widget($args, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInject_video_max_width_style0()
{
    $matches = m::mock('UntypedParameter_matches_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Text->inject_video_max_width_style($matches);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate1()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate2()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate3()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate4()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate5()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate6()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate7()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate8()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate9()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate10()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate11()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate12()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate13()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate14()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate15()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == false (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate16()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate17()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate18()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate19()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate20()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate21()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate22()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate23()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == false (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate24()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate25()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate26()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate27()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == false (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate28()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate29()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == false (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate30()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == false (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate31()
{
    $new_instance = m::mock('UntypedParameter_new_instance_');
    $old_instance = m::mock('UntypedParameter_old_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\current_user_can('unfiltered_html')) == true (line 368)
    // if (isset($old_instance['filter']) && 'content' === $old_instance['filter']) == true (line 377)
    // if ('content' === $new_instance['filter']) == true (line 380)
    // if (isset($new_instance['visual'])) == true (line 384)
    // if (!empty($instance['visual'])) == true (line 389)

    $actual = $this->wP_Widget_Text->update($new_instance, $old_instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_admin_scripts0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Text->enqueue_admin_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_legacy_instance($instance)) == false (line 428)
    // if (!isset($instance['visual'])) == false (line 461)

    $actual = $this->wP_Widget_Text->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm1()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_legacy_instance($instance)) == false (line 428)
    // if (!isset($instance['visual'])) == true (line 461)

    $actual = $this->wP_Widget_Text->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm2()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_legacy_instance($instance)) == true (line 428)
    // if (\user_can_richedit()) == false (line 431)
    // if (\user_can_richedit()) == false (line 442)

    $actual = $this->wP_Widget_Text->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm3()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_legacy_instance($instance)) == true (line 428)
    // if (\user_can_richedit()) == false (line 431)
    // if (\user_can_richedit()) == true (line 442)

    $actual = $this->wP_Widget_Text->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm4()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_legacy_instance($instance)) == true (line 428)
    // if (\user_can_richedit()) == true (line 431)
    // if (\user_can_richedit()) == false (line 442)

    $actual = $this->wP_Widget_Text->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm5()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_legacy_instance($instance)) == true (line 428)
    // if (\user_can_richedit()) == true (line 431)
    // if (\user_can_richedit()) == true (line 442)

    $actual = $this->wP_Widget_Text->form($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_control_template_scripts0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array('text_widget_custom_html', $dismissed_pointers, \true)) == false (line 494)
    // if (!\in_array('text_widget_paste_html', $dismissed_pointers, \true)) == false (line 513)

    $actual = $this->wP_Widget_Text->render_control_template_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_control_template_scripts1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array('text_widget_custom_html', $dismissed_pointers, \true)) == false (line 494)
    // if (!\in_array('text_widget_paste_html', $dismissed_pointers, \true)) == true (line 513)

    $actual = $this->wP_Widget_Text->render_control_template_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_control_template_scripts2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array('text_widget_custom_html', $dismissed_pointers, \true)) == true (line 494)
    // if (\is_customize_preview()) == false (line 498)
    // if (!\in_array('text_widget_paste_html', $dismissed_pointers, \true)) == false (line 513)

    $actual = $this->wP_Widget_Text->render_control_template_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_control_template_scripts3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array('text_widget_custom_html', $dismissed_pointers, \true)) == true (line 494)
    // if (\is_customize_preview()) == false (line 498)
    // if (!\in_array('text_widget_paste_html', $dismissed_pointers, \true)) == true (line 513)

    $actual = $this->wP_Widget_Text->render_control_template_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_control_template_scripts4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array('text_widget_custom_html', $dismissed_pointers, \true)) == true (line 494)
    // if (\is_customize_preview()) == true (line 498)
    // if (!\in_array('text_widget_paste_html', $dismissed_pointers, \true)) == false (line 513)

    $actual = $this->wP_Widget_Text->render_control_template_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_control_template_scripts5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\in_array('text_widget_custom_html', $dismissed_pointers, \true)) == true (line 494)
    // if (\is_customize_preview()) == true (line 498)
    // if (!\in_array('text_widget_paste_html', $dismissed_pointers, \true)) == true (line 513)

    $actual = $this->wP_Widget_Text->render_control_template_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
