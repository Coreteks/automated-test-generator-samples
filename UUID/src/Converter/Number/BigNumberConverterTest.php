<?php

namespace tests\Ramsey\Uuid\Converter\Number;

use Mockery as m;
use Ramsey\Uuid\Converter\Number\BigNumberConverter;

class BigNumberConverterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Converter\Number\BigNumberConverter
*/
protected $bigNumberConverter;

public function setUp()
{
    parent::setUp();

    $this->bigNumberConverter = new \Ramsey\Uuid\Converter\Number\BigNumberConverter();
}

public function testFromHex0()
{
    $hex = m::mock('UntypedParameter_hex_');

    // TODO: Your mock expectations here

    $actual = $this->bigNumberConverter->fromHex($hex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToHex0()
{
    $integer = m::mock('UntypedParameter_integer_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$integer instanceof \Moontoast\Math\BigNumber) == false (line 48)

    $actual = $this->bigNumberConverter->toHex($integer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToHex1()
{
    $integer = m::mock('UntypedParameter_integer_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$integer instanceof \Moontoast\Math\BigNumber) == true (line 48)

    $actual = $this->bigNumberConverter->toHex($integer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
