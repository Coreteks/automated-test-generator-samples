<?php

namespace tests\Faker\Provider\fr_CH;

use Faker\Provider\fr_CH\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_CH\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\fr_CH\PhoneNumber();
}

public function testMobileNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->mobileNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}