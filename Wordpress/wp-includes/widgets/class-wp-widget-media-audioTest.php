<?php

namespace tests;

use Mockery as m;
use WP_Widget_Media_Audio;

class WP_Widget_Media_AudioTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Media_Audio
*/
protected $wP_Widget_Media_Audio;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Media_Audio = new \WP_Widget_Media_Audio();
}

public function testGet_instance_schema0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Audio->get_instance_schema();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance_schema1()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Audio->get_instance_schema();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == false (line 104)
    // if ($attachment) == false (line 108)

    $actual = $this->wP_Widget_Media_Audio->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media1()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == false (line 104)
    // if ($attachment) == true (line 108)

    $actual = $this->wP_Widget_Media_Audio->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media2()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == true (line 104)
    // if ($attachment) == false (line 108)

    $actual = $this->wP_Widget_Media_Audio->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media3()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == true (line 104)
    // if ($attachment) == true (line 108)

    $actual = $this->wP_Widget_Media_Audio->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_preview_scripts0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('mediaelement' === \apply_filters('wp_audio_shortcode_library', 'mediaelement')) == false (line 134)

    $actual = $this->wP_Widget_Media_Audio->enqueue_preview_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_preview_scripts1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('mediaelement' === \apply_filters('wp_audio_shortcode_library', 'mediaelement')) == true (line 134)

    $actual = $this->wP_Widget_Media_Audio->enqueue_preview_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_admin_scripts0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Audio->enqueue_admin_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_admin_scripts1()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Audio->enqueue_admin_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_control_template_scripts0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Audio->render_control_template_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
