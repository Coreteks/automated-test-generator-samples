<?php

namespace tests\Faker\Provider\kk_KZ;

use Faker\Provider\kk_KZ\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\kk_KZ\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\kk_KZ\Person();
}

public function testIndividualIdentificationNumber0()
{
    $birthDate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthDate) == false (line 208)

    $actual = $this->person->individualIdentificationNumber($birthDate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIndividualIdentificationNumber1()
{
    $birthDate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthDate) == true (line 208)

    $actual = $this->person->individualIdentificationNumber($birthDate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckSum0()
{
    $iinValue = m::mock('UntypedParameter_iinValue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($controlDigit === 10) == false (line 231)

    $actual = $this->person->checkSum($iinValue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckSum1()
{
    $iinValue = m::mock('UntypedParameter_iinValue_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($controlDigit === 10) == true (line 231)

    $actual = $this->person->checkSum($iinValue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
