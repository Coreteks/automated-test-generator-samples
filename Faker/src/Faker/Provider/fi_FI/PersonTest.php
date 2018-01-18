<?php

namespace tests\Faker\Provider\fi_FI;

use Faker\Provider\fi_FI\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fi_FI\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\fi_FI\Person();
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testPersonalIdentityNumber0()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == false (line 112)
    // Default (line 115)
    // throw new \InvalidArgumentException('Year must be between 1800 and 2099 inclusive.') -> exception (line 116)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber1()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == true (line 112)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 126)
    // if ($randomDigits === 0) == false (line 133)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber2()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == true (line 112)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 126)
    // if ($randomDigits === 0) == true (line 133)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber3()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == true (line 112)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 126)
    // if ($randomDigits === 0) == false (line 127)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber4()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == true (line 112)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 126)
    // if ($randomDigits === 0) == true (line 127)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber5()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == true (line 112)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 120)
    // if ($randomDigits === 0) == false (line 121)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber6()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == true (line 112)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 120)
    // if ($randomDigits === 0) == true (line 121)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber7()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == true (line 109)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 126)
    // if ($randomDigits === 0) == false (line 133)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber8()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == true (line 109)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 126)
    // if ($randomDigits === 0) == true (line 133)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber9()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == true (line 109)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 126)
    // if ($randomDigits === 0) == false (line 127)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber10()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == true (line 109)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 126)
    // if ($randomDigits === 0) == true (line 127)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber11()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == true (line 109)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 120)
    // if ($randomDigits === 0) == false (line 121)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber12()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == true (line 109)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 120)
    // if ($randomDigits === 0) == true (line 121)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber13()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == true (line 106)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 126)
    // if ($randomDigits === 0) == false (line 133)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber14()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == true (line 106)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 126)
    // if ($randomDigits === 0) == true (line 133)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber15()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == true (line 106)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 126)
    // if ($randomDigits === 0) == false (line 127)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber16()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == true (line 106)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 126)
    // if ($randomDigits === 0) == true (line 127)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber17()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == true (line 106)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 120)
    // if ($randomDigits === 0) == false (line 121)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber18()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == true (line 106)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 120)
    // if ($randomDigits === 0) == true (line 121)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testPersonalIdentityNumber19()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == false (line 112)
    // Default (line 115)
    // throw new \InvalidArgumentException('Year must be between 1800 and 2099 inclusive.') -> exception (line 116)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber20()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == true (line 112)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 126)
    // if ($randomDigits === 0) == false (line 133)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber21()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == true (line 112)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 126)
    // if ($randomDigits === 0) == true (line 133)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber22()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == true (line 112)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 126)
    // if ($randomDigits === 0) == false (line 127)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber23()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == true (line 112)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 126)
    // if ($randomDigits === 0) == true (line 127)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber24()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == true (line 112)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 120)
    // if ($randomDigits === 0) == false (line 121)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber25()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == false (line 109)
    // Case 20 == true (line 112)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 120)
    // if ($randomDigits === 0) == true (line 121)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber26()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == true (line 109)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 126)
    // if ($randomDigits === 0) == false (line 133)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber27()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == true (line 109)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 126)
    // if ($randomDigits === 0) == true (line 133)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber28()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == true (line 109)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 126)
    // if ($randomDigits === 0) == false (line 127)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber29()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == true (line 109)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 126)
    // if ($randomDigits === 0) == true (line 127)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber30()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == true (line 109)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 120)
    // if ($randomDigits === 0) == false (line 121)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber31()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == false (line 106)
    // Case 19 == true (line 109)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 120)
    // if ($randomDigits === 0) == true (line 121)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber32()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == true (line 106)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 126)
    // if ($randomDigits === 0) == false (line 133)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber33()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == true (line 106)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 126)
    // if ($randomDigits === 0) == true (line 133)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber34()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == true (line 106)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 126)
    // if ($randomDigits === 0) == false (line 127)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber35()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == true (line 106)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 120)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 126)
    // if ($randomDigits === 0) == true (line 127)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber36()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == true (line 106)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 120)
    // if ($randomDigits === 0) == false (line 121)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber37()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 100)
    // switch ((int) ($birthdate->format('Y') / 100)) (line 105)
    // Case 18 == true (line 106)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 120)
    // if ($randomDigits === 0) == true (line 121)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
