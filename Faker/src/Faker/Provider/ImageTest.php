<?php

namespace tests\Faker\Provider;

use Faker\Provider\Image;
use Mockery as m;

class ImageTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\Image
*/
protected $image;

public function setUp()
{
    parent::setUp();

    $this->image = new \Faker\Provider\Image();
}

public function testImageUrl0()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == false (line 36)
    // if ($category) == false (line 40)
    // if ($randomize) == false (line 50)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImageUrl1()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == false (line 36)
    // if ($category) == false (line 40)
    // if ($randomize) == true (line 50)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImageUrl2()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == false (line 36)
    // if ($category) == true (line 40)
    // if (!in_array($category, static::$categories)) == false (line 41)
    // if ($word) == false (line 45)
    // if ($randomize) == false (line 50)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImageUrl3()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == false (line 36)
    // if ($category) == true (line 40)
    // if (!in_array($category, static::$categories)) == false (line 41)
    // if ($word) == false (line 45)
    // if ($randomize) == true (line 50)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImageUrl4()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == false (line 36)
    // if ($category) == true (line 40)
    // if (!in_array($category, static::$categories)) == false (line 41)
    // if ($word) == true (line 45)
    // if ($randomize) == false (line 50)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImageUrl5()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == false (line 36)
    // if ($category) == true (line 40)
    // if (!in_array($category, static::$categories)) == false (line 41)
    // if ($word) == true (line 45)
    // if ($randomize) == true (line 50)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testImageUrl6()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == false (line 36)
    // if ($category) == true (line 40)
    // if (!in_array($category, static::$categories)) == true (line 41)
    // throw new \InvalidArgumentException(sprintf('Unknown image category "%s"', $category)) -> exception (line 42)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImageUrl7()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == true (line 36)
    // if ($category) == false (line 40)
    // if ($randomize) == false (line 50)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImageUrl8()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == true (line 36)
    // if ($category) == false (line 40)
    // if ($randomize) == true (line 50)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImageUrl9()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == true (line 36)
    // if ($category) == true (line 40)
    // if (!in_array($category, static::$categories)) == false (line 41)
    // if ($word) == false (line 45)
    // if ($randomize) == false (line 50)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImageUrl10()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == true (line 36)
    // if ($category) == true (line 40)
    // if (!in_array($category, static::$categories)) == false (line 41)
    // if ($word) == false (line 45)
    // if ($randomize) == true (line 50)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImageUrl11()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == true (line 36)
    // if ($category) == true (line 40)
    // if (!in_array($category, static::$categories)) == false (line 41)
    // if ($word) == true (line 45)
    // if ($randomize) == false (line 50)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImageUrl12()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == true (line 36)
    // if ($category) == true (line 40)
    // if (!in_array($category, static::$categories)) == false (line 41)
    // if ($word) == true (line 45)
    // if ($randomize) == true (line 50)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testImageUrl13()
{
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');
    $gray = m::mock('UntypedParameter_gray_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gray) == true (line 36)
    // if ($category) == true (line 40)
    // if (!in_array($category, static::$categories)) == true (line 41)
    // throw new \InvalidArgumentException(sprintf('Unknown image category "%s"', $category)) -> exception (line 42)

    $actual = $this->image->imageUrl($width, $height, $category, $randomize, $word, $gray);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage0()
{
    $dir = m::mock('UntypedParameter_dir_');
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $fullPath = m::mock('UntypedParameter_fullPath_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($dir) || !is_writable($dir)) == false (line 68)
    // if (function_exists('curl_exec')) == false (line 81)
    // if (ini_get('allow_url_fopen')) == false (line 96)

    $actual = $this->image->image($dir, $width, $height, $category, $fullPath, $randomize, $word);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage1()
{
    $dir = m::mock('UntypedParameter_dir_');
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $fullPath = m::mock('UntypedParameter_fullPath_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($dir) || !is_writable($dir)) == false (line 68)
    // if (function_exists('curl_exec')) == false (line 81)
    // if (ini_get('allow_url_fopen')) == true (line 96)

    $actual = $this->image->image($dir, $width, $height, $category, $fullPath, $randomize, $word);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage2()
{
    $dir = m::mock('UntypedParameter_dir_');
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $fullPath = m::mock('UntypedParameter_fullPath_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($dir) || !is_writable($dir)) == false (line 68)
    // if (function_exists('curl_exec')) == true (line 81)
    // if (!$success) == false (line 90)

    $actual = $this->image->image($dir, $width, $height, $category, $fullPath, $randomize, $word);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage3()
{
    $dir = m::mock('UntypedParameter_dir_');
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $fullPath = m::mock('UntypedParameter_fullPath_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($dir) || !is_writable($dir)) == false (line 68)
    // if (function_exists('curl_exec')) == true (line 81)
    // if (!$success) == true (line 90)

    $actual = $this->image->image($dir, $width, $height, $category, $fullPath, $randomize, $word);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testImage4()
{
    $dir = m::mock('UntypedParameter_dir_');
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');
    $category = m::mock('UntypedParameter_category_');
    $fullPath = m::mock('UntypedParameter_fullPath_');
    $randomize = m::mock('UntypedParameter_randomize_');
    $word = m::mock('UntypedParameter_word_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_dir($dir) || !is_writable($dir)) == true (line 68)
    // throw new \InvalidArgumentException(sprintf('Cannot write to directory "%s"', $dir)) -> exception (line 69)

    $actual = $this->image->image($dir, $width, $height, $category, $fullPath, $randomize, $word);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
