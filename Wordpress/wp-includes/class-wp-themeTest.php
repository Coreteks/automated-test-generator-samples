<?php

namespace tests;

use Mockery as m;
use WP_Theme;

class WP_ThemeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_theme_dir = null;
/**
* @var mixed
*/
protected $_theme_root = null;
/**
* @var mixed
*/
protected $__child = null;
/**
* @var \WP_Theme
*/
protected $wP_Theme;

public function setUp()
{
    parent::setUp();

    $this->_theme_dir = null;
    $this->_theme_root = null;
    $this->__child = null;
    $this->wP_Theme = new \WP_Theme($this->_theme_dir, $this->_theme_root, $this->__child);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->__isset($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == false (line 440)
    // Case 'version' == false (line 442)
    // Case 'parent_theme' == false (line 444)
    // Case 'template_dir' == false (line 446)
    // Case 'stylesheet_dir' == false (line 448)
    // Case 'template' == false (line 450)
    // Case 'stylesheet' == false (line 452)
    // Case 'screenshot' == false (line 454)
    // Case 'description' == false (line 457)
    // Case 'author' == false (line 459)
    // Case 'tags' == false (line 461)
    // Case 'theme_root' == false (line 463)
    // Case 'theme_root_uri' == false (line 465)
    // Default (line 468)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == false (line 440)
    // Case 'version' == false (line 442)
    // Case 'parent_theme' == false (line 444)
    // Case 'template_dir' == false (line 446)
    // Case 'stylesheet_dir' == false (line 448)
    // Case 'template' == false (line 450)
    // Case 'stylesheet' == false (line 452)
    // Case 'screenshot' == false (line 454)
    // Case 'description' == false (line 457)
    // Case 'author' == false (line 459)
    // Case 'tags' == false (line 461)
    // Case 'theme_root' == false (line 463)
    // Case 'theme_root_uri' == true (line 465)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == false (line 440)
    // Case 'version' == false (line 442)
    // Case 'parent_theme' == false (line 444)
    // Case 'template_dir' == false (line 446)
    // Case 'stylesheet_dir' == false (line 448)
    // Case 'template' == false (line 450)
    // Case 'stylesheet' == false (line 452)
    // Case 'screenshot' == false (line 454)
    // Case 'description' == false (line 457)
    // Case 'author' == false (line 459)
    // Case 'tags' == false (line 461)
    // Case 'theme_root' == true (line 463)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get3()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == false (line 440)
    // Case 'version' == false (line 442)
    // Case 'parent_theme' == false (line 444)
    // Case 'template_dir' == false (line 446)
    // Case 'stylesheet_dir' == false (line 448)
    // Case 'template' == false (line 450)
    // Case 'stylesheet' == false (line 452)
    // Case 'screenshot' == false (line 454)
    // Case 'description' == false (line 457)
    // Case 'author' == false (line 459)
    // Case 'tags' == true (line 461)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get4()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == false (line 440)
    // Case 'version' == false (line 442)
    // Case 'parent_theme' == false (line 444)
    // Case 'template_dir' == false (line 446)
    // Case 'stylesheet_dir' == false (line 448)
    // Case 'template' == false (line 450)
    // Case 'stylesheet' == false (line 452)
    // Case 'screenshot' == false (line 454)
    // Case 'description' == false (line 457)
    // Case 'author' == true (line 459)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get5()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == false (line 440)
    // Case 'version' == false (line 442)
    // Case 'parent_theme' == false (line 444)
    // Case 'template_dir' == false (line 446)
    // Case 'stylesheet_dir' == false (line 448)
    // Case 'template' == false (line 450)
    // Case 'stylesheet' == false (line 452)
    // Case 'screenshot' == false (line 454)
    // Case 'description' == true (line 457)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get6()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == false (line 440)
    // Case 'version' == false (line 442)
    // Case 'parent_theme' == false (line 444)
    // Case 'template_dir' == false (line 446)
    // Case 'stylesheet_dir' == false (line 448)
    // Case 'template' == false (line 450)
    // Case 'stylesheet' == false (line 452)
    // Case 'screenshot' == true (line 454)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get7()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == false (line 440)
    // Case 'version' == false (line 442)
    // Case 'parent_theme' == false (line 444)
    // Case 'template_dir' == false (line 446)
    // Case 'stylesheet_dir' == false (line 448)
    // Case 'template' == false (line 450)
    // Case 'stylesheet' == true (line 452)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get8()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == false (line 440)
    // Case 'version' == false (line 442)
    // Case 'parent_theme' == false (line 444)
    // Case 'template_dir' == false (line 446)
    // Case 'stylesheet_dir' == false (line 448)
    // Case 'template' == true (line 450)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get9()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == false (line 440)
    // Case 'version' == false (line 442)
    // Case 'parent_theme' == false (line 444)
    // Case 'template_dir' == false (line 446)
    // Case 'stylesheet_dir' == true (line 448)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get10()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == false (line 440)
    // Case 'version' == false (line 442)
    // Case 'parent_theme' == false (line 444)
    // Case 'template_dir' == true (line 446)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get11()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == false (line 440)
    // Case 'version' == false (line 442)
    // Case 'parent_theme' == true (line 444)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get12()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == false (line 440)
    // Case 'version' == true (line 442)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get13()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == false (line 439)
    // Case 'title' == true (line 440)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get14()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 438)
    // Case 'name' == true (line 439)

    $actual = $this->wP_Theme->__get($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet0()
{
    $offset = m::mock('UntypedParameter_offset_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->offsetSet($offset, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetUnset0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->offsetUnset($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetExists0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->offsetExists($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == false (line 560)
    // Case 'Status' == false (line 561)
    // Case 'Template' == false (line 563)
    // Case 'Stylesheet' == false (line 565)
    // Case 'Template Files' == false (line 567)
    // Case 'Stylesheet Files' == false (line 569)
    // Case 'Template Dir' == false (line 571)
    // Case 'Stylesheet Dir' == false (line 573)
    // Case 'Screenshot' == false (line 575)
    // Case 'Tags' == false (line 577)
    // Case 'Theme Root' == false (line 579)
    // Case 'Theme Root URI' == false (line 581)
    // Case 'Parent Theme' == false (line 583)
    // Default (line 585)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet1()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == false (line 560)
    // Case 'Status' == false (line 561)
    // Case 'Template' == false (line 563)
    // Case 'Stylesheet' == false (line 565)
    // Case 'Template Files' == false (line 567)
    // Case 'Stylesheet Files' == false (line 569)
    // Case 'Template Dir' == false (line 571)
    // Case 'Stylesheet Dir' == false (line 573)
    // Case 'Screenshot' == false (line 575)
    // Case 'Tags' == false (line 577)
    // Case 'Theme Root' == false (line 579)
    // Case 'Theme Root URI' == false (line 581)
    // Case 'Parent Theme' == true (line 583)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet2()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == false (line 560)
    // Case 'Status' == false (line 561)
    // Case 'Template' == false (line 563)
    // Case 'Stylesheet' == false (line 565)
    // Case 'Template Files' == false (line 567)
    // Case 'Stylesheet Files' == false (line 569)
    // Case 'Template Dir' == false (line 571)
    // Case 'Stylesheet Dir' == false (line 573)
    // Case 'Screenshot' == false (line 575)
    // Case 'Tags' == false (line 577)
    // Case 'Theme Root' == false (line 579)
    // Case 'Theme Root URI' == true (line 581)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet3()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == false (line 560)
    // Case 'Status' == false (line 561)
    // Case 'Template' == false (line 563)
    // Case 'Stylesheet' == false (line 565)
    // Case 'Template Files' == false (line 567)
    // Case 'Stylesheet Files' == false (line 569)
    // Case 'Template Dir' == false (line 571)
    // Case 'Stylesheet Dir' == false (line 573)
    // Case 'Screenshot' == false (line 575)
    // Case 'Tags' == false (line 577)
    // Case 'Theme Root' == true (line 579)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet4()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == false (line 560)
    // Case 'Status' == false (line 561)
    // Case 'Template' == false (line 563)
    // Case 'Stylesheet' == false (line 565)
    // Case 'Template Files' == false (line 567)
    // Case 'Stylesheet Files' == false (line 569)
    // Case 'Template Dir' == false (line 571)
    // Case 'Stylesheet Dir' == false (line 573)
    // Case 'Screenshot' == false (line 575)
    // Case 'Tags' == true (line 577)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet5()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == false (line 560)
    // Case 'Status' == false (line 561)
    // Case 'Template' == false (line 563)
    // Case 'Stylesheet' == false (line 565)
    // Case 'Template Files' == false (line 567)
    // Case 'Stylesheet Files' == false (line 569)
    // Case 'Template Dir' == false (line 571)
    // Case 'Stylesheet Dir' == false (line 573)
    // Case 'Screenshot' == true (line 575)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet6()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == false (line 560)
    // Case 'Status' == false (line 561)
    // Case 'Template' == false (line 563)
    // Case 'Stylesheet' == false (line 565)
    // Case 'Template Files' == false (line 567)
    // Case 'Stylesheet Files' == false (line 569)
    // Case 'Template Dir' == false (line 571)
    // Case 'Stylesheet Dir' == true (line 573)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet7()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == false (line 560)
    // Case 'Status' == false (line 561)
    // Case 'Template' == false (line 563)
    // Case 'Stylesheet' == false (line 565)
    // Case 'Template Files' == false (line 567)
    // Case 'Stylesheet Files' == false (line 569)
    // Case 'Template Dir' == true (line 571)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet8()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == false (line 560)
    // Case 'Status' == false (line 561)
    // Case 'Template' == false (line 563)
    // Case 'Stylesheet' == false (line 565)
    // Case 'Template Files' == false (line 567)
    // Case 'Stylesheet Files' == true (line 569)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet9()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == false (line 560)
    // Case 'Status' == false (line 561)
    // Case 'Template' == false (line 563)
    // Case 'Stylesheet' == false (line 565)
    // Case 'Template Files' == true (line 567)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet10()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == false (line 560)
    // Case 'Status' == false (line 561)
    // Case 'Template' == false (line 563)
    // Case 'Stylesheet' == true (line 565)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet11()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == false (line 560)
    // Case 'Status' == false (line 561)
    // Case 'Template' == true (line 563)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet12()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == false (line 560)
    // Case 'Status' == true (line 561)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet13()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == false (line 558)
    // Case 'Version' == true (line 560)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet14()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == false (line 556)
    // Case 'Description' == true (line 558)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet15()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == false (line 554)
    // Case 'Author URI' == true (line 556)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet16()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == false (line 552)
    // Case 'Author Name' == true (line 554)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet17()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == false (line 546)
    // Case 'Author' == true (line 552)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet18()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == false (line 545)
    // Case 'Title' == true (line 546)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet19()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($offset) (line 544)
    // Case 'Name' == true (line 545)

    $actual = $this->wP_Theme->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testErrors0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->errors();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->exists();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParent0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->parent();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCache_delete0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->cache_delete();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCache_delete1()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->cache_delete();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$header])) == false (line 686)
    // if (!isset($this->headers_sanitized)) == false (line 690)
    // if (isset($this->headers_sanitized[$header])) == false (line 697)
    // if (self::$persistently_cache) == false (line 702)

    $actual = $this->wP_Theme->get($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$header])) == false (line 686)
    // if (!isset($this->headers_sanitized)) == false (line 690)
    // if (isset($this->headers_sanitized[$header])) == false (line 697)
    // if (self::$persistently_cache) == true (line 702)

    $actual = $this->wP_Theme->get($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet2()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$header])) == false (line 686)
    // if (!isset($this->headers_sanitized)) == false (line 690)
    // if (isset($this->headers_sanitized[$header])) == false (line 697)
    // if (self::$persistently_cache) == true (line 702)

    $actual = $this->wP_Theme->get($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet3()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$header])) == false (line 686)
    // if (!isset($this->headers_sanitized)) == false (line 690)
    // if (isset($this->headers_sanitized[$header])) == true (line 697)

    $actual = $this->wP_Theme->get($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet4()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$header])) == false (line 686)
    // if (!isset($this->headers_sanitized)) == true (line 690)
    // if (!\is_array($this->headers_sanitized)) == false (line 692)
    // if (isset($this->headers_sanitized[$header])) == false (line 697)
    // if (self::$persistently_cache) == false (line 702)

    $actual = $this->wP_Theme->get($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet5()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$header])) == false (line 686)
    // if (!isset($this->headers_sanitized)) == true (line 690)
    // if (!\is_array($this->headers_sanitized)) == false (line 692)
    // if (isset($this->headers_sanitized[$header])) == false (line 697)
    // if (self::$persistently_cache) == true (line 702)

    $actual = $this->wP_Theme->get($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet6()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$header])) == false (line 686)
    // if (!isset($this->headers_sanitized)) == true (line 690)
    // if (!\is_array($this->headers_sanitized)) == false (line 692)
    // if (isset($this->headers_sanitized[$header])) == false (line 697)
    // if (self::$persistently_cache) == true (line 702)

    $actual = $this->wP_Theme->get($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet7()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$header])) == false (line 686)
    // if (!isset($this->headers_sanitized)) == true (line 690)
    // if (!\is_array($this->headers_sanitized)) == false (line 692)
    // if (isset($this->headers_sanitized[$header])) == true (line 697)

    $actual = $this->wP_Theme->get($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet8()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$header])) == false (line 686)
    // if (!isset($this->headers_sanitized)) == true (line 690)
    // if (!\is_array($this->headers_sanitized)) == true (line 692)
    // if (isset($this->headers_sanitized[$header])) == false (line 697)
    // if (self::$persistently_cache) == false (line 702)

    $actual = $this->wP_Theme->get($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet9()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$header])) == false (line 686)
    // if (!isset($this->headers_sanitized)) == true (line 690)
    // if (!\is_array($this->headers_sanitized)) == true (line 692)
    // if (isset($this->headers_sanitized[$header])) == false (line 697)
    // if (self::$persistently_cache) == true (line 702)

    $actual = $this->wP_Theme->get($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet10()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$header])) == false (line 686)
    // if (!isset($this->headers_sanitized)) == true (line 690)
    // if (!\is_array($this->headers_sanitized)) == true (line 692)
    // if (isset($this->headers_sanitized[$header])) == false (line 697)
    // if (self::$persistently_cache) == true (line 702)

    $actual = $this->wP_Theme->get($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet11()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$header])) == false (line 686)
    // if (!isset($this->headers_sanitized)) == true (line 690)
    // if (!\is_array($this->headers_sanitized)) == true (line 692)
    // if (isset($this->headers_sanitized[$header])) == true (line 697)

    $actual = $this->wP_Theme->get($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet12()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->headers[$header])) == true (line 686)

    $actual = $this->wP_Theme->get($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay0()
{
    $header = m::mock('UntypedParameter_header_');
    $markup = m::mock('UntypedParameter_markup_');
    $translate = m::mock('UntypedParameter_translate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $value) == false (line 726)
    // if ($translate && (empty($value) || !$this->load_textdomain())) == false (line 730)
    // if ($translate) == false (line 734)
    // if ($markup) == false (line 738)

    $actual = $this->wP_Theme->display($header, $markup, $translate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay1()
{
    $header = m::mock('UntypedParameter_header_');
    $markup = m::mock('UntypedParameter_markup_');
    $translate = m::mock('UntypedParameter_translate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $value) == false (line 726)
    // if ($translate && (empty($value) || !$this->load_textdomain())) == false (line 730)
    // if ($translate) == false (line 734)
    // if ($markup) == true (line 738)

    $actual = $this->wP_Theme->display($header, $markup, $translate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay2()
{
    $header = m::mock('UntypedParameter_header_');
    $markup = m::mock('UntypedParameter_markup_');
    $translate = m::mock('UntypedParameter_translate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $value) == false (line 726)
    // if ($translate && (empty($value) || !$this->load_textdomain())) == false (line 730)
    // if ($translate) == true (line 734)
    // if ($markup) == false (line 738)

    $actual = $this->wP_Theme->display($header, $markup, $translate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay3()
{
    $header = m::mock('UntypedParameter_header_');
    $markup = m::mock('UntypedParameter_markup_');
    $translate = m::mock('UntypedParameter_translate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $value) == false (line 726)
    // if ($translate && (empty($value) || !$this->load_textdomain())) == false (line 730)
    // if ($translate) == true (line 734)
    // if ($markup) == true (line 738)

    $actual = $this->wP_Theme->display($header, $markup, $translate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay4()
{
    $header = m::mock('UntypedParameter_header_');
    $markup = m::mock('UntypedParameter_markup_');
    $translate = m::mock('UntypedParameter_translate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $value) == false (line 726)
    // if ($translate && (empty($value) || !$this->load_textdomain())) == true (line 730)
    // if ($translate) == false (line 734)
    // if ($markup) == false (line 738)

    $actual = $this->wP_Theme->display($header, $markup, $translate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay5()
{
    $header = m::mock('UntypedParameter_header_');
    $markup = m::mock('UntypedParameter_markup_');
    $translate = m::mock('UntypedParameter_translate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $value) == false (line 726)
    // if ($translate && (empty($value) || !$this->load_textdomain())) == true (line 730)
    // if ($translate) == false (line 734)
    // if ($markup) == true (line 738)

    $actual = $this->wP_Theme->display($header, $markup, $translate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay6()
{
    $header = m::mock('UntypedParameter_header_');
    $markup = m::mock('UntypedParameter_markup_');
    $translate = m::mock('UntypedParameter_translate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $value) == false (line 726)
    // if ($translate && (empty($value) || !$this->load_textdomain())) == true (line 730)
    // if ($translate) == true (line 734)
    // if ($markup) == false (line 738)

    $actual = $this->wP_Theme->display($header, $markup, $translate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay7()
{
    $header = m::mock('UntypedParameter_header_');
    $markup = m::mock('UntypedParameter_markup_');
    $translate = m::mock('UntypedParameter_translate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $value) == false (line 726)
    // if ($translate && (empty($value) || !$this->load_textdomain())) == true (line 730)
    // if ($translate) == true (line 734)
    // if ($markup) == true (line 738)

    $actual = $this->wP_Theme->display($header, $markup, $translate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay8()
{
    $header = m::mock('UntypedParameter_header_');
    $markup = m::mock('UntypedParameter_markup_');
    $translate = m::mock('UntypedParameter_translate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $value) == true (line 726)

    $actual = $this->wP_Theme->display($header, $markup, $translate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_stylesheet0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->get_stylesheet();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_template0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->get_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_stylesheet_directory0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && \in_array('theme_root_missing', $this->errors()->get_error_codes())) == false (line 965)

    $actual = $this->wP_Theme->get_stylesheet_directory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_stylesheet_directory1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && \in_array('theme_root_missing', $this->errors()->get_error_codes())) == true (line 965)

    $actual = $this->wP_Theme->get_stylesheet_directory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_template_directory0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->parent()) == false (line 983)

    $actual = $this->wP_Theme->get_template_directory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_template_directory1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->parent()) == true (line 983)

    $actual = $this->wP_Theme->get_template_directory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_stylesheet_directory_uri0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->get_stylesheet_directory_uri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_template_directory_uri0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->parent()) == false (line 1017)

    $actual = $this->wP_Theme->get_template_directory_uri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_template_directory_uri1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->parent()) == true (line 1017)

    $actual = $this->wP_Theme->get_template_directory_uri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_theme_root0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->get_theme_root();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_theme_root_uri0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->theme_root_uri)) == false (line 1051)

    $actual = $this->wP_Theme->get_theme_root_uri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_theme_root_uri1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->theme_root_uri)) == true (line 1051)

    $actual = $this->wP_Theme->get_theme_root_uri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_screenshot0()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($screenshot) == false (line 1072)
    // if (0 === $screenshot) == false (line 1077)

    $actual = $this->wP_Theme->get_screenshot($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_screenshot1()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($screenshot) == false (line 1072)
    // if (0 === $screenshot) == false (line 1077)
    // if (\file_exists($this->get_stylesheet_directory() . "/screenshot.{$ext}")) == false (line 1082)

    $actual = $this->wP_Theme->get_screenshot($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_screenshot2()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($screenshot) == false (line 1072)
    // if (0 === $screenshot) == false (line 1077)
    // if (\file_exists($this->get_stylesheet_directory() . "/screenshot.{$ext}")) == true (line 1082)
    // if ('relative' == $uri) == false (line 1084)

    $actual = $this->wP_Theme->get_screenshot($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_screenshot3()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($screenshot) == false (line 1072)
    // if (0 === $screenshot) == false (line 1077)
    // if (\file_exists($this->get_stylesheet_directory() . "/screenshot.{$ext}")) == true (line 1082)
    // if ('relative' == $uri) == true (line 1084)

    $actual = $this->wP_Theme->get_screenshot($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_screenshot4()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($screenshot) == false (line 1072)
    // if (0 === $screenshot) == true (line 1077)

    $actual = $this->wP_Theme->get_screenshot($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_screenshot5()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($screenshot) == true (line 1072)
    // if ('relative' == $uri) == false (line 1073)

    $actual = $this->wP_Theme->get_screenshot($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_screenshot6()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($screenshot) == true (line 1072)
    // if ('relative' == $uri) == true (line 1073)

    $actual = $this->wP_Theme->get_screenshot($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_files0()
{
    $type = m::mock('UntypedParameter_type_');
    $depth = m::mock('UntypedParameter_depth_');
    $search_parent = m::mock('UntypedParameter_search_parent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($search_parent && $this->parent()) == false (line 1109)

    $actual = $this->wP_Theme->get_files($type, $depth, $search_parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_files1()
{
    $type = m::mock('UntypedParameter_type_');
    $depth = m::mock('UntypedParameter_depth_');
    $search_parent = m::mock('UntypedParameter_search_parent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($search_parent && $this->parent()) == true (line 1109)

    $actual = $this->wP_Theme->get_files($type, $depth, $search_parent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == false (line 1132)
    // if ($this->load_textdomain()) == false (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == false (line 1132)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == false (line 1132)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == false (line 1132)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if ($this->load_textdomain()) == false (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == false (line 1143)
    // if ($this->load_textdomain()) == false (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == false (line 1143)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == false (line 1143)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == false (line 1143)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == false (line 1143)
    // if (!isset($post_templates[$type])) == false (line 1149)
    // if ($this->load_textdomain()) == false (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == false (line 1143)
    // if (!isset($post_templates[$type])) == false (line 1149)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == false (line 1143)
    // if (!isset($post_templates[$type])) == false (line 1149)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == false (line 1143)
    // if (!isset($post_templates[$type])) == false (line 1149)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == false (line 1143)
    // if (!isset($post_templates[$type])) == true (line 1149)
    // if ($this->load_textdomain()) == false (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == false (line 1143)
    // if (!isset($post_templates[$type])) == true (line 1149)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == false (line 1143)
    // if (!isset($post_templates[$type])) == true (line 1149)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == false (line 1143)
    // if (!isset($post_templates[$type])) == true (line 1149)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == true (line 1143)
    // if ($this->load_textdomain()) == false (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == true (line 1143)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == true (line 1143)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == true (line 1143)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == true (line 1143)
    // if (!isset($post_templates[$type])) == false (line 1149)
    // if ($this->load_textdomain()) == false (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == true (line 1143)
    // if (!isset($post_templates[$type])) == false (line 1149)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == true (line 1143)
    // if (!isset($post_templates[$type])) == false (line 1149)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == true (line 1143)
    // if (!isset($post_templates[$type])) == false (line 1149)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == true (line 1143)
    // if (!isset($post_templates[$type])) == true (line 1149)
    // if ($this->load_textdomain()) == false (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == true (line 1143)
    // if (!isset($post_templates[$type])) == true (line 1149)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == true (line 1143)
    // if (!isset($post_templates[$type])) == true (line 1149)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == false (line 1138)
    // if (\preg_match('|Template Post Type:(.*)$|mi', \file_get_contents($full_path), $type)) == true (line 1143)
    // if (!isset($post_templates[$type])) == true (line 1149)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == true (line 1138)
    // if ($this->load_textdomain()) == false (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == true (line 1138)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == true (line 1138)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == false (line 1126)
    // if (!\is_array($post_templates)) == true (line 1132)
    // if (!\preg_match('|Template Name:(.*)$|mi', \file_get_contents($full_path), $header)) == true (line 1138)
    // if ($this->load_textdomain()) == true (line 1160)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post_templates36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->errors() && $this->errors()->get_error_codes() !== array('theme_parent_invalid')) == true (line 1126)

    $actual = $this->wP_Theme->get_post_templates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_page_templates0()
{
    $post = m::mock('UntypedParameter_post_');
    $post_type = m::mock('UntypedParameter_post_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($post) == false (line 1183)

    $actual = $this->wP_Theme->get_page_templates($post, $post_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_page_templates1()
{
    $post = m::mock('UntypedParameter_post_');
    $post_type = m::mock('UntypedParameter_post_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($post) == true (line 1183)

    $actual = $this->wP_Theme->get_page_templates($post, $post_type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad_textdomain0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->textdomain_loaded)) == false (line 1283)
    // if (!$textdomain) == false (line 1288)
    // if (\is_textdomain_loaded($textdomain)) == false (line 1293)
    // if ($domainpath = $this->get('DomainPath')) == false (line 1299)

    $actual = $this->wP_Theme->load_textdomain();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad_textdomain1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->textdomain_loaded)) == false (line 1283)
    // if (!$textdomain) == false (line 1288)
    // if (\is_textdomain_loaded($textdomain)) == false (line 1293)
    // if ($domainpath = $this->get('DomainPath')) == true (line 1299)

    $actual = $this->wP_Theme->load_textdomain();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad_textdomain2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->textdomain_loaded)) == false (line 1283)
    // if (!$textdomain) == false (line 1288)
    // if (\is_textdomain_loaded($textdomain)) == true (line 1293)

    $actual = $this->wP_Theme->load_textdomain();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad_textdomain3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->textdomain_loaded)) == false (line 1283)
    // if (!$textdomain) == true (line 1288)

    $actual = $this->wP_Theme->load_textdomain();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad_textdomain4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->textdomain_loaded)) == true (line 1283)

    $actual = $this->wP_Theme->load_textdomain();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_allowed0()
{
    $check = m::mock('UntypedParameter_check_');
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1320)
    // if ('both' == $check || 'network' == $check) == false (line 1324)
    // if ('both' == $check || 'site' == $check) == false (line 1331)

    $actual = $this->wP_Theme->is_allowed($check, $blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_allowed1()
{
    $check = m::mock('UntypedParameter_check_');
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1320)
    // if ('both' == $check || 'network' == $check) == false (line 1324)
    // if ('both' == $check || 'site' == $check) == true (line 1331)
    // if (!empty($allowed[$this->get_stylesheet()])) == false (line 1333)

    $actual = $this->wP_Theme->is_allowed($check, $blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_allowed2()
{
    $check = m::mock('UntypedParameter_check_');
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1320)
    // if ('both' == $check || 'network' == $check) == false (line 1324)
    // if ('both' == $check || 'site' == $check) == true (line 1331)
    // if (!empty($allowed[$this->get_stylesheet()])) == true (line 1333)

    $actual = $this->wP_Theme->is_allowed($check, $blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_allowed3()
{
    $check = m::mock('UntypedParameter_check_');
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1320)
    // if ('both' == $check || 'network' == $check) == true (line 1324)
    // if (!empty($allowed[$this->get_stylesheet()])) == false (line 1326)
    // if ('both' == $check || 'site' == $check) == false (line 1331)

    $actual = $this->wP_Theme->is_allowed($check, $blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_allowed4()
{
    $check = m::mock('UntypedParameter_check_');
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1320)
    // if ('both' == $check || 'network' == $check) == true (line 1324)
    // if (!empty($allowed[$this->get_stylesheet()])) == false (line 1326)
    // if ('both' == $check || 'site' == $check) == true (line 1331)
    // if (!empty($allowed[$this->get_stylesheet()])) == false (line 1333)

    $actual = $this->wP_Theme->is_allowed($check, $blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_allowed5()
{
    $check = m::mock('UntypedParameter_check_');
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1320)
    // if ('both' == $check || 'network' == $check) == true (line 1324)
    // if (!empty($allowed[$this->get_stylesheet()])) == false (line 1326)
    // if ('both' == $check || 'site' == $check) == true (line 1331)
    // if (!empty($allowed[$this->get_stylesheet()])) == true (line 1333)

    $actual = $this->wP_Theme->is_allowed($check, $blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_allowed6()
{
    $check = m::mock('UntypedParameter_check_');
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1320)
    // if ('both' == $check || 'network' == $check) == true (line 1324)
    // if (!empty($allowed[$this->get_stylesheet()])) == true (line 1326)

    $actual = $this->wP_Theme->is_allowed($check, $blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_allowed7()
{
    $check = m::mock('UntypedParameter_check_');
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == true (line 1320)

    $actual = $this->wP_Theme->is_allowed($check, $blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_core_default_theme0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->get_core_default_theme();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_core_default_theme1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($theme->exists()) == false (line 1353)

    $actual = $this->wP_Theme->get_core_default_theme();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_core_default_theme2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($theme->exists()) == true (line 1353)

    $actual = $this->wP_Theme->get_core_default_theme();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed0()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Theme->get_allowed($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_network0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($allowed_themes)) == false (line 1399)

    $actual = $this->wP_Theme->get_allowed_on_network();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_network1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($allowed_themes)) == true (line 1399)

    $actual = $this->wP_Theme->get_allowed_on_network();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site0()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == false (line 1458)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site1()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site2()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site3()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site4()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site5()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site6()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site7()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site8()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site9()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site10()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site11()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site12()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site13()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site14()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site15()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site16()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site17()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site18()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site19()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site20()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site21()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site22()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site23()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site24()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site25()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == false (line 1458)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site26()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site27()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site28()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site29()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site30()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site31()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site32()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site33()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site34()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site35()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site36()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site37()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site38()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site39()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site40()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site41()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site42()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site43()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site44()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site45()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site46()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site47()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site48()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site49()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site50()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == false (line 1430)
    // if (isset($allowed_themes[$blog_id])) == true (line 1434)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site51()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == false (line 1458)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site52()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site53()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site54()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site55()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site56()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site57()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site58()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site59()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site60()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site61()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site62()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site63()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site64()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site65()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site66()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site67()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site68()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site69()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site70()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site71()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site72()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site73()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site74()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site75()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == false (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site76()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == false (line 1458)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site77()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site78()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site79()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site80()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site81()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site82()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site83()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site84()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site85()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site86()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site87()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site88()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == false (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site89()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site90()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site91()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site92()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site93()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site94()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == false (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site95()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site96()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site97()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == false (line 1467)
    // if (isset($allowed_themes[$blog_id][$theme_data->get('Name')])) == true (line 1473)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site98()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == false (line 1480)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site99()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == false (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site100()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == false (line 1434)
    // if ($current) == true (line 1448)
    // if (\false === $allowed_themes[$blog_id]) == true (line 1458)
    // if ($current) == true (line 1459)
    // if (!\is_array($allowed_themes[$blog_id]) || empty($allowed_themes[$blog_id])) == true (line 1467)
    // if (\is_admin() && $allowed_themes[$blog_id]) == true (line 1480)
    // if ($current) == true (line 1481)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_allowed_on_site101()
{
    $blog_id = m::mock('UntypedParameter_blog_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$blog_id || !\is_multisite()) == true (line 1430)
    // if (isset($allowed_themes[$blog_id])) == true (line 1434)

    $actual = $this->wP_Theme->get_allowed_on_site($blog_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNetwork_enable_theme0()
{
    $stylesheets = m::mock('UntypedParameter_stylesheets_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1506)
    // if (!\is_array($stylesheets)) == false (line 1510)

    $actual = $this->wP_Theme->network_enable_theme($stylesheets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNetwork_enable_theme1()
{
    $stylesheets = m::mock('UntypedParameter_stylesheets_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1506)
    // if (!\is_array($stylesheets)) == false (line 1510)

    $actual = $this->wP_Theme->network_enable_theme($stylesheets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNetwork_enable_theme2()
{
    $stylesheets = m::mock('UntypedParameter_stylesheets_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1506)
    // if (!\is_array($stylesheets)) == true (line 1510)

    $actual = $this->wP_Theme->network_enable_theme($stylesheets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNetwork_enable_theme3()
{
    $stylesheets = m::mock('UntypedParameter_stylesheets_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1506)
    // if (!\is_array($stylesheets)) == true (line 1510)

    $actual = $this->wP_Theme->network_enable_theme($stylesheets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNetwork_enable_theme4()
{
    $stylesheets = m::mock('UntypedParameter_stylesheets_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == true (line 1506)

    $actual = $this->wP_Theme->network_enable_theme($stylesheets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNetwork_disable_theme0()
{
    $stylesheets = m::mock('UntypedParameter_stylesheets_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1531)
    // if (!\is_array($stylesheets)) == false (line 1535)

    $actual = $this->wP_Theme->network_disable_theme($stylesheets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNetwork_disable_theme1()
{
    $stylesheets = m::mock('UntypedParameter_stylesheets_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1531)
    // if (!\is_array($stylesheets)) == false (line 1535)
    // if (isset($allowed_themes[$stylesheet])) == false (line 1541)

    $actual = $this->wP_Theme->network_disable_theme($stylesheets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNetwork_disable_theme2()
{
    $stylesheets = m::mock('UntypedParameter_stylesheets_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1531)
    // if (!\is_array($stylesheets)) == false (line 1535)
    // if (isset($allowed_themes[$stylesheet])) == true (line 1541)

    $actual = $this->wP_Theme->network_disable_theme($stylesheets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNetwork_disable_theme3()
{
    $stylesheets = m::mock('UntypedParameter_stylesheets_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1531)
    // if (!\is_array($stylesheets)) == true (line 1535)

    $actual = $this->wP_Theme->network_disable_theme($stylesheets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNetwork_disable_theme4()
{
    $stylesheets = m::mock('UntypedParameter_stylesheets_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1531)
    // if (!\is_array($stylesheets)) == true (line 1535)
    // if (isset($allowed_themes[$stylesheet])) == false (line 1541)

    $actual = $this->wP_Theme->network_disable_theme($stylesheets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNetwork_disable_theme5()
{
    $stylesheets = m::mock('UntypedParameter_stylesheets_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == false (line 1531)
    // if (!\is_array($stylesheets)) == true (line 1535)
    // if (isset($allowed_themes[$stylesheet])) == true (line 1541)

    $actual = $this->wP_Theme->network_disable_theme($stylesheets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNetwork_disable_theme6()
{
    $stylesheets = m::mock('UntypedParameter_stylesheets_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_multisite()) == true (line 1531)

    $actual = $this->wP_Theme->network_disable_theme($stylesheets);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort_by_name0()
{
    $themes = m::mock('UntypedParameter_themes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 === \strpos(\get_user_locale(), 'en_')) == false (line 1559)

    $actual = $this->wP_Theme->sort_by_name($themes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSort_by_name1()
{
    $themes = m::mock('UntypedParameter_themes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 === \strpos(\get_user_locale(), 'en_')) == true (line 1559)

    $actual = $this->wP_Theme->sort_by_name($themes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
