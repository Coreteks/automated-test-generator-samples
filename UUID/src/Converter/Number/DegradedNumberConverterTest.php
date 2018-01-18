<?php

namespace tests\Ramsey\Uuid\Converter\Number;

use Mockery as m;
use Ramsey\Uuid\Converter\Number\DegradedNumberConverter;

class DegradedNumberConverterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Converter\Number\DegradedNumberConverter
*/
protected $degradedNumberConverter;

public function setUp()
{
    parent::setUp();

    $this->degradedNumberConverter = new \Ramsey\Uuid\Converter\Number\DegradedNumberConverter();
}

/**
 * @expectedException \Ramsey\Uuid\Exception\UnsatisfiedDependencyException
 */
public function testFromHex0()
{
    $hex = m::mock('UntypedParameter_hex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \Ramsey\Uuid\Exception\UnsatisfiedDependencyException('Cannot call ' . __METHOD__ . ' without support for large ' . 'integers, since integer is an unsigned ' . '128-bit integer; Moontoast\\Math\\BigNumber is required.') -> exception (line 36)

    $actual = $this->degradedNumberConverter->fromHex($hex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Ramsey\Uuid\Exception\UnsatisfiedDependencyException
 */
public function testToHex0()
{
    $integer = m::mock('UntypedParameter_integer_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \Ramsey\Uuid\Exception\UnsatisfiedDependencyException('Cannot call ' . __METHOD__ . ' without support for large ' . 'integers, since integer is an unsigned ' . '128-bit integer; Moontoast\\Math\\BigNumber is required. ') -> exception (line 52)

    $actual = $this->degradedNumberConverter->toHex($integer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
