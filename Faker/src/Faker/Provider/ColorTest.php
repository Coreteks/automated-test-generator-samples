<?php

namespace tests\Faker\Provider;

use Faker\Provider\Color;
use Mockery as m;

class ColorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\Color
*/
protected $color;

public function setUp()
{
    parent::setUp();

    $this->color = new \Faker\Provider\Color();
}

public function testHexColor0()
{
    // TODO: Your mock expectations here

    $actual = $this->color->hexColor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSafeHexColor0()
{
    // TODO: Your mock expectations here

    $actual = $this->color->safeHexColor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRgbColorAsArray0()
{
    // TODO: Your mock expectations here

    $actual = $this->color->rgbColorAsArray();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRgbColor0()
{
    // TODO: Your mock expectations here

    $actual = $this->color->rgbColor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRgbCssColor0()
{
    // TODO: Your mock expectations here

    $actual = $this->color->rgbCssColor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRgbaCssColor0()
{
    // TODO: Your mock expectations here

    $actual = $this->color->rgbaCssColor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSafeColorName0()
{
    // TODO: Your mock expectations here

    $actual = $this->color->safeColorName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testColorName0()
{
    // TODO: Your mock expectations here

    $actual = $this->color->colorName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
