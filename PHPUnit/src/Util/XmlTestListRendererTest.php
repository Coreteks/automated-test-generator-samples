<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\XmlTestListRenderer;

class XmlTestListRendererTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\XmlTestListRenderer
*/
protected $xmlTestListRenderer;

public function setUp()
{
    parent::setUp();

    $this->xmlTestListRenderer = new \PHPUnit\Util\XmlTestListRenderer();
}

public function testRender0()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($currentTestCase !== null) == false (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender1()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($currentTestCase !== null) == true (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender2()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 31)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 59)
    // if ($currentTestCase !== null) == false (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender3()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 31)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 59)
    // if ($currentTestCase !== null) == true (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender4()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 31)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 59)
    // if ($currentTestCase !== null) == false (line 60)
    // if ($currentTestCase !== null) == false (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender5()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 31)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 59)
    // if ($currentTestCase !== null) == false (line 60)
    // if ($currentTestCase !== null) == true (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender6()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 31)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 59)
    // if ($currentTestCase !== null) == true (line 60)
    // if ($currentTestCase !== null) == false (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender7()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 31)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 59)
    // if ($currentTestCase !== null) == true (line 60)
    // if ($currentTestCase !== null) == true (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender8()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 31)
    // if (\get_class($test) !== $currentTestCase) == false (line 32)
    // if (!empty($test->getDataSetAsString(false))) == false (line 47)
    // if ($currentTestCase !== null) == false (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender9()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 31)
    // if (\get_class($test) !== $currentTestCase) == false (line 32)
    // if (!empty($test->getDataSetAsString(false))) == false (line 47)
    // if ($currentTestCase !== null) == true (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender10()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 31)
    // if (\get_class($test) !== $currentTestCase) == false (line 32)
    // if (!empty($test->getDataSetAsString(false))) == true (line 47)
    // if ($currentTestCase !== null) == false (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender11()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 31)
    // if (\get_class($test) !== $currentTestCase) == false (line 32)
    // if (!empty($test->getDataSetAsString(false))) == true (line 47)
    // if ($currentTestCase !== null) == true (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender12()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 31)
    // if (\get_class($test) !== $currentTestCase) == true (line 32)
    // if ($currentTestCase !== null) == false (line 33)
    // if (!empty($test->getDataSetAsString(false))) == false (line 47)
    // if ($currentTestCase !== null) == false (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender13()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 31)
    // if (\get_class($test) !== $currentTestCase) == true (line 32)
    // if ($currentTestCase !== null) == false (line 33)
    // if (!empty($test->getDataSetAsString(false))) == false (line 47)
    // if ($currentTestCase !== null) == true (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender14()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 31)
    // if (\get_class($test) !== $currentTestCase) == true (line 32)
    // if ($currentTestCase !== null) == false (line 33)
    // if (!empty($test->getDataSetAsString(false))) == true (line 47)
    // if ($currentTestCase !== null) == false (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender15()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 31)
    // if (\get_class($test) !== $currentTestCase) == true (line 32)
    // if ($currentTestCase !== null) == false (line 33)
    // if (!empty($test->getDataSetAsString(false))) == true (line 47)
    // if ($currentTestCase !== null) == true (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender16()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 31)
    // if (\get_class($test) !== $currentTestCase) == true (line 32)
    // if ($currentTestCase !== null) == true (line 33)
    // if (!empty($test->getDataSetAsString(false))) == false (line 47)
    // if ($currentTestCase !== null) == false (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender17()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 31)
    // if (\get_class($test) !== $currentTestCase) == true (line 32)
    // if ($currentTestCase !== null) == true (line 33)
    // if (!empty($test->getDataSetAsString(false))) == false (line 47)
    // if ($currentTestCase !== null) == true (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender18()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 31)
    // if (\get_class($test) !== $currentTestCase) == true (line 32)
    // if ($currentTestCase !== null) == true (line 33)
    // if (!empty($test->getDataSetAsString(false))) == true (line 47)
    // if ($currentTestCase !== null) == false (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender19()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 31)
    // if (\get_class($test) !== $currentTestCase) == true (line 32)
    // if ($currentTestCase !== null) == true (line 33)
    // if (!empty($test->getDataSetAsString(false))) == true (line 47)
    // if ($currentTestCase !== null) == true (line 74)

    $actual = $this->xmlTestListRenderer->render($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
