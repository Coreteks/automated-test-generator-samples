<?php

namespace tests\Faker\Provider\pl_PL;

use Faker\Provider\pl_PL\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\pl_PL\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\pl_PL\Person();
}

public function testLastName0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 96)
    // if ($gender === static::GENDER_FEMALE) == false (line 98)

    $actual = $this->person->lastName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName1()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 96)
    // if ($gender === static::GENDER_FEMALE) == true (line 98)

    $actual = $this->person->lastName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName2()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 96)

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

public function testPesel0()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == false (line 145)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == false (line 164)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel1()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == false (line 145)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == false (line 164)
    // for (...) == true (line 168)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel2()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == false (line 145)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == true (line 164)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel3()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == false (line 145)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == true (line 164)
    // for (...) == true (line 168)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel4()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == false (line 145)
    // for (...) == false (line 159)
    // if ($sex == "M") == true (line 162)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel5()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == false (line 145)
    // for (...) == false (line 159)
    // if ($sex == "M") == true (line 162)
    // for (...) == true (line 168)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel6()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == false (line 145)
    // for (...) == true (line 159)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == false (line 164)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel7()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == false (line 145)
    // for (...) == true (line 159)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == false (line 164)
    // for (...) == true (line 168)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel8()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == false (line 145)
    // for (...) == true (line 159)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == true (line 164)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel9()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == false (line 145)
    // for (...) == true (line 159)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == true (line 164)
    // for (...) == true (line 168)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel10()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == false (line 145)
    // for (...) == true (line 159)
    // for (...) == false (line 159)
    // if ($sex == "M") == true (line 162)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel11()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == false (line 145)
    // for (...) == true (line 159)
    // for (...) == false (line 159)
    // if ($sex == "M") == true (line 162)
    // for (...) == true (line 168)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel12()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == true (line 145)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == false (line 164)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel13()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == true (line 145)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == false (line 164)
    // for (...) == true (line 168)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel14()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == true (line 145)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == true (line 164)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel15()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == true (line 145)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == true (line 164)
    // for (...) == true (line 168)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel16()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == true (line 145)
    // for (...) == false (line 159)
    // if ($sex == "M") == true (line 162)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel17()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == true (line 145)
    // for (...) == false (line 159)
    // if ($sex == "M") == true (line 162)
    // for (...) == true (line 168)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel18()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == true (line 145)
    // for (...) == true (line 159)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == false (line 164)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel19()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == true (line 145)
    // for (...) == true (line 159)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == false (line 164)
    // for (...) == true (line 168)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel20()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == true (line 145)
    // for (...) == true (line 159)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == true (line 164)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel21()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == true (line 145)
    // for (...) == true (line 159)
    // for (...) == false (line 159)
    // if ($sex == "M") == false (line 162)
    // if ($sex == "F") == true (line 164)
    // for (...) == true (line 168)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel22()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == true (line 145)
    // for (...) == true (line 159)
    // for (...) == false (line 159)
    // if ($sex == "M") == true (line 162)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPesel23()
{
    $birthdate = m::mock('UntypedParameter_birthdate_');
    $sex = m::mock('UntypedParameter_sex_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($birthdate === null) == true (line 145)
    // for (...) == true (line 159)
    // for (...) == false (line 159)
    // if ($sex == "M") == true (line 162)
    // for (...) == true (line 168)
    // for (...) == false (line 168)

    $actual = $this->person->pesel($birthdate, $sex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 189)
    // for (...) == false (line 192)

    $actual = $this->person->personalIdentityNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 189)
    // for (...) == true (line 192)
    // for (...) == false (line 192)

    $actual = $this->person->personalIdentityNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 189)
    // for (...) == false (line 189)
    // for (...) == false (line 192)

    $actual = $this->person->personalIdentityNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 189)
    // for (...) == false (line 189)
    // for (...) == true (line 192)
    // for (...) == false (line 192)

    $actual = $this->person->personalIdentityNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTaxpayerIdentificationNumber0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 217)
    // PhpParser\Node\Stmt\Do_ == false (line 210)

    $actual = $this->person->taxpayerIdentificationNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTaxpayerIdentificationNumber1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 217)
    // for (...) == false (line 217)
    // PhpParser\Node\Stmt\Do_ == false (line 210)

    $actual = $this->person->taxpayerIdentificationNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
