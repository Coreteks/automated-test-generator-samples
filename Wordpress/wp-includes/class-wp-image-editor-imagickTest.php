<?php

namespace tests;

use Mockery as m;
use WP_Image_Editor_Imagick;

class WP_Image_Editor_ImagickTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Image_Editor_Imagick
*/
protected $wP_Image_Editor_Imagick;

public function setUp()
{
    parent::setUp();

    $this->wP_Image_Editor_Imagick = new \WP_Image_Editor_Imagick();
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 25)

    $actual = $this->wP_Image_Editor_Imagick->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == true (line 25)

    $actual = $this->wP_Image_Editor_Imagick->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\extension_loaded('imagick') || !\class_exists('Imagick', \false) || !\class_exists('ImagickPixel', \false)) == false (line 48)
    // if (\version_compare(\phpversion('imagick'), '2.2.0', '<')) == false (line 52)
    // if (!\defined('imagick::COMPRESSION_JPEG')) == false (line 79)
    // if (\array_diff($required_methods, $class_methods)) == false (line 84)
    // if (\defined('HHVM_VERSION') && isset($args['path']) && \preg_match('|^https?://|', $args['path'])) == false (line 89)

    $actual = $this->wP_Image_Editor_Imagick->test($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest1()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\extension_loaded('imagick') || !\class_exists('Imagick', \false) || !\class_exists('ImagickPixel', \false)) == false (line 48)
    // if (\version_compare(\phpversion('imagick'), '2.2.0', '<')) == false (line 52)
    // if (!\defined('imagick::COMPRESSION_JPEG')) == false (line 79)
    // if (\array_diff($required_methods, $class_methods)) == false (line 84)
    // if (\defined('HHVM_VERSION') && isset($args['path']) && \preg_match('|^https?://|', $args['path'])) == true (line 89)

    $actual = $this->wP_Image_Editor_Imagick->test($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest2()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\extension_loaded('imagick') || !\class_exists('Imagick', \false) || !\class_exists('ImagickPixel', \false)) == false (line 48)
    // if (\version_compare(\phpversion('imagick'), '2.2.0', '<')) == false (line 52)
    // if (!\defined('imagick::COMPRESSION_JPEG')) == false (line 79)
    // if (\array_diff($required_methods, $class_methods)) == true (line 84)

    $actual = $this->wP_Image_Editor_Imagick->test($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest3()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\extension_loaded('imagick') || !\class_exists('Imagick', \false) || !\class_exists('ImagickPixel', \false)) == false (line 48)
    // if (\version_compare(\phpversion('imagick'), '2.2.0', '<')) == false (line 52)
    // if (!\defined('imagick::COMPRESSION_JPEG')) == true (line 79)

    $actual = $this->wP_Image_Editor_Imagick->test($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest4()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\extension_loaded('imagick') || !\class_exists('Imagick', \false) || !\class_exists('ImagickPixel', \false)) == false (line 48)
    // if (\version_compare(\phpversion('imagick'), '2.2.0', '<')) == true (line 52)

    $actual = $this->wP_Image_Editor_Imagick->test($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest5()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\extension_loaded('imagick') || !\class_exists('Imagick', \false) || !\class_exists('ImagickPixel', \false)) == true (line 48)

    $actual = $this->wP_Image_Editor_Imagick->test($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testSupports_mime_type0()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$imagick_extension) == false (line 109)
    // if (!\method_exists('Imagick', 'setIteratorIndex') && $mime_type != 'image/jpeg') == false (line 115)

    $actual = $this->wP_Image_Editor_Imagick->supports_mime_type($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupports_mime_type1()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$imagick_extension) == false (line 109)
    // if (!\method_exists('Imagick', 'setIteratorIndex') && $mime_type != 'image/jpeg') == false (line 115)

    $actual = $this->wP_Image_Editor_Imagick->supports_mime_type($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupports_mime_type2()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$imagick_extension) == false (line 109)
    // if (!\method_exists('Imagick', 'setIteratorIndex') && $mime_type != 'image/jpeg') == false (line 115)

    $actual = $this->wP_Image_Editor_Imagick->supports_mime_type($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupports_mime_type3()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$imagick_extension) == false (line 109)
    // if (!\method_exists('Imagick', 'setIteratorIndex') && $mime_type != 'image/jpeg') == true (line 115)

    $actual = $this->wP_Image_Editor_Imagick->supports_mime_type($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupports_mime_type4()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$imagick_extension) == true (line 109)

    $actual = $this->wP_Image_Editor_Imagick->supports_mime_type($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) -> exception (line 161)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) -> exception (line 161)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) -> exception (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) -> exception (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == false (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == false (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == false (line 166)
    // if (\is_wp_error($updated_size)) == false (line 176)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == false (line 166)
    // if (\is_wp_error($updated_size)) == true (line 176)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == true (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == true (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == true (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == true (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == true (line 166)
    // if (\is_wp_error($updated_size)) == false (line 176)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == true (line 166)
    // if (\is_wp_error($updated_size)) == true (line 176)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == true (line 161)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == true (line 161)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == false (line 153)
    // if (!$this->image->valid()) == true (line 161)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) -> exception (line 161)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) -> exception (line 161)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) -> exception (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) -> exception (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == false (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == false (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == false (line 166)
    // if (\is_wp_error($updated_size)) == false (line 176)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == false (line 166)
    // if (\is_wp_error($updated_size)) == true (line 176)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == true (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == true (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == true (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == true (line 166)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == true (line 166)
    // if (\is_wp_error($updated_size)) == false (line 176)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == false (line 161)
    // if (\is_callable(array($this->image, 'setIteratorIndex'))) == true (line 166)
    // if (\is_wp_error($updated_size)) == true (line 176)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == true (line 161)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == true (line 161)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == false (line 138)
    // if ('pdf' == $file_extension) == true (line 153)
    // if (!$this->image->valid()) == true (line 161)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == false (line 134)
    // if (!\is_file($this->file) && !\preg_match('|^https?://|', $this->file)) == true (line 138)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->image instanceof \Imagick) == true (line 134)

    $actual = $this->wP_Image_Editor_Imagick->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testSet_quality0()
{
    $quality = m::mock('UntypedParameter_quality_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($quality_result)) == false (line 193)
    // if ('image/jpeg' == $this->mime_type) == false (line 200)

    $actual = $this->wP_Image_Editor_Imagick->set_quality($quality);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_quality1()
{
    $quality = m::mock('UntypedParameter_quality_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($quality_result)) == false (line 193)
    // if ('image/jpeg' == $this->mime_type) == false (line 200)

    $actual = $this->wP_Image_Editor_Imagick->set_quality($quality);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_quality2()
{
    $quality = m::mock('UntypedParameter_quality_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($quality_result)) == false (line 193)
    // if ('image/jpeg' == $this->mime_type) == false (line 200)

    $actual = $this->wP_Image_Editor_Imagick->set_quality($quality);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testSet_quality3()
{
    $quality = m::mock('UntypedParameter_quality_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($quality_result)) == false (line 193)
    // if ('image/jpeg' == $this->mime_type) == true (line 200)

    $actual = $this->wP_Image_Editor_Imagick->set_quality($quality);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_quality4()
{
    $quality = m::mock('UntypedParameter_quality_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($quality_result)) == false (line 193)
    // if ('image/jpeg' == $this->mime_type) == true (line 200)

    $actual = $this->wP_Image_Editor_Imagick->set_quality($quality);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testSet_quality5()
{
    $quality = m::mock('UntypedParameter_quality_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($quality_result)) == false (line 193)
    // if ('image/jpeg' == $this->mime_type) == true (line 200)

    $actual = $this->wP_Image_Editor_Imagick->set_quality($quality);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_quality6()
{
    $quality = m::mock('UntypedParameter_quality_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($quality_result)) == false (line 193)
    // if ('image/jpeg' == $this->mime_type) == true (line 200)

    $actual = $this->wP_Image_Editor_Imagick->set_quality($quality);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_quality7()
{
    $quality = m::mock('UntypedParameter_quality_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($quality_result)) == false (line 193)
    // if ('image/jpeg' == $this->mime_type) == true (line 200)

    $actual = $this->wP_Image_Editor_Imagick->set_quality($quality);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_quality8()
{
    $quality = m::mock('UntypedParameter_quality_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($quality_result)) == true (line 193)

    $actual = $this->wP_Image_Editor_Imagick->set_quality($quality);
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
    // if ($this->size['width'] == $max_w && $this->size['height'] == $max_h) == false (line 259)
    // if (!$dims) == false (line 264)
    // if ($crop) == false (line 269)
    // if (\is_wp_error($thumb_result)) == false (line 275)

    $actual = $this->wP_Image_Editor_Imagick->resize($max_w, $max_h, $crop);
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
    // if ($this->size['width'] == $max_w && $this->size['height'] == $max_h) == false (line 259)
    // if (!$dims) == false (line 264)
    // if ($crop) == false (line 269)
    // if (\is_wp_error($thumb_result)) == true (line 275)

    $actual = $this->wP_Image_Editor_Imagick->resize($max_w, $max_h, $crop);
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
    // if ($this->size['width'] == $max_w && $this->size['height'] == $max_h) == false (line 259)
    // if (!$dims) == false (line 264)
    // if ($crop) == true (line 269)

    $actual = $this->wP_Image_Editor_Imagick->resize($max_w, $max_h, $crop);
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
    // if ($this->size['width'] == $max_w && $this->size['height'] == $max_h) == false (line 259)
    // if (!$dims) == true (line 264)

    $actual = $this->wP_Image_Editor_Imagick->resize($max_w, $max_h, $crop);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResize4()
{
    $max_w = m::mock('UntypedParameter_max_w_');
    $max_h = m::mock('UntypedParameter_max_h_');
    $crop = m::mock('UntypedParameter_crop_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->size['width'] == $max_w && $this->size['height'] == $max_h) == true (line 259)

    $actual = $this->wP_Image_Editor_Imagick->resize($max_w, $max_h, $crop);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize0()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize1()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize2()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize3()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize4()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize5()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize6()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize7()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize8()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize9()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize10()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize11()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize12()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize13()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize14()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize15()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize16()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize17()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize18()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize19()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize20()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize21()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize22()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize23()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize24()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize25()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == false (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == true (line 446)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize26()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize27()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize28()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize29()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize30()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize31()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize32()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize33()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize34()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize35()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize36()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize37()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == false (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize38()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize39()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize40()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize41()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize42()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize43()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == false (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize44()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize45()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize46()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == false (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize47()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == false (line 464)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize48()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == false (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize49()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == false (line 446)
    // if (!isset($size_data['width'])) == true (line 450)
    // if (!isset($size_data['height'])) == true (line 453)
    // if (!isset($size_data['crop'])) == true (line 457)
    // if (!\is_wp_error($resize_result) && !$duplicate) == true (line 464)
    // if (!\is_wp_error($resized) && $resized) == true (line 471)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMulti_resize50()
{
    $sizes = m::mock('UntypedParameter_sizes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->image) == true (line 442)
    // if (!isset($size_data['width']) && !isset($size_data['height'])) == true (line 446)

    $actual = $this->wP_Image_Editor_Imagick->multi_resize($sizes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
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
    // if ($src_abs) == false (line 500)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
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
    // if ($src_abs) == false (line 500)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == false (line 509)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == true (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == true (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == true (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop32()
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop33()
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop34()
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop35()
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop36()
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
    // if ($src_abs) == false (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == true (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop37()
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
    // if ($src_abs) == true (line 500)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop38()
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
    // if ($src_abs) == true (line 500)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop39()
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
    // if ($src_abs) == true (line 500)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop40()
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
    // if ($src_abs) == true (line 500)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop41()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == false (line 509)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop42()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop43()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop44()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop45()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop46()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop47()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop48()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop49()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == true (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop50()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop51()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop52()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop53()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop54()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop55()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop56()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop57()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == false (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == true (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop58()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop59()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop60()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop61()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop62()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop63()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop64()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop65()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == false (line 515)
    // if (\is_wp_error($thumb_result)) == true (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop66()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop67()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop68()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop69()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) -> exception (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCrop70()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop71()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop72()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == false (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCrop73()
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
    // if ($src_abs) == true (line 500)
    // if ($dst_w || $dst_h) == true (line 509)
    // if (!$dst_w) == true (line 512)
    // if (!$dst_h) == true (line 515)
    // if (\is_wp_error($thumb_result)) == true (line 520)

    $actual = $this->wP_Image_Editor_Imagick->crop($src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRotate0()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate1()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRotate2()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) -> exception (line 549)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate3()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) -> exception (line 549)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRotate4()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == false (line 549)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate5()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == false (line 549)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRotate6()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == false (line 549)
    // if (\is_wp_error($result)) -> exception (line 555)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate7()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == false (line 549)
    // if (\is_wp_error($result)) -> exception (line 555)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRotate8()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == false (line 549)
    // if (\is_wp_error($result)) == false (line 555)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate9()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == false (line 549)
    // if (\is_wp_error($result)) == false (line 555)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate10()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == false (line 549)
    // if (\is_wp_error($result)) == false (line 555)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate11()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == false (line 549)
    // if (\is_wp_error($result)) == true (line 555)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRotate12()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == true (line 549)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate13()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == true (line 549)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRotate14()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == true (line 549)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate15()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == true (line 549)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRotate16()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == true (line 549)
    // if (\is_wp_error($result)) -> exception (line 555)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate17()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == true (line 549)
    // if (\is_wp_error($result)) -> exception (line 555)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRotate18()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == true (line 549)
    // if (\is_wp_error($result)) == false (line 555)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate19()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == true (line 549)
    // if (\is_wp_error($result)) == false (line 555)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate20()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == true (line 549)
    // if (\is_wp_error($result)) == false (line 555)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRotate21()
{
    $angle = m::mock('UntypedParameter_angle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable(array($this->image, 'setImageOrientation')) && \defined('Imagick::ORIENTATION_TOPLEFT')) == true (line 549)
    // if (\is_wp_error($result)) == true (line 555)

    $actual = $this->wP_Image_Editor_Imagick->rotate($angle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlip0()
{
    $horz = m::mock('UntypedParameter_horz_');
    $vert = m::mock('UntypedParameter_vert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($horz) == false (line 577)
    // if ($vert) == false (line 581)

    $actual = $this->wP_Image_Editor_Imagick->flip($horz, $vert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testFlip1()
{
    $horz = m::mock('UntypedParameter_horz_');
    $vert = m::mock('UntypedParameter_vert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($horz) == false (line 577)
    // if ($vert) == true (line 581)

    $actual = $this->wP_Image_Editor_Imagick->flip($horz, $vert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlip2()
{
    $horz = m::mock('UntypedParameter_horz_');
    $vert = m::mock('UntypedParameter_vert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($horz) == false (line 577)
    // if ($vert) == true (line 581)

    $actual = $this->wP_Image_Editor_Imagick->flip($horz, $vert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlip3()
{
    $horz = m::mock('UntypedParameter_horz_');
    $vert = m::mock('UntypedParameter_vert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($horz) == false (line 577)
    // if ($vert) == true (line 581)

    $actual = $this->wP_Image_Editor_Imagick->flip($horz, $vert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testFlip4()
{
    $horz = m::mock('UntypedParameter_horz_');
    $vert = m::mock('UntypedParameter_vert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($horz) == true (line 577)

    $actual = $this->wP_Image_Editor_Imagick->flip($horz, $vert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlip5()
{
    $horz = m::mock('UntypedParameter_horz_');
    $vert = m::mock('UntypedParameter_vert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($horz) == true (line 577)

    $actual = $this->wP_Image_Editor_Imagick->flip($horz, $vert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlip6()
{
    $horz = m::mock('UntypedParameter_horz_');
    $vert = m::mock('UntypedParameter_vert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($horz) == true (line 577)
    // if ($vert) == false (line 581)

    $actual = $this->wP_Image_Editor_Imagick->flip($horz, $vert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testFlip7()
{
    $horz = m::mock('UntypedParameter_horz_');
    $vert = m::mock('UntypedParameter_vert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($horz) == true (line 577)
    // if ($vert) == true (line 581)

    $actual = $this->wP_Image_Editor_Imagick->flip($horz, $vert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlip8()
{
    $horz = m::mock('UntypedParameter_horz_');
    $vert = m::mock('UntypedParameter_vert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($horz) == true (line 577)
    // if ($vert) == true (line 581)

    $actual = $this->wP_Image_Editor_Imagick->flip($horz, $vert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlip9()
{
    $horz = m::mock('UntypedParameter_horz_');
    $vert = m::mock('UntypedParameter_vert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($horz) == true (line 577)
    // if ($vert) == true (line 581)

    $actual = $this->wP_Image_Editor_Imagick->flip($horz, $vert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave0()
{
    $destfilename = m::mock('UntypedParameter_destfilename_');
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_wp_error($saved)) == false (line 602)

    $actual = $this->wP_Image_Editor_Imagick->save($destfilename, $mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testSave1()
{
    $destfilename = m::mock('UntypedParameter_destfilename_');
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_wp_error($saved)) == true (line 602)

    $actual = $this->wP_Image_Editor_Imagick->save($destfilename, $mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave2()
{
    $destfilename = m::mock('UntypedParameter_destfilename_');
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_wp_error($saved)) == true (line 602)

    $actual = $this->wP_Image_Editor_Imagick->save($destfilename, $mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave3()
{
    $destfilename = m::mock('UntypedParameter_destfilename_');
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_wp_error($saved)) == true (line 602)

    $actual = $this->wP_Image_Editor_Imagick->save($destfilename, $mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testStream0()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Image_Editor_Imagick->stream($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream1()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Image_Editor_Imagick->stream($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testStream2()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Image_Editor_Imagick->stream($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream3()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Image_Editor_Imagick->stream($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testStream4()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Image_Editor_Imagick->stream($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream5()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Image_Editor_Imagick->stream($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testStream6()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Image_Editor_Imagick->stream($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream7()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Image_Editor_Imagick->stream($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream8()
{
    $mime_type = m::mock('UntypedParameter_mime_type_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Image_Editor_Imagick->stream($mime_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
