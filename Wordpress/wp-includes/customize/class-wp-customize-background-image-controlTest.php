<?php

namespace tests;

use Mockery as m;
use WP_Customize_Background_Image_Control;

class WP_Customize_Background_Image_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_manager = null;
/**
* @var \WP_Customize_Background_Image_Control
*/
protected $wP_Customize_Background_Image_Control;

public function setUp()
{
    parent::setUp();

    $this->_manager = null;
    $this->wP_Customize_Background_Image_Control = new \WP_Customize_Background_Image_Control($this->_manager);
}

public function testEnqueue0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Background_Image_Control->enqueue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
