<?php

namespace tests\Faker\Provider\fa_IR;

use Faker\Provider\fa_IR\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fa_IR\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\fa_IR\PhoneNumber();
}

public function testMobileNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->mobileNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
