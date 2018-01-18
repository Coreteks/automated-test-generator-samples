<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\TextTestListRenderer;

class TextTestListRendererTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\TextTestListRenderer
*/
protected $textTestListRenderer;

public function setUp()
{
    parent::setUp();

    $this->textTestListRenderer = new \PHPUnit\Util\TextTestListRenderer();
}

public function testRender0()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    $actual = $this->textTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender1()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 24)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 30)

    $actual = $this->textTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender2()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 24)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 30)

    $actual = $this->textTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender3()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 24)

    $actual = $this->textTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
