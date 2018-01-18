<?php

namespace tests;

use Mockery as m;
use WP_Customize_Theme_Control;

class WP_Customize_Theme_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Theme_Control
*/
protected $wP_Customize_Theme_Control;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Theme_Control = new \WP_Customize_Theme_Control();
}

public function testTo_json0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Theme_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Theme_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent_template0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Theme_Control->content_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
