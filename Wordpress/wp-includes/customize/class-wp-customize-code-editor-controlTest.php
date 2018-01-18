<?php

namespace tests;

use Mockery as m;
use WP_Customize_Code_Editor_Control;

class WP_Customize_Code_Editor_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Code_Editor_Control
*/
protected $wP_Customize_Code_Editor_Control;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Code_Editor_Control = new \WP_Customize_Code_Editor_Control();
}

public function testEnqueue0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Code_Editor_Control->enqueue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Code_Editor_Control->json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Code_Editor_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent_template0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Code_Editor_Control->content_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
