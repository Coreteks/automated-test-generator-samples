<?php

namespace tests;

use Mockery as m;
use WP_Customize_Cropped_Image_Control;

class WP_Customize_Cropped_Image_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Cropped_Image_Control
*/
protected $wP_Customize_Cropped_Image_Control;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Cropped_Image_Control = new \WP_Customize_Cropped_Image_Control();
}

public function testEnqueue0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Cropped_Image_Control->enqueue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Cropped_Image_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
