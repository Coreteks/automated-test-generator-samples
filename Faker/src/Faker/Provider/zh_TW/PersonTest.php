<?php

namespace tests\Faker\Provider\zh_TW;

use Faker\Provider\zh_TW\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\zh_TW\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\zh_TW\Person();
}

public function testRandomName0()
{
    $pool = m::mock('UntypedParameter_pool_');
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 145)

    $actual = $this->person->randomName($pool, $n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomName1()
{
    $pool = m::mock('UntypedParameter_pool_');
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 145)
    // for (...) == false (line 145)

    $actual = $this->person->randomName($pool, $n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstNameMale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->firstNameMale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstNameFemale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->firstNameFemale();
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

public function testPersonalIdentityNumber0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($checkSumDigit == 10) == false (line 193)

    $actual = $this->person->personalIdentityNumber($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber1()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($checkSumDigit == 10) == true (line 193)

    $actual = $this->person->personalIdentityNumber($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber2()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($checkSumDigit == 10) == false (line 193)

    $actual = $this->person->personalIdentityNumber($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber3()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($checkSumDigit == 10) == true (line 193)

    $actual = $this->person->personalIdentityNumber($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
