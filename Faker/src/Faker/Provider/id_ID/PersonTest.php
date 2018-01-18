<?php

namespace tests\Faker\Provider\id_ID;

use Faker\Provider\id_ID\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\id_ID\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\id_ID\Person();
}

public function testLastName0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 213)
    // if ($gender === static::GENDER_FEMALE) == false (line 216)

    $actual = $this->person->lastName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName1()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 213)
    // if ($gender === static::GENDER_FEMALE) == true (line 216)

    $actual = $this->person->lastName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName2()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 213)

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

public function testSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->suffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNik0()
{
    $gender = m::mock('UntypedParameter_gender_');
    $birthDate = m::mock('UntypedParameter_birthDate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthDate) == false (line 271)
    // if (!$gender) == false (line 275)
    // if ($gender == self::GENDER_FEMALE) == false (line 280)

    $actual = $this->person->nik($gender, $birthDate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNik1()
{
    $gender = m::mock('UntypedParameter_gender_');
    $birthDate = m::mock('UntypedParameter_birthDate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthDate) == false (line 271)
    // if (!$gender) == false (line 275)
    // if ($gender == self::GENDER_FEMALE) == true (line 280)

    $actual = $this->person->nik($gender, $birthDate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNik2()
{
    $gender = m::mock('UntypedParameter_gender_');
    $birthDate = m::mock('UntypedParameter_birthDate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthDate) == false (line 271)
    // if (!$gender) == true (line 275)
    // if ($gender == self::GENDER_FEMALE) == false (line 280)

    $actual = $this->person->nik($gender, $birthDate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNik3()
{
    $gender = m::mock('UntypedParameter_gender_');
    $birthDate = m::mock('UntypedParameter_birthDate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthDate) == false (line 271)
    // if (!$gender) == true (line 275)
    // if ($gender == self::GENDER_FEMALE) == true (line 280)

    $actual = $this->person->nik($gender, $birthDate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNik4()
{
    $gender = m::mock('UntypedParameter_gender_');
    $birthDate = m::mock('UntypedParameter_birthDate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthDate) == true (line 271)
    // if (!$gender) == false (line 275)
    // if ($gender == self::GENDER_FEMALE) == false (line 280)

    $actual = $this->person->nik($gender, $birthDate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNik5()
{
    $gender = m::mock('UntypedParameter_gender_');
    $birthDate = m::mock('UntypedParameter_birthDate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthDate) == true (line 271)
    // if (!$gender) == false (line 275)
    // if ($gender == self::GENDER_FEMALE) == true (line 280)

    $actual = $this->person->nik($gender, $birthDate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNik6()
{
    $gender = m::mock('UntypedParameter_gender_');
    $birthDate = m::mock('UntypedParameter_birthDate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthDate) == true (line 271)
    // if (!$gender) == true (line 275)
    // if ($gender == self::GENDER_FEMALE) == false (line 280)

    $actual = $this->person->nik($gender, $birthDate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNik7()
{
    $gender = m::mock('UntypedParameter_gender_');
    $birthDate = m::mock('UntypedParameter_birthDate_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthDate) == true (line 271)
    // if (!$gender) == true (line 275)
    // if ($gender == self::GENDER_FEMALE) == true (line 280)

    $actual = $this->person->nik($gender, $birthDate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
