<?php

namespace tests;

use Mockery as m;
use WP_Customize_Themes_Section;

class WP_Customize_Themes_SectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Themes_Section
*/
protected $wP_Customize_Themes_Section;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Themes_Section = new \WP_Customize_Themes_Section();
}

public function testJson0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Themes_Section->json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
