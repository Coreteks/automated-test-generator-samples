<?php

namespace tests;

use Mockery as m;
use WP_Customize_Custom_CSS_Setting;

class WP_Customize_Custom_CSS_SettingTest extends \PHPUnit_Framework_TestCase
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
* @var \WP_Customize_Custom_CSS_Setting
*/
protected $wP_Customize_Custom_CSS_Setting;

public function setUp()
{
    parent::setUp();

    $this->_manager = null;
    $this->_id = null;
    $this->_args = null;
    $this->wP_Customize_Custom_CSS_Setting = new \WP_Customize_Custom_CSS_Setting($this->_manager, $this->_id, $this->_args);
}

public function testPreview0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == false (line 84)

    $actual = $this->wP_Customize_Custom_CSS_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == true (line 84)

    $actual = $this->wP_Customize_Custom_CSS_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_previewed_wp_get_custom_css0()
{
    $css = m::mock('UntypedParameter_css_');
    $stylesheet = m::mock('UntypedParameter_stylesheet_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stylesheet === $this->stylesheet) == false (line 105)

    $actual = $this->wP_Customize_Custom_CSS_Setting->filter_previewed_wp_get_custom_css($css, $stylesheet);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_previewed_wp_get_custom_css1()
{
    $css = m::mock('UntypedParameter_css_');
    $stylesheet = m::mock('UntypedParameter_stylesheet_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stylesheet === $this->stylesheet) == true (line 105)
    // if (!\is_null($customized_value)) == false (line 107)

    $actual = $this->wP_Customize_Custom_CSS_Setting->filter_previewed_wp_get_custom_css($css, $stylesheet);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_previewed_wp_get_custom_css2()
{
    $css = m::mock('UntypedParameter_css_');
    $stylesheet = m::mock('UntypedParameter_stylesheet_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stylesheet === $this->stylesheet) == true (line 105)
    // if (!\is_null($customized_value)) == true (line 107)

    $actual = $this->wP_Customize_Custom_CSS_Setting->filter_previewed_wp_get_custom_css($css, $stylesheet);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == false (line 123)
    // if ($post) == false (line 132)
    // if (empty($value)) == false (line 135)

    $actual = $this->wP_Customize_Custom_CSS_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == false (line 123)
    // if ($post) == false (line 132)
    // if (empty($value)) == true (line 135)

    $actual = $this->wP_Customize_Custom_CSS_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == false (line 123)
    // if ($post) == true (line 132)
    // if (empty($value)) == false (line 135)

    $actual = $this->wP_Customize_Custom_CSS_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == false (line 123)
    // if ($post) == true (line 132)
    // if (empty($value)) == true (line 135)

    $actual = $this->wP_Customize_Custom_CSS_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == true (line 123)
    // if (\null !== $post_value) == false (line 125)
    // if ($post) == false (line 132)
    // if (empty($value)) == false (line 135)

    $actual = $this->wP_Customize_Custom_CSS_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == true (line 123)
    // if (\null !== $post_value) == false (line 125)
    // if ($post) == false (line 132)
    // if (empty($value)) == true (line 135)

    $actual = $this->wP_Customize_Custom_CSS_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == true (line 123)
    // if (\null !== $post_value) == false (line 125)
    // if ($post) == true (line 132)
    // if (empty($value)) == false (line 135)

    $actual = $this->wP_Customize_Custom_CSS_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == true (line 123)
    // if (\null !== $post_value) == false (line 125)
    // if ($post) == true (line 132)
    // if (empty($value)) == true (line 135)

    $actual = $this->wP_Customize_Custom_CSS_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_previewed) == true (line 123)
    // if (\null !== $post_value) == true (line 125)

    $actual = $this->wP_Customize_Custom_CSS_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate0()
{
    $css = m::mock('UntypedParameter_css_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('#</?\\w+#', $css)) == false (line 160)
    // if (empty($validity->errors)) == false (line 164)

    $actual = $this->wP_Customize_Custom_CSS_Setting->validate($css);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate1()
{
    $css = m::mock('UntypedParameter_css_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('#</?\\w+#', $css)) == false (line 160)
    // if (empty($validity->errors)) == true (line 164)

    $actual = $this->wP_Customize_Custom_CSS_Setting->validate($css);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate2()
{
    $css = m::mock('UntypedParameter_css_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('#</?\\w+#', $css)) == true (line 160)
    // if (empty($validity->errors)) == false (line 164)

    $actual = $this->wP_Customize_Custom_CSS_Setting->validate($css);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate3()
{
    $css = m::mock('UntypedParameter_css_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match('#</?\\w+#', $css)) == true (line 160)
    // if (empty($validity->errors)) == true (line 164)

    $actual = $this->wP_Customize_Custom_CSS_Setting->validate($css);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $css = m::mock('UntypedParameter_css_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($css)) == false (line 179)
    // if ($r instanceof \WP_Error) == false (line 189)
    // if ($this->manager->get_stylesheet() === $this->stylesheet) == false (line 195)

    $actual = $this->wP_Customize_Custom_CSS_Setting->update($css);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate1()
{
    $css = m::mock('UntypedParameter_css_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($css)) == false (line 179)
    // if ($r instanceof \WP_Error) == false (line 189)
    // if ($this->manager->get_stylesheet() === $this->stylesheet) == true (line 195)

    $actual = $this->wP_Customize_Custom_CSS_Setting->update($css);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate2()
{
    $css = m::mock('UntypedParameter_css_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($css)) == false (line 179)
    // if ($r instanceof \WP_Error) == true (line 189)

    $actual = $this->wP_Customize_Custom_CSS_Setting->update($css);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate3()
{
    $css = m::mock('UntypedParameter_css_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($css)) == true (line 179)
    // if ($r instanceof \WP_Error) == false (line 189)
    // if ($this->manager->get_stylesheet() === $this->stylesheet) == false (line 195)

    $actual = $this->wP_Customize_Custom_CSS_Setting->update($css);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate4()
{
    $css = m::mock('UntypedParameter_css_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($css)) == true (line 179)
    // if ($r instanceof \WP_Error) == false (line 189)
    // if ($this->manager->get_stylesheet() === $this->stylesheet) == true (line 195)

    $actual = $this->wP_Customize_Custom_CSS_Setting->update($css);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate5()
{
    $css = m::mock('UntypedParameter_css_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($css)) == true (line 179)
    // if ($r instanceof \WP_Error) == true (line 189)

    $actual = $this->wP_Customize_Custom_CSS_Setting->update($css);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
