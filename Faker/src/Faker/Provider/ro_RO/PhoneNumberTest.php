<?php

namespace tests\Faker\Provider\ro_RO;

use Faker\Provider\ro_RO\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ro_RO\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\ro_RO\PhoneNumber();
}

public function testPhoneNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->phoneNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTollFreePhoneNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->tollFreePhoneNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPremiumRatePhoneNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->premiumRatePhoneNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
