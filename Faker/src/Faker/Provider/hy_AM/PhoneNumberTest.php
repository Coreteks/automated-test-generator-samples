<?php

namespace tests\Faker\Provider\hy_AM;

use Faker\Provider\hy_AM\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\hy_AM\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\hy_AM\PhoneNumber();
}

public function testPhoneNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->phoneNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->code();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumberFormat0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->numberFormat();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
