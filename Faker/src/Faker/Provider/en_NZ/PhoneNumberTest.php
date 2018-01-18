<?php

namespace tests\Faker\Provider\en_NZ;

use Faker\Provider\en_NZ\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_NZ\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\en_NZ\PhoneNumber();
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

public function testAreaCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->areaCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeginningNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->beginningNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
