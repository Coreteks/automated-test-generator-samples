<?php

namespace tests\Faker\Provider\en_PH;

use Faker\Provider\en_PH\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_PH\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\en_PH\PhoneNumber();
}

public function testMobileNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->mobileNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
