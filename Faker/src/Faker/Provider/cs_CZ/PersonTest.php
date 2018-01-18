<?php

namespace tests\Faker\Provider\cs_CZ;

use Faker\Provider\cs_CZ\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\cs_CZ\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\cs_CZ\Person();
}

public function testBirthNumber0()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber1()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber2()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber3()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber4()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber5()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber6()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber7()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber8()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber9()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber10()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber11()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber12()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber13()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber14()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber15()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber16()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber17()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber18()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber19()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber20()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber21()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber22()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber23()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == false (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber24()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber25()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber26()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber27()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber28()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber29()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber30()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber31()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber32()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber33()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber34()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber35()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == false (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber36()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber37()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber38()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber39()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber40()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber41()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == false (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber42()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber43()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == false (line 462)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber44()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber45()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == false (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber46()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == false (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumber47()
{
    $gender = m::mock('UntypedParameter_gender_');
    $minAge = m::mock('UntypedParameter_minAge_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $slashProbability = m::mock('UntypedParameter_slashProbability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === null) == true (line 437)
    // if ($gender == static::GENDER_FEMALE) == true (line 451)
    // if ($year >= 2004 && $this->generator->boolean(10)) == true (line 455)
    // if ($year >= 1954) == true (line 462)
    // if ($crc == 10) == true (line 464)
    // if ($this->generator->boolean($slashProbability)) == true (line 471)

    $actual = $this->person->birthNumber($gender, $minAge, $maxAge, $slashProbability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumberMale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->birthNumberMale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBirthNumberFemale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->birthNumberFemale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTitle0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    $actual = $this->person->title($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTitleMale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->titleMale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTitleFemale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->titleFemale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 515)
    // if ($gender === static::GENDER_FEMALE) == false (line 517)

    $actual = $this->person->lastName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName1()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 515)
    // if ($gender === static::GENDER_FEMALE) == true (line 517)

    $actual = $this->person->lastName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName2()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 515)

    $actual = $this->person->lastName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastNameMale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->lastNameMale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastNameFemale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->lastNameFemale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
