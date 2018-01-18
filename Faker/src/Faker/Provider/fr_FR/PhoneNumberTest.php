<?php

namespace tests\Faker\Provider\fr_FR;

use Faker\Provider\fr_FR\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_FR\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\fr_FR\PhoneNumber();
}

public function testPhoneNumber070()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->phoneNumber07();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPhoneNumber07WithSeparator0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->phoneNumber07WithSeparator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMobileNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->mobileNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
