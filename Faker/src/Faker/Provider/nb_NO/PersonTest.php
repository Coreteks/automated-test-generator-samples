<?php

namespace tests\Faker\Provider\nb_NO;

use Faker\Provider\nb_NO\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\nb_NO\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\nb_NO\Person();
}

public function testPersonalIdentityNumber0()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 292)
    // switch ($gender) (line 303)
    // Case static::GENDER_MALE == false (line 304)
    // Case static::GENDER_FEMALE == false (line 307)
    // Default (line 310)

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
    // if (!$birthdate) == false (line 292)
    // switch ($gender) (line 303)
    // Case static::GENDER_MALE == false (line 304)
    // Case static::GENDER_FEMALE == true (line 307)

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
    // if (!$birthdate) == false (line 292)
    // switch ($gender) (line 303)
    // Case static::GENDER_MALE == true (line 304)

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
    // if (!$birthdate) == true (line 292)
    // switch ($gender) (line 303)
    // Case static::GENDER_MALE == false (line 304)
    // Case static::GENDER_FEMALE == false (line 307)
    // Default (line 310)

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
    // if (!$birthdate) == true (line 292)
    // switch ($gender) (line 303)
    // Case static::GENDER_MALE == false (line 304)
    // Case static::GENDER_FEMALE == true (line 307)

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
    // if (!$birthdate) == true (line 292)
    // switch ($gender) (line 303)
    // Case static::GENDER_MALE == true (line 304)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
