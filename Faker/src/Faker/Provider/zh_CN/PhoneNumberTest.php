<?php

namespace tests\Faker\Provider\zh_CN;

use Faker\Provider\zh_CN\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\zh_CN\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\zh_CN\PhoneNumber();
}

public function testPhoneNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->phoneNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
