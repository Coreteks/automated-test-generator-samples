<?php

namespace tests\Psy\Formatter;

use Mockery as m;
use Psy\Formatter\CodeFormatter;

class CodeFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Formatter\CodeFormatter
*/
protected $codeFormatter;

public function setUp()
{
    parent::setUp();

    $this->codeFormatter = new \Psy\Formatter\CodeFormatter();
}

/**
 * @expectedException \Psy\Exception\RuntimeException
 */
public function testFormat0()
{
    $reflector = m::mock(\Reflector::class);
    $colorMode = m::mock('UntypedParameter_colorMode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::isReflectable($reflector)) == false (line 34)
    // if ($reflector instanceof \ReflectionGenerator) == false (line 40)
    // if ($fileName = $reflector->getFileName()) == false (line 44)
    // throw new \Psy\Exception\RuntimeException('Source code unavailable.') -> exception (line 59)

    $actual = $this->codeFormatter->format($reflector, $colorMode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat1()
{
    $reflector = m::mock(\Reflector::class);
    $colorMode = m::mock('UntypedParameter_colorMode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::isReflectable($reflector)) == false (line 34)
    // if ($reflector instanceof \ReflectionGenerator) == false (line 40)
    // if ($fileName = $reflector->getFileName()) == true (line 44)
    // if (!is_file($fileName)) == false (line 45)

    $actual = $this->codeFormatter->format($reflector, $colorMode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\RuntimeException
 */
public function testFormat2()
{
    $reflector = m::mock(\Reflector::class);
    $colorMode = m::mock('UntypedParameter_colorMode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::isReflectable($reflector)) == false (line 34)
    // if ($reflector instanceof \ReflectionGenerator) == false (line 40)
    // if ($fileName = $reflector->getFileName()) == true (line 44)
    // if (!is_file($fileName)) == true (line 45)
    // throw new \Psy\Exception\RuntimeException('Source code unavailable.') -> exception (line 46)

    $actual = $this->codeFormatter->format($reflector, $colorMode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\RuntimeException
 */
public function testFormat3()
{
    $reflector = m::mock(\Reflector::class);
    $colorMode = m::mock('UntypedParameter_colorMode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::isReflectable($reflector)) == false (line 34)
    // if ($reflector instanceof \ReflectionGenerator) == true (line 40)
    // if ($fileName = $reflector->getFileName()) == false (line 44)
    // throw new \Psy\Exception\RuntimeException('Source code unavailable.') -> exception (line 59)

    $actual = $this->codeFormatter->format($reflector, $colorMode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat4()
{
    $reflector = m::mock(\Reflector::class);
    $colorMode = m::mock('UntypedParameter_colorMode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::isReflectable($reflector)) == false (line 34)
    // if ($reflector instanceof \ReflectionGenerator) == true (line 40)
    // if ($fileName = $reflector->getFileName()) == true (line 44)
    // if (!is_file($fileName)) == false (line 45)

    $actual = $this->codeFormatter->format($reflector, $colorMode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\RuntimeException
 */
public function testFormat5()
{
    $reflector = m::mock(\Reflector::class);
    $colorMode = m::mock('UntypedParameter_colorMode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::isReflectable($reflector)) == false (line 34)
    // if ($reflector instanceof \ReflectionGenerator) == true (line 40)
    // if ($fileName = $reflector->getFileName()) == true (line 44)
    // if (!is_file($fileName)) == true (line 45)
    // throw new \Psy\Exception\RuntimeException('Source code unavailable.') -> exception (line 46)

    $actual = $this->codeFormatter->format($reflector, $colorMode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\RuntimeException
 */
public function testFormat6()
{
    $reflector = m::mock(\Reflector::class);
    $colorMode = m::mock('UntypedParameter_colorMode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::isReflectable($reflector)) == true (line 34)
    // throw new \Psy\Exception\RuntimeException('Source code unavailable.') -> exception (line 35)

    $actual = $this->codeFormatter->format($reflector, $colorMode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
