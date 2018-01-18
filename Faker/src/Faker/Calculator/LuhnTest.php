<?php

namespace tests\Faker\Calculator;

use Faker\Calculator\Luhn;
use Mockery as m;

class LuhnTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Calculator\Luhn
*/
protected $luhn;

public function setUp()
{
    parent::setUp();

    $this->luhn = new \Faker\Calculator\Luhn();
}

public function testComputeCheckDigit0()
{
    $partialNumber = m::mock('UntypedParameter_partialNumber_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($checkDigit === 0) == false (line 43)

    $actual = $this->luhn->computeCheckDigit($partialNumber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testComputeCheckDigit1()
{
    $partialNumber = m::mock('UntypedParameter_partialNumber_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($checkDigit === 0) == true (line 43)

    $actual = $this->luhn->computeCheckDigit($partialNumber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsValid0()
{
    $number = m::mock('UntypedParameter_number_');

    // TODO: Your mock expectations here

    $actual = $this->luhn->isValid($number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateLuhnNumber0()
{
    $partialValue = m::mock('UntypedParameter_partialValue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('/^\\d+$/', $partialValue)) == false (line 70)

    $actual = $this->luhn->generateLuhnNumber($partialValue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGenerateLuhnNumber1()
{
    $partialValue = m::mock('UntypedParameter_partialValue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('/^\\d+$/', $partialValue)) == true (line 70)
    // throw new \InvalidArgumentException('Argument should be an integer.') -> exception (line 71)

    $actual = $this->luhn->generateLuhnNumber($partialValue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
