<?php

namespace tests;

use Mockery as m;
use WP_Widget_Media_Gallery;

class WP_Widget_Media_GalleryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Media_Gallery
*/
protected $wP_Widget_Media_Gallery;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Media_Gallery = new \WP_Widget_Media_Gallery();
}

public function testGet_instance_schema0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Gallery->get_instance_schema();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($instance['orderby_random']) == false (line 120)

    $actual = $this->wP_Widget_Media_Gallery->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media1()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($instance['orderby_random']) == true (line 120)

    $actual = $this->wP_Widget_Media_Gallery->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_admin_scripts0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Gallery->enqueue_admin_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_admin_scripts1()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Gallery->enqueue_admin_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_control_template_scripts0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Gallery->render_control_template_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
