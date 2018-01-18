<?php

namespace tests;

use Mockery as m;
use WP_Customize_Background_Image_Setting;

class WP_Customize_Background_Image_SettingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Background_Image_Setting
*/
protected $wP_Customize_Background_Image_Setting;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Background_Image_Setting = new \WP_Customize_Background_Image_Setting();
}

public function testUpdate0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Background_Image_Setting->update($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
