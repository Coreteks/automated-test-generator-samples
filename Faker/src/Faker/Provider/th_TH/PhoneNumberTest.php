<?php

namespace tests\Faker\Provider\th_TH;

use Faker\Provider\th_TH\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\th_TH\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\th_TH\PhoneNumber();
}

public function testMobileNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->mobileNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
