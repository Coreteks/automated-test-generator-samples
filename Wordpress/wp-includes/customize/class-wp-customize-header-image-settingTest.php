<?php

namespace tests;

use Mockery as m;
use WP_Customize_Header_Image_Setting;

class WP_Customize_Header_Image_SettingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Header_Image_Setting
*/
protected $wP_Customize_Header_Image_Setting;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Header_Image_Setting = new \WP_Customize_Header_Image_Setting();
}

public function testUpdate0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($custom_image_header)) == false (line 33)
    // if (!$value) == false (line 43)
    // if (\is_array($value) && isset($value['choice'])) == false (line 47)

    $actual = $this->wP_Customize_Header_Image_Setting->update($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($custom_image_header)) == false (line 33)
    // if (!$value) == false (line 43)
    // if (\is_array($value) && isset($value['choice'])) == true (line 47)

    $actual = $this->wP_Customize_Header_Image_Setting->update($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate2()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($custom_image_header)) == false (line 33)
    // if (!$value) == true (line 43)
    // if (\is_array($value) && isset($value['choice'])) == false (line 47)

    $actual = $this->wP_Customize_Header_Image_Setting->update($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate3()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($custom_image_header)) == false (line 33)
    // if (!$value) == true (line 43)
    // if (\is_array($value) && isset($value['choice'])) == true (line 47)

    $actual = $this->wP_Customize_Header_Image_Setting->update($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate4()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($custom_image_header)) == true (line 33)
    // if (!$value) == false (line 43)
    // if (\is_array($value) && isset($value['choice'])) == false (line 47)

    $actual = $this->wP_Customize_Header_Image_Setting->update($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate5()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($custom_image_header)) == true (line 33)
    // if (!$value) == false (line 43)
    // if (\is_array($value) && isset($value['choice'])) == true (line 47)

    $actual = $this->wP_Customize_Header_Image_Setting->update($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate6()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($custom_image_header)) == true (line 33)
    // if (!$value) == true (line 43)
    // if (\is_array($value) && isset($value['choice'])) == false (line 47)

    $actual = $this->wP_Customize_Header_Image_Setting->update($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate7()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($custom_image_header)) == true (line 33)
    // if (!$value) == true (line 43)
    // if (\is_array($value) && isset($value['choice'])) == true (line 47)

    $actual = $this->wP_Customize_Header_Image_Setting->update($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
