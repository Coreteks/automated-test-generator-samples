<?php

namespace tests\Faker\Provider\en_ZA;

use Faker\Provider\en_ZA\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_ZA\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\en_ZA\Person();
}

public function testIdNumber0()
{
    $birthdate = m::mock(\DateTime::class);
    $citizen = m::mock('UntypedParameter_citizen_');
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 146)
    // switch (strtolower($gender)) (line 150)
    // Case static::GENDER_FEMALE == false (line 151)
    // Case static::GENDER_MALE == false (line 154)
    // Default (line 157)

    $actual = $this->person->idNumber($birthdate, $citizen, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber1()
{
    $birthdate = m::mock(\DateTime::class);
    $citizen = m::mock('UntypedParameter_citizen_');
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 146)
    // switch (strtolower($gender)) (line 150)
    // Case static::GENDER_FEMALE == false (line 151)
    // Case static::GENDER_MALE == true (line 154)

    $actual = $this->person->idNumber($birthdate, $citizen, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber2()
{
    $birthdate = m::mock(\DateTime::class);
    $citizen = m::mock('UntypedParameter_citizen_');
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 146)
    // switch (strtolower($gender)) (line 150)
    // Case static::GENDER_FEMALE == true (line 151)

    $actual = $this->person->idNumber($birthdate, $citizen, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber3()
{
    $birthdate = m::mock(\DateTime::class);
    $citizen = m::mock('UntypedParameter_citizen_');
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 146)
    // switch (strtolower($gender)) (line 150)
    // Case static::GENDER_FEMALE == false (line 151)
    // Case static::GENDER_MALE == false (line 154)
    // Default (line 157)

    $actual = $this->person->idNumber($birthdate, $citizen, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber4()
{
    $birthdate = m::mock(\DateTime::class);
    $citizen = m::mock('UntypedParameter_citizen_');
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 146)
    // switch (strtolower($gender)) (line 150)
    // Case static::GENDER_FEMALE == false (line 151)
    // Case static::GENDER_MALE == true (line 154)

    $actual = $this->person->idNumber($birthdate, $citizen, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber5()
{
    $birthdate = m::mock(\DateTime::class);
    $citizen = m::mock('UntypedParameter_citizen_');
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 146)
    // switch (strtolower($gender)) (line 150)
    // Case static::GENDER_FEMALE == true (line 151)

    $actual = $this->person->idNumber($birthdate, $citizen, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLicenceCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->licenceCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
