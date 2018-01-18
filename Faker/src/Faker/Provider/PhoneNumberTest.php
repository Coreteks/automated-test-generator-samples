<?php

namespace tests\Faker\Provider;

use Faker\Provider\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\PhoneNumber();
}

public function testPhoneNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->phoneNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testE164PhoneNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->e164PhoneNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImei0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->imei();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
