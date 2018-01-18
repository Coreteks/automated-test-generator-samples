<?php

namespace tests\Faker\Provider\ro_RO;

use Faker\Provider\ro_RO\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ro_RO\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\ro_RO\Person();
}

public function testCnp0()
{
    $gender = m::mock('UntypedParameter_gender_');
    $dateOfBirth = m::mock('UntypedParameter_dateOfBirth_');
    $county = m::mock('UntypedParameter_county_');
    $isResident = m::mock('UntypedParameter_isResident_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($gender)) == false (line 118)
    // if (!in_array($gender, $genders)) == false (line 120)
    // if (is_null($county)) == false (line 126)
    // if (!array_key_exists($county, static::$cnpCountyCodes)) == false (line 128)

    $actual = $this->person->cnp($gender, $dateOfBirth, $county, $isResident);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testCnp1()
{
    $gender = m::mock('UntypedParameter_gender_');
    $dateOfBirth = m::mock('UntypedParameter_dateOfBirth_');
    $county = m::mock('UntypedParameter_county_');
    $isResident = m::mock('UntypedParameter_isResident_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($gender)) == false (line 118)
    // if (!in_array($gender, $genders)) == false (line 120)
    // if (is_null($county)) == false (line 126)
    // if (!array_key_exists($county, static::$cnpCountyCodes)) == true (line 128)
    // throw new \InvalidArgumentException("Invalid county code '{$county}' received") -> exception (line 129)

    $actual = $this->person->cnp($gender, $dateOfBirth, $county, $isResident);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCnp2()
{
    $gender = m::mock('UntypedParameter_gender_');
    $dateOfBirth = m::mock('UntypedParameter_dateOfBirth_');
    $county = m::mock('UntypedParameter_county_');
    $isResident = m::mock('UntypedParameter_isResident_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($gender)) == false (line 118)
    // if (!in_array($gender, $genders)) == false (line 120)
    // if (is_null($county)) == true (line 126)

    $actual = $this->person->cnp($gender, $dateOfBirth, $county, $isResident);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testCnp3()
{
    $gender = m::mock('UntypedParameter_gender_');
    $dateOfBirth = m::mock('UntypedParameter_dateOfBirth_');
    $county = m::mock('UntypedParameter_county_');
    $isResident = m::mock('UntypedParameter_isResident_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($gender)) == false (line 118)
    // if (!in_array($gender, $genders)) == true (line 120)
    // throw new \InvalidArgumentException("Gender must be '{Person::GENDER_MALE}' or '{Person::GENDER_FEMALE}'") -> exception (line 121)

    $actual = $this->person->cnp($gender, $dateOfBirth, $county, $isResident);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCnp4()
{
    $gender = m::mock('UntypedParameter_gender_');
    $dateOfBirth = m::mock('UntypedParameter_dateOfBirth_');
    $county = m::mock('UntypedParameter_county_');
    $isResident = m::mock('UntypedParameter_isResident_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($gender)) == true (line 118)
    // if (is_null($county)) == false (line 126)
    // if (!array_key_exists($county, static::$cnpCountyCodes)) == false (line 128)

    $actual = $this->person->cnp($gender, $dateOfBirth, $county, $isResident);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testCnp5()
{
    $gender = m::mock('UntypedParameter_gender_');
    $dateOfBirth = m::mock('UntypedParameter_dateOfBirth_');
    $county = m::mock('UntypedParameter_county_');
    $isResident = m::mock('UntypedParameter_isResident_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($gender)) == true (line 118)
    // if (is_null($county)) == false (line 126)
    // if (!array_key_exists($county, static::$cnpCountyCodes)) == true (line 128)
    // throw new \InvalidArgumentException("Invalid county code '{$county}' received") -> exception (line 129)

    $actual = $this->person->cnp($gender, $dateOfBirth, $county, $isResident);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCnp6()
{
    $gender = m::mock('UntypedParameter_gender_');
    $dateOfBirth = m::mock('UntypedParameter_dateOfBirth_');
    $county = m::mock('UntypedParameter_county_');
    $isResident = m::mock('UntypedParameter_isResident_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($gender)) == true (line 118)
    // if (is_null($county)) == true (line 126)

    $actual = $this->person->cnp($gender, $dateOfBirth, $county, $isResident);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
