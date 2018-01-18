<?php

namespace tests\Psy\Formatter;

use Mockery as m;
use Psy\Formatter\DocblockFormatter;

class DocblockFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Formatter\DocblockFormatter
*/
protected $docblockFormatter;

public function setUp()
{
    parent::setUp();

    $this->docblockFormatter = new \Psy\Formatter\DocblockFormatter();
}

public function testFormat0()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == false (line 39)
    // if (!empty($docblock->tags)) == false (line 45)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat1()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == false (line 39)
    // if (!empty($docblock->tags)) == true (line 45)
    // if (!empty($tags)) == false (line 55)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat2()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == false (line 39)
    // if (!empty($docblock->tags)) == true (line 45)
    // if (!empty($tags)) == true (line 55)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat3()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == false (line 39)
    // if (!empty($docblock->tags)) == true (line 45)
    // if (isset($docblock->tags[$name])) == false (line 47)
    // if (!empty($tags)) == false (line 55)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat4()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == false (line 39)
    // if (!empty($docblock->tags)) == true (line 45)
    // if (isset($docblock->tags[$name])) == false (line 47)
    // if (!empty($tags)) == true (line 55)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat5()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == false (line 39)
    // if (!empty($docblock->tags)) == true (line 45)
    // if (isset($docblock->tags[$name])) == true (line 47)
    // if (!empty($tags)) == false (line 55)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat6()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == false (line 39)
    // if (!empty($docblock->tags)) == true (line 45)
    // if (isset($docblock->tags[$name])) == true (line 47)
    // if (!empty($tags)) == true (line 55)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat7()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == true (line 39)
    // if (!empty($docblock->tags)) == false (line 45)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat8()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == true (line 39)
    // if (!empty($docblock->tags)) == true (line 45)
    // if (!empty($tags)) == false (line 55)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat9()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == true (line 39)
    // if (!empty($docblock->tags)) == true (line 45)
    // if (!empty($tags)) == true (line 55)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat10()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == true (line 39)
    // if (!empty($docblock->tags)) == true (line 45)
    // if (isset($docblock->tags[$name])) == false (line 47)
    // if (!empty($tags)) == false (line 55)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat11()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == true (line 39)
    // if (!empty($docblock->tags)) == true (line 45)
    // if (isset($docblock->tags[$name])) == false (line 47)
    // if (!empty($tags)) == true (line 55)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat12()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == true (line 39)
    // if (!empty($docblock->tags)) == true (line 45)
    // if (isset($docblock->tags[$name])) == true (line 47)
    // if (!empty($tags)) == false (line 55)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat13()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($docblock->desc)) == true (line 39)
    // if (!empty($docblock->tags)) == true (line 45)
    // if (isset($docblock->tags[$name])) == true (line 47)
    // if (!empty($tags)) == true (line 55)

    $actual = $this->docblockFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
