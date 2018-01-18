<?php

namespace tests\Faker\Provider;

use Faker\Generator;
use Faker\Provider\Base;
use Mockery as m;

class BaseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Faker\Provider\Base
*/
protected $base;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->base = new \Faker\Provider\Base($this->_generator);
}

public function testRandomDigit0()
{
    // TODO: Your mock expectations here

    $actual = $this->base->randomDigit();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomDigitNotNull0()
{
    // TODO: Your mock expectations here

    $actual = $this->base->randomDigitNotNull();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomDigitNot0()
{
    $except = m::mock('UntypedParameter_except_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($result >= $except) == false (line 59)

    $actual = $this->base->randomDigitNot($except);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomDigitNot1()
{
    $except = m::mock('UntypedParameter_except_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($result >= $except) == true (line 59)

    $actual = $this->base->randomDigitNot($except);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomNumber0()
{
    $nbDigits = m::mock('UntypedParameter_nbDigits_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_bool($strict)) == false (line 78)
    // if (null === $nbDigits) == false (line 81)
    // if ($max > mt_getrandmax()) == false (line 85)
    // if ($strict) == false (line 88)

    $actual = $this->base->randomNumber($nbDigits, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomNumber1()
{
    $nbDigits = m::mock('UntypedParameter_nbDigits_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_bool($strict)) == false (line 78)
    // if (null === $nbDigits) == false (line 81)
    // if ($max > mt_getrandmax()) == false (line 85)
    // if ($strict) == true (line 88)

    $actual = $this->base->randomNumber($nbDigits, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testRandomNumber2()
{
    $nbDigits = m::mock('UntypedParameter_nbDigits_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_bool($strict)) == false (line 78)
    // if (null === $nbDigits) == false (line 81)
    // if ($max > mt_getrandmax()) == true (line 85)
    // throw new \InvalidArgumentException('randomNumber() can only generate numbers up to mt_getrandmax()') -> exception (line 86)

    $actual = $this->base->randomNumber($nbDigits, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomNumber3()
{
    $nbDigits = m::mock('UntypedParameter_nbDigits_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_bool($strict)) == false (line 78)
    // if (null === $nbDigits) == true (line 81)
    // if ($max > mt_getrandmax()) == false (line 85)
    // if ($strict) == false (line 88)

    $actual = $this->base->randomNumber($nbDigits, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomNumber4()
{
    $nbDigits = m::mock('UntypedParameter_nbDigits_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_bool($strict)) == false (line 78)
    // if (null === $nbDigits) == true (line 81)
    // if ($max > mt_getrandmax()) == false (line 85)
    // if ($strict) == true (line 88)

    $actual = $this->base->randomNumber($nbDigits, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testRandomNumber5()
{
    $nbDigits = m::mock('UntypedParameter_nbDigits_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_bool($strict)) == false (line 78)
    // if (null === $nbDigits) == true (line 81)
    // if ($max > mt_getrandmax()) == true (line 85)
    // throw new \InvalidArgumentException('randomNumber() can only generate numbers up to mt_getrandmax()') -> exception (line 86)

    $actual = $this->base->randomNumber($nbDigits, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testRandomNumber6()
{
    $nbDigits = m::mock('UntypedParameter_nbDigits_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_bool($strict)) == true (line 78)
    // throw new \InvalidArgumentException('randomNumber() generates numbers of fixed width. To generate numbers between two boundaries, use numberBetween() instead.') -> exception (line 79)

    $actual = $this->base->randomNumber($nbDigits, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomFloat0()
{
    $nbMaxDecimals = m::mock('UntypedParameter_nbMaxDecimals_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $nbMaxDecimals) == false (line 107)
    // if (null === $max) == false (line 111)
    // if ($min > $max) == false (line 118)

    $actual = $this->base->randomFloat($nbMaxDecimals, $min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomFloat1()
{
    $nbMaxDecimals = m::mock('UntypedParameter_nbMaxDecimals_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $nbMaxDecimals) == false (line 107)
    // if (null === $max) == false (line 111)
    // if ($min > $max) == true (line 118)

    $actual = $this->base->randomFloat($nbMaxDecimals, $min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomFloat2()
{
    $nbMaxDecimals = m::mock('UntypedParameter_nbMaxDecimals_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $nbMaxDecimals) == false (line 107)
    // if (null === $max) == true (line 111)
    // if ($min > $max) == false (line 113)
    // if ($min > $max) == false (line 118)

    $actual = $this->base->randomFloat($nbMaxDecimals, $min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomFloat3()
{
    $nbMaxDecimals = m::mock('UntypedParameter_nbMaxDecimals_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $nbMaxDecimals) == false (line 107)
    // if (null === $max) == true (line 111)
    // if ($min > $max) == false (line 113)
    // if ($min > $max) == true (line 118)

    $actual = $this->base->randomFloat($nbMaxDecimals, $min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomFloat4()
{
    $nbMaxDecimals = m::mock('UntypedParameter_nbMaxDecimals_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $nbMaxDecimals) == false (line 107)
    // if (null === $max) == true (line 111)
    // if ($min > $max) == true (line 113)
    // if ($min > $max) == false (line 118)

    $actual = $this->base->randomFloat($nbMaxDecimals, $min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomFloat5()
{
    $nbMaxDecimals = m::mock('UntypedParameter_nbMaxDecimals_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $nbMaxDecimals) == false (line 107)
    // if (null === $max) == true (line 111)
    // if ($min > $max) == true (line 113)
    // if ($min > $max) == true (line 118)

    $actual = $this->base->randomFloat($nbMaxDecimals, $min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomFloat6()
{
    $nbMaxDecimals = m::mock('UntypedParameter_nbMaxDecimals_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $nbMaxDecimals) == true (line 107)
    // if (null === $max) == false (line 111)
    // if ($min > $max) == false (line 118)

    $actual = $this->base->randomFloat($nbMaxDecimals, $min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomFloat7()
{
    $nbMaxDecimals = m::mock('UntypedParameter_nbMaxDecimals_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $nbMaxDecimals) == true (line 107)
    // if (null === $max) == false (line 111)
    // if ($min > $max) == true (line 118)

    $actual = $this->base->randomFloat($nbMaxDecimals, $min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomFloat8()
{
    $nbMaxDecimals = m::mock('UntypedParameter_nbMaxDecimals_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $nbMaxDecimals) == true (line 107)
    // if (null === $max) == true (line 111)
    // if ($min > $max) == false (line 113)
    // if ($min > $max) == false (line 118)

    $actual = $this->base->randomFloat($nbMaxDecimals, $min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomFloat9()
{
    $nbMaxDecimals = m::mock('UntypedParameter_nbMaxDecimals_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $nbMaxDecimals) == true (line 107)
    // if (null === $max) == true (line 111)
    // if ($min > $max) == false (line 113)
    // if ($min > $max) == true (line 118)

    $actual = $this->base->randomFloat($nbMaxDecimals, $min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomFloat10()
{
    $nbMaxDecimals = m::mock('UntypedParameter_nbMaxDecimals_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $nbMaxDecimals) == true (line 107)
    // if (null === $max) == true (line 111)
    // if ($min > $max) == true (line 113)
    // if ($min > $max) == false (line 118)

    $actual = $this->base->randomFloat($nbMaxDecimals, $min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomFloat11()
{
    $nbMaxDecimals = m::mock('UntypedParameter_nbMaxDecimals_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $nbMaxDecimals) == true (line 107)
    // if (null === $max) == true (line 111)
    // if ($min > $max) == true (line 113)
    // if ($min > $max) == true (line 118)

    $actual = $this->base->randomFloat($nbMaxDecimals, $min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumberBetween0()
{
    $int1 = m::mock('UntypedParameter_int1_');
    $int2 = m::mock('UntypedParameter_int2_');

    // TODO: Your mock expectations here

    $actual = $this->base->numberBetween($int1, $int2);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomLetter0()
{
    // TODO: Your mock expectations here

    $actual = $this->base->randomLetter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomAscii0()
{
    // TODO: Your mock expectations here

    $actual = $this->base->randomAscii();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElements0()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == false (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == false (line 186)
    // while ($numElements < $count) == false (line 194)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElements1()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == false (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == false (line 186)
    // while ($numElements < $count) == true (line 194)
    // if (!$allowDuplicates) == false (line 197)
    // while ($numElements < $count) == false (line 194)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElements2()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == false (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == false (line 186)
    // while ($numElements < $count) == true (line 194)
    // if (!$allowDuplicates) == true (line 197)
    // if (isset($keys[$num])) == false (line 198)
    // while ($numElements < $count) == false (line 194)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElements3()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == false (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == false (line 186)
    // while ($numElements < $count) == true (line 194)
    // if (!$allowDuplicates) == true (line 197)
    // if (isset($keys[$num])) == true (line 198)
    // while ($numElements < $count) == false (line 194)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LengthException
 */
public function testRandomElements4()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == false (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == true (line 186)
    // throw new \LengthException(sprintf('Cannot get %d elements, only %d in array', $count, $numKeys)) -> exception (line 187)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElements5()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == true (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == false (line 186)
    // while ($numElements < $count) == false (line 194)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElements6()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == true (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == false (line 186)
    // while ($numElements < $count) == true (line 194)
    // if (!$allowDuplicates) == false (line 197)
    // while ($numElements < $count) == false (line 194)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElements7()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == true (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == false (line 186)
    // while ($numElements < $count) == true (line 194)
    // if (!$allowDuplicates) == true (line 197)
    // if (isset($keys[$num])) == false (line 198)
    // while ($numElements < $count) == false (line 194)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElements8()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == true (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == false (line 186)
    // while ($numElements < $count) == true (line 194)
    // if (!$allowDuplicates) == true (line 197)
    // if (isset($keys[$num])) == true (line 198)
    // while ($numElements < $count) == false (line 194)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LengthException
 */
public function testRandomElements9()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == true (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == true (line 186)
    // throw new \LengthException(sprintf('Cannot get %d elements, only %d in array', $count, $numKeys)) -> exception (line 187)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElements10()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == true (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == false (line 186)
    // while ($numElements < $count) == false (line 194)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElements11()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == true (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == false (line 186)
    // while ($numElements < $count) == true (line 194)
    // if (!$allowDuplicates) == false (line 197)
    // while ($numElements < $count) == false (line 194)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElements12()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == true (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == false (line 186)
    // while ($numElements < $count) == true (line 194)
    // if (!$allowDuplicates) == true (line 197)
    // if (isset($keys[$num])) == false (line 198)
    // while ($numElements < $count) == false (line 194)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElements13()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == true (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == false (line 186)
    // while ($numElements < $count) == true (line 194)
    // if (!$allowDuplicates) == true (line 197)
    // if (isset($keys[$num])) == true (line 198)
    // while ($numElements < $count) == false (line 194)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LengthException
 */
public function testRandomElements14()
{
    $array = m::mock('UntypedParameter_array_');
    $count = m::mock('UntypedParameter_count_');
    $allowDuplicates = m::mock('UntypedParameter_allowDuplicates_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($array instanceof \Traversable) == true (line 175)
    // if (!$allowDuplicates && $numKeys < $count) == true (line 186)
    // throw new \LengthException(sprintf('Cannot get %d elements, only %d in array', $count, $numKeys)) -> exception (line 187)

    $actual = $this->base->randomElements($array, $count, $allowDuplicates);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElement0()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$array || $array instanceof \Traversable && !count($array)) == false (line 219)

    $actual = $this->base->randomElement($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomElement1()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$array || $array instanceof \Traversable && !count($array)) == true (line 219)

    $actual = $this->base->randomElement($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomKey0()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$array) == false (line 235)

    $actual = $this->base->randomKey($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomKey1()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$array) == true (line 235)

    $actual = $this->base->randomKey($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testShuffle0()
{
    $arg = m::mock('UntypedParameter_arg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($arg)) == false (line 260)
    // if (is_string($arg)) == false (line 263)
    // throw new \InvalidArgumentException('shuffle() only supports strings or arrays') -> exception (line 266)

    $actual = $this->base->shuffle($arg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShuffle1()
{
    $arg = m::mock('UntypedParameter_arg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($arg)) == false (line 260)
    // if (is_string($arg)) == true (line 263)

    $actual = $this->base->shuffle($arg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShuffle2()
{
    $arg = m::mock('UntypedParameter_arg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($arg)) == true (line 260)

    $actual = $this->base->shuffle($arg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShuffleArray0()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    $actual = $this->base->shuffleArray($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShuffleArray1()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i == 0) == false (line 290)
    // if ($j == $i) == false (line 295)

    $actual = $this->base->shuffleArray($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShuffleArray2()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i == 0) == false (line 290)
    // if ($j == $i) == true (line 295)

    $actual = $this->base->shuffleArray($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShuffleArray3()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i == 0) == true (line 290)
    // if ($j == $i) == false (line 295)

    $actual = $this->base->shuffleArray($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShuffleArray4()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($i == 0) == true (line 290)
    // if ($j == $i) == true (line 295)

    $actual = $this->base->shuffleArray($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShuffleString0()
{
    $string = m::mock('UntypedParameter_string_');
    $encoding = m::mock('UntypedParameter_encoding_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (function_exists('mb_strlen')) == false (line 325)

    $actual = $this->base->shuffleString($string, $encoding);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShuffleString1()
{
    $string = m::mock('UntypedParameter_string_');
    $encoding = m::mock('UntypedParameter_encoding_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (function_exists('mb_strlen')) == true (line 325)
    // for (...) == false (line 329)

    $actual = $this->base->shuffleString($string, $encoding);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShuffleString2()
{
    $string = m::mock('UntypedParameter_string_');
    $encoding = m::mock('UntypedParameter_encoding_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (function_exists('mb_strlen')) == true (line 325)
    // for (...) == true (line 329)
    // for (...) == false (line 329)

    $actual = $this->base->shuffleString($string, $encoding);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == false (line 363)
    // if ($nbReplacements = count($toReplace)) == false (line 370)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify1()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == false (line 363)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify2()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == false (line 363)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == true (line 379)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify3()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == false (line 363)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == true (line 374)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify4()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == false (line 363)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == true (line 374)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == true (line 379)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify5()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == false (line 370)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify6()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify7()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == true (line 379)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify8()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == true (line 374)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify9()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == true (line 374)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == true (line 379)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify10()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == true (line 364)
    // if ($string[$i] === '#') == false (line 365)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == false (line 370)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify11()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == true (line 364)
    // if ($string[$i] === '#') == false (line 365)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify12()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == true (line 364)
    // if ($string[$i] === '#') == false (line 365)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == true (line 379)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify13()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == true (line 364)
    // if ($string[$i] === '#') == false (line 365)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == true (line 374)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify14()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == true (line 364)
    // if ($string[$i] === '#') == false (line 365)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == true (line 374)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == true (line 379)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify15()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == true (line 364)
    // if ($string[$i] === '#') == true (line 365)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == false (line 370)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify16()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == true (line 364)
    // if ($string[$i] === '#') == true (line 365)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify17()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == true (line 364)
    // if ($string[$i] === '#') == true (line 365)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == true (line 379)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify18()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == true (line 364)
    // if ($string[$i] === '#') == true (line 365)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == true (line 374)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumerify19()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($pos = strpos($string, '#')) !== false) == true (line 363)
    // for (...) == true (line 364)
    // if ($string[$i] === '#') == true (line 365)
    // for (...) == false (line 364)
    // if ($nbReplacements = count($toReplace)) == true (line 370)
    // while ($i < $nbReplacements) == true (line 374)
    // while ($i < $nbReplacements) == false (line 374)
    // for (...) == true (line 379)
    // for (...) == false (line 379)

    $actual = $this->base->numerify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLexify0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->base->lexify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBothify0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->base->bothify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAsciify0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->base->asciify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegexify0()
{
    $regex = m::mock('UntypedParameter_regex_');

    // TODO: Your mock expectations here

    $actual = $this->base->regexify($regex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToLower0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->base->toLower($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToUpper0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->base->toUpper($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOptional0()
{
    $weight = m::mock('UntypedParameter_weight_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($weight > 0 && $weight < 1 && mt_rand() / mt_getrandmax() <= $weight) == false (line 537)
    // if (is_int($weight) && mt_rand(1, 100) <= $weight) == false (line 542)

    $actual = $this->base->optional($weight, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOptional1()
{
    $weight = m::mock('UntypedParameter_weight_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($weight > 0 && $weight < 1 && mt_rand() / mt_getrandmax() <= $weight) == false (line 537)
    // if (is_int($weight) && mt_rand(1, 100) <= $weight) == true (line 542)

    $actual = $this->base->optional($weight, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOptional2()
{
    $weight = m::mock('UntypedParameter_weight_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($weight > 0 && $weight < 1 && mt_rand() / mt_getrandmax() <= $weight) == true (line 537)

    $actual = $this->base->optional($weight, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnique0()
{
    $reset = m::mock('UntypedParameter_reset_');
    $maxRetries = m::mock('UntypedParameter_maxRetries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reset || !$this->unique) == false (line 566)

    $actual = $this->base->unique($reset, $maxRetries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnique1()
{
    $reset = m::mock('UntypedParameter_reset_');
    $maxRetries = m::mock('UntypedParameter_maxRetries_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reset || !$this->unique) == true (line 566)

    $actual = $this->base->unique($reset, $maxRetries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid0()
{
    $validator = m::mock('UntypedParameter_validator_');
    $maxRetries = m::mock('UntypedParameter_maxRetries_');

    // TODO: Your mock expectations here

    $actual = $this->base->valid($validator, $maxRetries);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
