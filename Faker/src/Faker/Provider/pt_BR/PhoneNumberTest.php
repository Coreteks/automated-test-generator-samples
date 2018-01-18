<?php

namespace tests\Faker\Provider\pt_BR;

use Faker\Provider\pt_BR\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\pt_BR\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\pt_BR\PhoneNumber();
}

public function testAreaCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->areaCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCellphone0()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$formatted) == false (line 34)

    $actual = $this->phoneNumber->cellphone($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCellphone1()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$formatted) == true (line 34)

    $actual = $this->phoneNumber->cellphone($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLandline0()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$formatted) == false (line 50)

    $actual = $this->phoneNumber->landline($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLandline1()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$formatted) == true (line 50)

    $actual = $this->phoneNumber->landline($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPhone0()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->phone($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCellphoneNumber0()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->cellphoneNumber($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLandlineNumber0()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->landlineNumber($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPhoneNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->phoneNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPhoneNumberCleared0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->phoneNumberCleared();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
