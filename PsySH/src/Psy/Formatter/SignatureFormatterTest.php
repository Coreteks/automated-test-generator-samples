<?php

namespace tests\Psy\Formatter;

use Mockery as m;
use Psy\Formatter\SignatureFormatter;

class SignatureFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Formatter\SignatureFormatter
*/
protected $signatureFormatter;

public function setUp()
{
    parent::setUp();

    $this->signatureFormatter = new \Psy\Formatter\SignatureFormatter();
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testFormat0()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 35)
    // Case $reflector instanceof \ReflectionFunction == false (line 36)
    // Case $reflector instanceof \Psy\Reflection\ReflectionLanguageConstruct == false (line 37)
    // Case $reflector instanceof \ReflectionClass == false (line 41)
    // Case $reflector instanceof \Psy\Reflection\ReflectionConstant == false (line 44)
    // Case $reflector instanceof \ReflectionMethod == false (line 47)
    // Case $reflector instanceof \ReflectionProperty == false (line 50)
    // Default (line 53)
    // throw new \InvalidArgumentException('Unexpected Reflector class: ' . get_class($reflector)) -> exception (line 54)

    $actual = $this->signatureFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat1()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 35)
    // Case $reflector instanceof \ReflectionFunction == false (line 36)
    // Case $reflector instanceof \Psy\Reflection\ReflectionLanguageConstruct == false (line 37)
    // Case $reflector instanceof \ReflectionClass == false (line 41)
    // Case $reflector instanceof \Psy\Reflection\ReflectionConstant == false (line 44)
    // Case $reflector instanceof \ReflectionMethod == false (line 47)
    // Case $reflector instanceof \ReflectionProperty == true (line 50)

    $actual = $this->signatureFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat2()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 35)
    // Case $reflector instanceof \ReflectionFunction == false (line 36)
    // Case $reflector instanceof \Psy\Reflection\ReflectionLanguageConstruct == false (line 37)
    // Case $reflector instanceof \ReflectionClass == false (line 41)
    // Case $reflector instanceof \Psy\Reflection\ReflectionConstant == false (line 44)
    // Case $reflector instanceof \ReflectionMethod == true (line 47)

    $actual = $this->signatureFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat3()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 35)
    // Case $reflector instanceof \ReflectionFunction == false (line 36)
    // Case $reflector instanceof \Psy\Reflection\ReflectionLanguageConstruct == false (line 37)
    // Case $reflector instanceof \ReflectionClass == false (line 41)
    // Case $reflector instanceof \Psy\Reflection\ReflectionConstant == true (line 44)

    $actual = $this->signatureFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat4()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 35)
    // Case $reflector instanceof \ReflectionFunction == false (line 36)
    // Case $reflector instanceof \Psy\Reflection\ReflectionLanguageConstruct == false (line 37)
    // Case $reflector instanceof \ReflectionClass == true (line 41)

    $actual = $this->signatureFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat5()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 35)
    // Case $reflector instanceof \ReflectionFunction == false (line 36)
    // Case $reflector instanceof \Psy\Reflection\ReflectionLanguageConstruct == true (line 37)

    $actual = $this->signatureFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat6()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 35)
    // Case $reflector instanceof \ReflectionFunction == true (line 36)

    $actual = $this->signatureFormatter->format($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatName0()
{
    $reflector = m::mock(\Reflector::class);

    // TODO: Your mock expectations here

    $actual = $this->signatureFormatter->formatName($reflector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
