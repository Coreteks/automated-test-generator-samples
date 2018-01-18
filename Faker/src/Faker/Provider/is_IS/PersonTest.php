<?php

namespace tests\Faker\Provider\is_IS;

use Faker\Provider\is_IS\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\is_IS\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\is_IS\Person();
}

public function testMiddleName0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->middleName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr($name, -2) === 'ur') == false (line 63)
    // if (substr($name, -1) !== 's') == false (line 67)

    $actual = $this->person->lastName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr($name, -2) === 'ur') == false (line 63)
    // if (substr($name, -1) !== 's') == true (line 67)

    $actual = $this->person->lastName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr($name, -2) === 'ur') == true (line 63)
    // if (substr($name, -1) !== 's') == false (line 67)

    $actual = $this->person->lastName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr($name, -2) === 'ur') == true (line 63)
    // if (substr($name, -1) !== 's') == true (line 67)

    $actual = $this->person->lastName();
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

public function testSsn0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!$valid) == false (line 115)

    $actual = $this->person->ssn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSsn1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!$valid) == true (line 115)
    // for (...) == false (line 123)
    // if ($chk < 10) == false (line 131)
    // while (!$valid) == false (line 115)

    $actual = $this->person->ssn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSsn2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!$valid) == true (line 115)
    // for (...) == false (line 123)
    // if ($chk < 10) == true (line 131)
    // while (!$valid) == false (line 115)

    $actual = $this->person->ssn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSsn3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!$valid) == true (line 115)
    // for (...) == true (line 123)
    // for (...) == false (line 123)
    // if ($chk < 10) == false (line 131)
    // while (!$valid) == false (line 115)

    $actual = $this->person->ssn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSsn4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (!$valid) == true (line 115)
    // for (...) == true (line 123)
    // for (...) == false (line 123)
    // if ($chk < 10) == true (line 131)
    // while (!$valid) == false (line 115)

    $actual = $this->person->ssn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
