<?php

namespace tests\Faker\Provider\nl_NL;

use Faker\Provider\nl_NL\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\nl_NL\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\nl_NL\Person();
}

public function testLastName0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($determinator === 0) == false (line 268)
    // if ($determinator <= 10) == false (line 270)
    // if ($determinator <= 15) == false (line 272)

    $actual = $this->person->lastName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($determinator === 0) == false (line 268)
    // if ($determinator <= 10) == false (line 270)
    // if ($determinator <= 15) == true (line 272)

    $actual = $this->person->lastName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($determinator === 0) == false (line 268)
    // if ($determinator <= 10) == true (line 270)

    $actual = $this->person->lastName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($determinator === 0) == true (line 268)

    $actual = $this->person->lastName();
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

public function testSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->suffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->prefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (count($nr) < 8) == false (line 328)
    // if ($nr[7] == 0 && $nr[8] == 0) == false (line 332)
    // if ($nr[0] > 9) == false (line 338)

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (count($nr) < 8) == false (line 328)
    // if ($nr[7] == 0 && $nr[8] == 0) == false (line 332)
    // if ($nr[0] > 9) == true (line 338)
    // if ($nr[1] > 0) == false (line 339)

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (count($nr) < 8) == false (line 328)
    // if ($nr[7] == 0 && $nr[8] == 0) == false (line 332)
    // if ($nr[0] > 9) == true (line 338)
    // if ($nr[1] > 0) == true (line 339)

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (count($nr) < 8) == false (line 328)
    // if ($nr[7] == 0 && $nr[8] == 0) == true (line 332)
    // if ($nr[0] > 9) == false (line 338)

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (count($nr) < 8) == false (line 328)
    // if ($nr[7] == 0 && $nr[8] == 0) == true (line 332)
    // if ($nr[0] > 9) == true (line 338)
    // if ($nr[1] > 0) == false (line 339)

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (count($nr) < 8) == false (line 328)
    // if ($nr[7] == 0 && $nr[8] == 0) == true (line 332)
    // if ($nr[0] > 9) == true (line 338)
    // if ($nr[1] > 0) == true (line 339)

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (count($nr) < 8) == true (line 328)
    // while (count($nr) < 8) == false (line 328)
    // if ($nr[7] == 0 && $nr[8] == 0) == false (line 332)
    // if ($nr[0] > 9) == false (line 338)

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (count($nr) < 8) == true (line 328)
    // while (count($nr) < 8) == false (line 328)
    // if ($nr[7] == 0 && $nr[8] == 0) == false (line 332)
    // if ($nr[0] > 9) == true (line 338)
    // if ($nr[1] > 0) == false (line 339)

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (count($nr) < 8) == true (line 328)
    // while (count($nr) < 8) == false (line 328)
    // if ($nr[7] == 0 && $nr[8] == 0) == false (line 332)
    // if ($nr[0] > 9) == true (line 338)
    // if ($nr[1] > 0) == true (line 339)

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (count($nr) < 8) == true (line 328)
    // while (count($nr) < 8) == false (line 328)
    // if ($nr[7] == 0 && $nr[8] == 0) == true (line 332)
    // if ($nr[0] > 9) == false (line 338)

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (count($nr) < 8) == true (line 328)
    // while (count($nr) < 8) == false (line 328)
    // if ($nr[7] == 0 && $nr[8] == 0) == true (line 332)
    // if ($nr[0] > 9) == true (line 338)
    // if ($nr[1] > 0) == false (line 339)

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (count($nr) < 8) == true (line 328)
    // while (count($nr) < 8) == false (line 328)
    // if ($nr[7] == 0 && $nr[8] == 0) == true (line 332)
    // if ($nr[0] > 9) == true (line 338)
    // if ($nr[1] > 0) == true (line 339)

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
