<?php

namespace tests;

use Mockery as m;
use WP_Widget_Media_Video;

class WP_Widget_Media_VideoTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Widget_Media_Video
*/
protected $wP_Widget_Media_Video;

public function setUp()
{
    parent::setUp();

    $this->wP_Widget_Media_Video = new \WP_Widget_Media_Video();
}

public function testGet_instance_schema0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Video->get_instance_schema();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_instance_schema1()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Video->get_instance_schema();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media0()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == false (line 115)
    // if ($attachment) == false (line 120)
    // if (empty($src)) == false (line 124)
    // if ($attachment || \preg_match($youtube_pattern, $src) || \preg_match($vimeo_pattern, $src)) == false (line 131)

    $actual = $this->wP_Widget_Media_Video->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media1()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == false (line 115)
    // if ($attachment) == false (line 120)
    // if (empty($src)) == false (line 124)
    // if ($attachment || \preg_match($youtube_pattern, $src) || \preg_match($vimeo_pattern, $src)) == true (line 131)

    $actual = $this->wP_Widget_Media_Video->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media2()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == false (line 115)
    // if ($attachment) == false (line 120)
    // if (empty($src)) == true (line 124)

    $actual = $this->wP_Widget_Media_Video->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media3()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == false (line 115)
    // if ($attachment) == true (line 120)
    // if (empty($src)) == false (line 124)
    // if ($attachment || \preg_match($youtube_pattern, $src) || \preg_match($vimeo_pattern, $src)) == false (line 131)

    $actual = $this->wP_Widget_Media_Video->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media4()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == false (line 115)
    // if ($attachment) == true (line 120)
    // if (empty($src)) == false (line 124)
    // if ($attachment || \preg_match($youtube_pattern, $src) || \preg_match($vimeo_pattern, $src)) == true (line 131)

    $actual = $this->wP_Widget_Media_Video->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media5()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == false (line 115)
    // if ($attachment) == true (line 120)
    // if (empty($src)) == true (line 124)

    $actual = $this->wP_Widget_Media_Video->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media6()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == true (line 115)
    // if ($attachment) == false (line 120)
    // if (empty($src)) == false (line 124)
    // if ($attachment || \preg_match($youtube_pattern, $src) || \preg_match($vimeo_pattern, $src)) == false (line 131)

    $actual = $this->wP_Widget_Media_Video->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media7()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == true (line 115)
    // if ($attachment) == false (line 120)
    // if (empty($src)) == false (line 124)
    // if ($attachment || \preg_match($youtube_pattern, $src) || \preg_match($vimeo_pattern, $src)) == true (line 131)

    $actual = $this->wP_Widget_Media_Video->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media8()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == true (line 115)
    // if ($attachment) == false (line 120)
    // if (empty($src)) == true (line 124)

    $actual = $this->wP_Widget_Media_Video->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media9()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == true (line 115)
    // if ($attachment) == true (line 120)
    // if (empty($src)) == false (line 124)
    // if ($attachment || \preg_match($youtube_pattern, $src) || \preg_match($vimeo_pattern, $src)) == false (line 131)

    $actual = $this->wP_Widget_Media_Video->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media10()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == true (line 115)
    // if ($attachment) == true (line 120)
    // if (empty($src)) == false (line 124)
    // if ($attachment || \preg_match($youtube_pattern, $src) || \preg_match($vimeo_pattern, $src)) == true (line 131)

    $actual = $this->wP_Widget_Media_Video->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_media11()
{
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_attachment_with_mime_type($instance['attachment_id'], $this->widget_options['mime_type'])) == true (line 115)
    // if ($attachment) == true (line 120)
    // if (empty($src)) == true (line 124)

    $actual = $this->wP_Widget_Media_Video->render_media($instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInject_video_max_width_style0()
{
    $html = m::mock('UntypedParameter_html_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Video->inject_video_max_width_style($html);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_preview_scripts0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('mediaelement' === \apply_filters('wp_video_shortcode_library', 'mediaelement')) == false (line 175)

    $actual = $this->wP_Widget_Media_Video->enqueue_preview_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_preview_scripts1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('mediaelement' === \apply_filters('wp_video_shortcode_library', 'mediaelement')) == true (line 175)

    $actual = $this->wP_Widget_Media_Video->enqueue_preview_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_admin_scripts0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Video->enqueue_admin_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_admin_scripts1()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Video->enqueue_admin_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_control_template_scripts0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Widget_Media_Video->render_control_template_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
