<?php

namespace tests\Faker\Provider\el_CY;

use Faker\Provider\el_CY\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\el_CY\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\el_CY\PhoneNumber();
}

public function testMobileNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->mobileNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
