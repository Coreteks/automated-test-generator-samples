<?php

namespace tests;

use Mockery as m;
use WP_Customize_Nav_Menu_Control;

class WP_Customize_Nav_Menu_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Nav_Menu_Control
*/
protected $wP_Customize_Nav_Menu_Control;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Nav_Menu_Control = new \WP_Customize_Nav_Menu_Control();
}

public function testRender_content0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Nav_Menu_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent_template0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Nav_Menu_Control->content_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Nav_Menu_Control->json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
