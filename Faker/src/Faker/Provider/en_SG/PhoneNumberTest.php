<?php

namespace tests\Faker\Provider\en_SG;

use Faker\Provider\en_SG\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_SG\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\en_SG\PhoneNumber();
}

public function testTollFreeInternationalNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->tollFreeInternationalNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTollFreeLineNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->tollFreeLineNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPremiumPhoneNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->premiumPhoneNumber();
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

public function testFixedLineNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->fixedLineNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVoipNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->voipNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInternationalCodePrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->internationalCodePrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testZeroToEight0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->zeroToEight();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOneToNine0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->oneToNine();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
