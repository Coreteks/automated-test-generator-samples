<?php

namespace tests;

use Mockery as m;
use WP_Customize_Background_Position_Control;

class WP_Customize_Background_Position_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Background_Position_Control
*/
protected $wP_Customize_Background_Position_Control;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Background_Position_Control = new \WP_Customize_Background_Position_Control();
}

public function testRender_content0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Background_Position_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent_template0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Background_Position_Control->content_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent_template1()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Background_Position_Control->content_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent_template2()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Background_Position_Control->content_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
