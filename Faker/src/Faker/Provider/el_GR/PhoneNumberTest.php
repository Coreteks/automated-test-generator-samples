<?php

namespace tests\Faker\Provider\el_GR;

use Faker\Provider\el_GR\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\el_GR\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\el_GR\PhoneNumber();
}

public function testMobilePhoneNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->mobilePhoneNumber();
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
