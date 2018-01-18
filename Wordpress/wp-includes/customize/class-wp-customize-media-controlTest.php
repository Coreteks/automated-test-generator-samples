<?php

namespace tests;

use Mockery as m;
use WP_Customize_Media_Control;

class WP_Customize_Media_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_manager = null;
/**
* @var mixed
*/
protected $_id = null;
/**
* @var mixed
*/
protected $_args = null;
/**
* @var \WP_Customize_Media_Control
*/
protected $wP_Customize_Media_Control;

public function setUp()
{
    parent::setUp();

    $this->_manager = null;
    $this->_id = null;
    $this->_args = null;
    $this->wP_Customize_Media_Control = new \WP_Customize_Media_Control($this->_manager, $this->_id, $this->_args);
}

public function testEnqueue0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Media_Control->enqueue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->setting)) == false (line 85)

    $actual = $this->wP_Customize_Media_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->setting)) == true (line 85)
    // if ($this->setting->default) == false (line 86)
    // if ($value && $this->setting->default && $value === $this->setting->default) == false (line 107)
    // if ($value) == false (line 110)

    $actual = $this->wP_Customize_Media_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->setting)) == true (line 85)
    // if ($this->setting->default) == false (line 86)
    // if ($value && $this->setting->default && $value === $this->setting->default) == false (line 107)
    // if ($value) == true (line 110)

    $actual = $this->wP_Customize_Media_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->setting)) == true (line 85)
    // if ($this->setting->default) == false (line 86)
    // if ($value && $this->setting->default && $value === $this->setting->default) == true (line 107)

    $actual = $this->wP_Customize_Media_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->setting)) == true (line 85)
    // if ($this->setting->default) == true (line 86)
    // if ('image' === $type) == false (line 98)
    // if ($value && $this->setting->default && $value === $this->setting->default) == false (line 107)
    // if ($value) == false (line 110)

    $actual = $this->wP_Customize_Media_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->setting)) == true (line 85)
    // if ($this->setting->default) == true (line 86)
    // if ('image' === $type) == false (line 98)
    // if ($value && $this->setting->default && $value === $this->setting->default) == false (line 107)
    // if ($value) == true (line 110)

    $actual = $this->wP_Customize_Media_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->setting)) == true (line 85)
    // if ($this->setting->default) == true (line 86)
    // if ('image' === $type) == false (line 98)
    // if ($value && $this->setting->default && $value === $this->setting->default) == true (line 107)

    $actual = $this->wP_Customize_Media_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->setting)) == true (line 85)
    // if ($this->setting->default) == true (line 86)
    // if ('image' === $type) == true (line 98)
    // if ($value && $this->setting->default && $value === $this->setting->default) == false (line 107)
    // if ($value) == false (line 110)

    $actual = $this->wP_Customize_Media_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->setting)) == true (line 85)
    // if ($this->setting->default) == true (line 86)
    // if ('image' === $type) == true (line 98)
    // if ($value && $this->setting->default && $value === $this->setting->default) == false (line 107)
    // if ($value) == true (line 110)

    $actual = $this->wP_Customize_Media_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->setting)) == true (line 85)
    // if ($this->setting->default) == true (line 86)
    // if ('image' === $type) == true (line 98)
    // if ($value && $this->setting->default && $value === $this->setting->default) == true (line 107)

    $actual = $this->wP_Customize_Media_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender_content0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Media_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent_template0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Media_Control->content_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_default_button_labels0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($mime_type) (line 220)
    // Case 'video' == false (line 221)
    // Case 'audio' == false (line 231)
    // Case 'image' == false (line 241)
    // Default (line 251)

    $actual = $this->wP_Customize_Media_Control->get_default_button_labels();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_default_button_labels1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($mime_type) (line 220)
    // Case 'video' == false (line 221)
    // Case 'audio' == false (line 231)
    // Case 'image' == true (line 241)

    $actual = $this->wP_Customize_Media_Control->get_default_button_labels();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_default_button_labels2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($mime_type) (line 220)
    // Case 'video' == false (line 221)
    // Case 'audio' == true (line 231)

    $actual = $this->wP_Customize_Media_Control->get_default_button_labels();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_default_button_labels3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($mime_type) (line 220)
    // Case 'video' == true (line 221)

    $actual = $this->wP_Customize_Media_Control->get_default_button_labels();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
