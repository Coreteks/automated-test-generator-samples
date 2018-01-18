<?php

namespace tests\Faker\Provider\en_ZA;

use Faker\Provider\en_ZA\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_ZA\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\en_ZA\PhoneNumber();
}

public function testAreaCode0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($digits[0]) (line 39)
    // Case 1 == false (line 40)
    // Case 2 == false (line 43)
    // Case 3 == false (line 47)
    // Case 4 == false (line 51)
    // Case 5 == false (line 54)

    $actual = $this->phoneNumber->areaCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAreaCode1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($digits[0]) (line 39)
    // Case 1 == false (line 40)
    // Case 2 == false (line 43)
    // Case 3 == false (line 47)
    // Case 4 == false (line 51)
    // Case 5 == true (line 54)

    $actual = $this->phoneNumber->areaCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAreaCode2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($digits[0]) (line 39)
    // Case 1 == false (line 40)
    // Case 2 == false (line 43)
    // Case 3 == false (line 47)
    // Case 4 == true (line 51)

    $actual = $this->phoneNumber->areaCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAreaCode3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($digits[0]) (line 39)
    // Case 1 == false (line 40)
    // Case 2 == false (line 43)
    // Case 3 == true (line 47)

    $actual = $this->phoneNumber->areaCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAreaCode4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($digits[0]) (line 39)
    // Case 1 == false (line 40)
    // Case 2 == true (line 43)

    $actual = $this->phoneNumber->areaCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAreaCode5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($digits[0]) (line 39)
    // Case 1 == true (line 40)

    $actual = $this->phoneNumber->areaCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCellphoneCode0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($digits[0]) (line 66)
    // Case 6 == false (line 67)
    // Case 7 == false (line 70)
    // Case 8 == false (line 74)

    $actual = $this->phoneNumber->cellphoneCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCellphoneCode1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($digits[0]) (line 66)
    // Case 6 == false (line 67)
    // Case 7 == false (line 70)
    // Case 8 == true (line 74)

    $actual = $this->phoneNumber->cellphoneCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCellphoneCode2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($digits[0]) (line 66)
    // Case 6 == false (line 67)
    // Case 7 == true (line 70)

    $actual = $this->phoneNumber->cellphoneCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCellphoneCode3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($digits[0]) (line 66)
    // Case 6 == true (line 67)

    $actual = $this->phoneNumber->cellphoneCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSpecialCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->specialCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMobileNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->mobileNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTollFreeNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->tollFreeNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
