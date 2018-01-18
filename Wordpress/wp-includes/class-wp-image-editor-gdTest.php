<?php

namespace tests;

use Mockery as m;
use WP_Image_Editor_GD;

class WP_Image_Editor_GDTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Image_Editor_GD
*/
protected $wP_Image_Editor_GD;

public function setUp()
{
    parent::setUp();

    $this->wP_Image_Editor_GD = new \WP_Image_Editor_GD();
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image) == false (line 25)

    $actual = $this->wP_Image_Editor_GD->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image) == true (line 25)

    $actual = $this->wP_Image_Editor_GD->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\extension_loaded('gd') || !\function_exists('gd_info')) == false (line 42)
    // if (isset($args['methods']) && \in_array('rotate', $args['methods']) && !\function_exists('imagerotate')) == false (line 47)

    $actual = $this->wP_Image_Editor_GD->test($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest1()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\extension_loaded('gd') || !\function_exists('gd_info')) == false (line 42)
    // if (isset($args['methods']) && \in_array('rotate', $args['methods']) && !\function_exists('imagerotate')) == true (line 47)

    $actual = $this->wP_Image_Editor_GD->test($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest2()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\extension_loaded('gd') || !\function_exists('gd_info')) == true (line 42)

    $actual = $this->wP_Image_Editor_GD->test($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupports_mime_type0()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($mime_type) (line 69)
    // Case 'image/jpeg' == false (line 70)
    // Case 'image/png' == false (line 72)
    // Case 'image/gif' == false (line 74)

    $actual = $this->wP_Image_Editor_GD->supports_mime_type($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupports_mime_type1()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($mime_type) (line 69)
    // Case 'image/jpeg' == false (line 70)
    // Case 'image/png' == false (line 72)
    // Case 'image/gif' == true (line 74)

    $actual = $this->wP_Image_Editor_GD->supports_mime_type($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupports_mime_type2()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($mime_type) (line 69)
    // Case 'image/jpeg' == false (line 70)
    // Case 'image/png' == true (line 72)

    $actual = $this->wP_Image_Editor_GD->supports_mime_type($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupports_mime_type3()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($mime_type) (line 69)
    // Case 'image/jpeg' == true (line 70)

    $actual = $this->wP_Image_Editor_GD->supports_mime_type($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image) == false (line 89)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 93)
    // if (!\is_resource($this->image)) == false (line 102)
    // if (!$size) == false (line 107)
    // if (\function_exists('imagealphablending') && \function_exists('imagesavealpha')) == false (line 111)

    $actual = $this->wP_Image_Editor_GD->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image) == false (line 89)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 93)
    // if (!\is_resource($this->image)) == false (line 102)
    // if (!$size) == false (line 107)
    // if (\function_exists('imagealphablending') && \function_exists('imagesavealpha')) == true (line 111)

    $actual = $this->wP_Image_Editor_GD->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image) == false (line 89)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 93)
    // if (!\is_resource($this->image)) == false (line 102)
    // if (!$size) == true (line 107)

    $actual = $this->wP_Image_Editor_GD->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image) == false (line 89)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 93)
    // if (!\is_resource($this->image)) == true (line 102)

    $actual = $this->wP_Image_Editor_GD->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image) == false (line 89)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == true (line 93)

    $actual = $this->wP_Image_Editor_GD->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image) == true (line 89)

    $actual = $this->wP_Image_Editor_GD->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResize0()
{
    $max_w = m::mock('UntypedParameter_max_w_');
    $max_h = m::mock('UntypedParameter_max_h_');
    $crop = m::mock('UntypedParameter_crop_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->size['width'] == $max_w && $this->size['height'] == $max_h) == false (line 159)
    // if (\is_resource($resized)) == false (line 165)
    // if (\is_wp_error($resized)) == false (line 170)

    $actual = $this->wP_Image_Editor_GD->resize($max_w, $max_h, $crop);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResize1()
{
    $max_w = m::mock('UntypedParameter_max_w_');
    $max_h = m::mock('UntypedParameter_max_h_');
    $crop = m::mock('UntypedParameter_crop_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->size['width'] == $max_w && $this->size['height'] == $max_h) == false (line 159)
    // if (\is_resource($resized)) == false (line 165)
    // if (\is_wp_error($resized)) == true (line 170)

    $actual = $this->wP_Image_Editor_GD->resize($max_w, $max_h, $crop);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResize2()
{
    $max_w = m::mock('UntypedParameter_max_w_');
    $max_h = m::mock('UntypedParameter_max_h_');
    $crop = m::mock('UntypedParameter_crop_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->size['width'] == $max_w && $this->size['height'] == $max_h) == false (line 159)
    // if (\is_resource($resized)) == true (line 165)

    $actual = $this->wP_Image_Editor_GD->resize($max_w, $max_h, $crop);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResize3()
{
    $max_w = m::mock('UntypedParameter_max_w_');
    $max_h = m::mock('UntypedParameter_max_h_');
    $crop = m::mock('UntypedParameter_crop_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->size['width'] == $max_w && $this->size['height'] == $max_h) == true (line 159)

    $actual = $this->wP_Image_Editor_GD->resize($max_w, $max_h, $crop);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize0()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize1()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == false (line 232)
    // if (!isset($size_data['height'])) == false (line 235)
    // if (!isset($size_data['crop'])) == false (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == false (line 246)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize2()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == false (line 232)
    // if (!isset($size_data['height'])) == false (line 235)
    // if (!isset($size_data['crop'])) == false (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == false (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize3()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == false (line 232)
    // if (!isset($size_data['height'])) == false (line 235)
    // if (!isset($size_data['crop'])) == false (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == true (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize4()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == false (line 232)
    // if (!isset($size_data['height'])) == false (line 235)
    // if (!isset($size_data['crop'])) == true (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == false (line 246)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize5()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == false (line 232)
    // if (!isset($size_data['height'])) == false (line 235)
    // if (!isset($size_data['crop'])) == true (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == false (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize6()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == false (line 232)
    // if (!isset($size_data['height'])) == false (line 235)
    // if (!isset($size_data['crop'])) == true (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == true (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize7()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == false (line 232)
    // if (!isset($size_data['height'])) == true (line 235)
    // if (!isset($size_data['crop'])) == false (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == false (line 246)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize8()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == false (line 232)
    // if (!isset($size_data['height'])) == true (line 235)
    // if (!isset($size_data['crop'])) == false (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == false (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize9()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == false (line 232)
    // if (!isset($size_data['height'])) == true (line 235)
    // if (!isset($size_data['crop'])) == false (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == true (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize10()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == false (line 232)
    // if (!isset($size_data['height'])) == true (line 235)
    // if (!isset($size_data['crop'])) == true (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == false (line 246)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize11()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == false (line 232)
    // if (!isset($size_data['height'])) == true (line 235)
    // if (!isset($size_data['crop'])) == true (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == false (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize12()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == false (line 232)
    // if (!isset($size_data['height'])) == true (line 235)
    // if (!isset($size_data['crop'])) == true (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == true (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize13()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == true (line 232)
    // if (!isset($size_data['height'])) == false (line 235)
    // if (!isset($size_data['crop'])) == false (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == false (line 246)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize14()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == true (line 232)
    // if (!isset($size_data['height'])) == false (line 235)
    // if (!isset($size_data['crop'])) == false (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == false (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize15()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == true (line 232)
    // if (!isset($size_data['height'])) == false (line 235)
    // if (!isset($size_data['crop'])) == false (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == true (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize16()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == true (line 232)
    // if (!isset($size_data['height'])) == false (line 235)
    // if (!isset($size_data['crop'])) == true (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == false (line 246)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize17()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == true (line 232)
    // if (!isset($size_data['height'])) == false (line 235)
    // if (!isset($size_data['crop'])) == true (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == false (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize18()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == true (line 232)
    // if (!isset($size_data['height'])) == false (line 235)
    // if (!isset($size_data['crop'])) == true (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == true (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize19()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == true (line 232)
    // if (!isset($size_data['height'])) == true (line 235)
    // if (!isset($size_data['crop'])) == false (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == false (line 246)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize20()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == true (line 232)
    // if (!isset($size_data['height'])) == true (line 235)
    // if (!isset($size_data['crop'])) == false (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == false (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize21()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == true (line 232)
    // if (!isset($size_data['height'])) == true (line 235)
    // if (!isset($size_data['crop'])) == false (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == true (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize22()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == true (line 232)
    // if (!isset($size_data['height'])) == true (line 235)
    // if (!isset($size_data['crop'])) == true (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == false (line 246)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize23()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == true (line 232)
    // if (!isset($size_data['height'])) == true (line 235)
    // if (!isset($size_data['crop'])) == true (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == false (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize24()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 228)
    // if (!isset($size_data['width'])) == true (line 232)
    // if (!isset($size_data['height'])) == true (line 235)
    // if (!isset($size_data['crop'])) == true (line 239)
    // if (!\is_wp_error($image) && !$duplicate) == true (line 246)
    // if (!\is_wp_error($resized) && $resized) == true (line 251)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize25()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == true (line 228)

    $actual = $this->wP_Image_Editor_GD->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop0()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop1()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop2()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop3()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop4()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop5()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop6()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop7()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop8()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop9()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop10()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop11()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop12()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop13()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop14()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop15()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == false (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop16()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop17()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop18()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop19()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop20()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop21()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop22()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop23()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == false (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop24()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop25()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop26()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop27()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == false (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop28()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop29()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == false (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop30()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == false (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop31()
{
    $src_x = m::mock('UntypedParameter_src_x_');
    $src_y = m::mock('UntypedParameter_src_y_');
    $src_w = m::mock('UntypedParameter_src_w_');
    $src_h = m::mock('UntypedParameter_src_h_');
    $dst_w = m::mock('UntypedParameter_dst_w_');
    $dst_h = m::mock('UntypedParameter_dst_h_');
    $src_abs = m::mock('UntypedParameter_src_abs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$dst_w) == true (line 280)
    // if (!$dst_h) == true (line 283)
    // if ($src_abs) == true (line 289)
    // if (\function_exists('imageantialias')) == true (line 294)
    // if (\is_resource($dst)) == true (line 300)

    $actual = $this->wP_Image_Editor_GD->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate0()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\function_exists('imagerotate')) == false (line 320)

    $actual = $this->wP_Image_Editor_GD->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate1()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\function_exists('imagerotate')) == true (line 320)
    // if (\is_resource($rotated)) == false (line 324)

    $actual = $this->wP_Image_Editor_GD->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate2()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\function_exists('imagerotate')) == true (line 320)
    // if (\is_resource($rotated)) == true (line 324)

    $actual = $this->wP_Image_Editor_GD->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlip0()
{
    $horz = m::mock('UntypedParameter_horz_');
    $vert = m::mock('UntypedParameter_vert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($dst)) == false (line 350)

    $actual = $this->wP_Image_Editor_GD->flip($horz, $vert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlip1()
{
    $horz = m::mock('UntypedParameter_horz_');
    $vert = m::mock('UntypedParameter_vert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($dst)) == true (line 350)
    // if (\imagecopyresampled($dst, $this->image, 0, 0, $sx, $sy, $w, $h, $sw, $sh)) == false (line 356)

    $actual = $this->wP_Image_Editor_GD->flip($horz, $vert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlip2()
{
    $horz = m::mock('UntypedParameter_horz_');
    $vert = m::mock('UntypedParameter_vert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($dst)) == true (line 350)
    // if (\imagecopyresampled($dst, $this->image, 0, 0, $sx, $sy, $w, $h, $sw, $sh)) == true (line 356)

    $actual = $this->wP_Image_Editor_GD->flip($horz, $vert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave0()
{
    $filename = m::mock('UntypedParameter_filename_');
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_wp_error($saved)) == false (line 377)

    $actual = $this->wP_Image_Editor_GD->save($filename, $mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave1()
{
    $filename = m::mock('UntypedParameter_filename_');
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_wp_error($saved)) == true (line 377)

    $actual = $this->wP_Image_Editor_GD->save($filename, $mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream0()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($mime_type) (line 451)
    // Case 'image/png' == false (line 452)
    // Case 'image/gif' == false (line 455)
    // Default (line 458)

    $actual = $this->wP_Image_Editor_GD->stream($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream1()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($mime_type) (line 451)
    // Case 'image/png' == false (line 452)
    // Case 'image/gif' == true (line 455)

    $actual = $this->wP_Image_Editor_GD->stream($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream2()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($mime_type) (line 451)
    // Case 'image/png' == true (line 452)

    $actual = $this->wP_Image_Editor_GD->stream($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
