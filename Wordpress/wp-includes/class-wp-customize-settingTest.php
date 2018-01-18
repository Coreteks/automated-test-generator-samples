<?php

namespace tests;

use Mockery as m;
use WP_Customize_Setting;

class WP_Customize_SettingTest extends \PHPUnit_Framework_TestCase
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
* @var \WP_Customize_Setting
*/
protected $wP_Customize_Setting;

public function setUp()
{
    parent::setUp();

    $this->_manager = null;
    $this->_id = null;
    $this->_args = null;
    $this->wP_Customize_Setting = new \WP_Customize_Setting($this->_manager, $this->_id, $this->_args);
}

public function testId_data0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Setting->id_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset_aggregated_multidimensionals0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Setting->reset_aggregated_multidimensionals();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_current_blog_previewed0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 277)

    $actual = $this->wP_Customize_Setting->is_current_blog_previewed();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_current_blog_previewed1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 277)

    $actual = $this->wP_Customize_Setting->is_current_blog_previewed();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == false (line 362)
    // Default (line 374)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == false (line 363)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 366)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == false (line 363)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == true (line 366)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == true (line 363)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == false (line 352)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 355)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == false (line 352)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == true (line 355)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == true (line 352)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == true (line 343)
    // if (!\has_action("customize_post_value_set_{$this->id}", array($this, 'preview'))) == false (line 344)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == true (line 343)
    // if (!\has_action("customize_post_value_set_{$this->id}", array($this, 'preview'))) == true (line 344)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == false (line 362)
    // Default (line 374)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == false (line 363)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 366)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == false (line 363)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == true (line 366)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == true (line 363)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == false (line 352)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 355)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == false (line 352)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == true (line 355)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == true (line 352)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == true (line 343)
    // if (!\has_action("customize_post_value_set_{$this->id}", array($this, 'preview'))) == false (line 344)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == true (line 343)
    // if (!\has_action("customize_post_value_set_{$this->id}", array($this, 'preview'))) == true (line 344)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == false (line 362)
    // Default (line 374)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == false (line 363)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 366)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == false (line 363)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == true (line 366)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == true (line 363)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == false (line 352)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 355)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == false (line 352)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == true (line 355)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == true (line 352)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == true (line 343)
    // if (!\has_action("customize_post_value_set_{$this->id}", array($this, 'preview'))) == false (line 344)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == true (line 343)
    // if (!\has_action("customize_post_value_set_{$this->id}", array($this, 'preview'))) == true (line 344)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == false (line 305)
    // if ($this->is_previewed) == true (line 310)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == false (line 362)
    // Default (line 374)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == false (line 363)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 366)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == false (line 363)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == true (line 366)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == true (line 363)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == false (line 352)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 355)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == false (line 352)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == true (line 355)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == true (line 352)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == true (line 343)
    // if (!\has_action("customize_post_value_set_{$this->id}", array($this, 'preview'))) == false (line 344)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == false (line 329)
    // if (!$needs_preview) == true (line 343)
    // if (!\has_action("customize_post_value_set_{$this->id}", array($this, 'preview'))) == true (line 344)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == false (line 362)
    // Default (line 374)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == false (line 363)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 366)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == false (line 363)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == true (line 366)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == true (line 363)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == false (line 352)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 355)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == false (line 352)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == true (line 355)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == true (line 352)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == true (line 343)
    // if (!\has_action("customize_post_value_set_{$this->id}", array($this, 'preview'))) == false (line 344)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == false (line 330)
    // if (!$needs_preview) == true (line 343)
    // if (!\has_action("customize_post_value_set_{$this->id}", array($this, 'preview'))) == true (line 344)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == false (line 362)
    // Default (line 374)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == false (line 363)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 366)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview48()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == false (line 363)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == true (line 366)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview49()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == false (line 351)
    // Case 'option' == true (line 362)
    // if (!$is_multidimensional) == true (line 363)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview50()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == false (line 352)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 355)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview51()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == false (line 352)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == true (line 355)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview52()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == false (line 343)
    // switch ($this->type) (line 350)
    // Case 'theme_mod' == true (line 351)
    // if (!$is_multidimensional) == true (line 352)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview53()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == true (line 343)
    // if (!\has_action("customize_post_value_set_{$this->id}", array($this, 'preview'))) == false (line 344)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview54()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == false (line 310)
    // if (!$needs_preview) == true (line 329)
    // if ($this->is_multidimensional_aggregated) == true (line 330)
    // if (!$needs_preview) == true (line 343)
    // if (!\has_action("customize_post_value_set_{$this->id}", array($this, 'preview'))) == true (line 344)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreview55()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_previewed_blog_id)) == true (line 305)
    // if ($this->is_previewed) == true (line 310)

    $actual = $this->wP_Customize_Setting->preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_clear_aggregated_multidimensional_preview_applied_flag0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Setting->_clear_aggregated_multidimensional_preview_applied_flag();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_preview_filter0()
{
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_current_blog_previewed()) == false (line 434)
    // if ($undefined !== $post_value) == false (line 440)

    $actual = $this->wP_Customize_Setting->_preview_filter($original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_preview_filter1()
{
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_current_blog_previewed()) == false (line 434)
    // if ($undefined !== $post_value) == true (line 440)

    $actual = $this->wP_Customize_Setting->_preview_filter($original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_preview_filter2()
{
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_current_blog_previewed()) == true (line 434)

    $actual = $this->wP_Customize_Setting->_preview_filter($original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_multidimensional_preview_filter0()
{
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_current_blog_previewed()) == false (line 466)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 473)

    $actual = $this->wP_Customize_Setting->_multidimensional_preview_filter($original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_multidimensional_preview_filter1()
{
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_current_blog_previewed()) == false (line 466)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 473)
    // if (!empty(self::$aggregated_multidimensionals[$this->type][$id_base]['preview_applied_instances'][$previewed_setting->id])) == false (line 479)

    $actual = $this->wP_Customize_Setting->_multidimensional_preview_filter($original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_multidimensional_preview_filter2()
{
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_current_blog_previewed()) == false (line 466)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == false (line 473)
    // if (!empty(self::$aggregated_multidimensionals[$this->type][$id_base]['preview_applied_instances'][$previewed_setting->id])) == true (line 479)

    $actual = $this->wP_Customize_Setting->_multidimensional_preview_filter($original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_multidimensional_preview_filter3()
{
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_current_blog_previewed()) == false (line 466)
    // if (empty(self::$aggregated_multidimensionals[$this->type][$id_base]['previewed_instances'])) == true (line 473)

    $actual = $this->wP_Customize_Setting->_multidimensional_preview_filter($original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_multidimensional_preview_filter4()
{
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_current_blog_previewed()) == true (line 466)

    $actual = $this->wP_Customize_Setting->_multidimensional_preview_filter($original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->check_capabilities() || !isset($value)) == false (line 507)

    $actual = $this->wP_Customize_Setting->save();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->check_capabilities() || !isset($value)) == true (line 507)

    $actual = $this->wP_Customize_Setting->save();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPost_value0()
{
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Setting->post_value($default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Setting->sanitize($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($value)) == false (line 574)
    // if (\is_null($value)) == false (line 577)
    // if (\is_wp_error($validity) && empty($validity->errors)) == false (line 598)

    $actual = $this->wP_Customize_Setting->validate($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($value)) == false (line 574)
    // if (\is_null($value)) == false (line 577)
    // if (\is_wp_error($validity) && empty($validity->errors)) == true (line 598)

    $actual = $this->wP_Customize_Setting->validate($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate2()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($value)) == false (line 574)
    // if (\is_null($value)) == true (line 577)

    $actual = $this->wP_Customize_Setting->validate($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate3()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($value)) == true (line 574)

    $actual = $this->wP_Customize_Setting->validate($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_core_type && !$this->is_multidimensional_aggregated) == false (line 725)
    // if ($this->is_multidimensional_aggregated) == false (line 753)

    $actual = $this->wP_Customize_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_core_type && !$this->is_multidimensional_aggregated) == false (line 725)
    // if ($this->is_multidimensional_aggregated) == true (line 753)
    // if ($this->is_previewed) == false (line 758)

    $actual = $this->wP_Customize_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_core_type && !$this->is_multidimensional_aggregated) == false (line 725)
    // if ($this->is_multidimensional_aggregated) == true (line 753)
    // if ($this->is_previewed) == true (line 758)

    $actual = $this->wP_Customize_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_core_type && !$this->is_multidimensional_aggregated) == true (line 725)
    // if ($this->is_previewed) == false (line 728)

    $actual = $this->wP_Customize_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_core_type && !$this->is_multidimensional_aggregated) == true (line 725)
    // if ($this->is_previewed) == true (line 728)
    // if (\null !== $value) == false (line 730)

    $actual = $this->wP_Customize_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValue5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$is_core_type && !$this->is_multidimensional_aggregated) == true (line 725)
    // if ($this->is_previewed) == true (line 728)
    // if (\null !== $value) == true (line 730)

    $actual = $this->wP_Customize_Setting->value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJs_value0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_string($value)) == false (line 788)

    $actual = $this->wP_Customize_Setting->js_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJs_value1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_string($value)) == true (line 788)

    $actual = $this->wP_Customize_Setting->js_value();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Setting->json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->capability && !\call_user_func_array('current_user_can', (array) $this->capability)) == false (line 819)
    // if ($this->theme_supports && !\call_user_func_array('current_theme_supports', (array) $this->theme_supports)) == false (line 823)

    $actual = $this->wP_Customize_Setting->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->capability && !\call_user_func_array('current_user_can', (array) $this->capability)) == false (line 819)
    // if ($this->theme_supports && !\call_user_func_array('current_theme_supports', (array) $this->theme_supports)) == true (line 823)

    $actual = $this->wP_Customize_Setting->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_capabilities2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->capability && !\call_user_func_array('current_user_can', (array) $this->capability)) == true (line 819)

    $actual = $this->wP_Customize_Setting->check_capabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
