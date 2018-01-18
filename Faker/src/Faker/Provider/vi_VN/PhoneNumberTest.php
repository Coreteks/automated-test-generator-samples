<?php

namespace tests\Faker\Provider\vi_VN;

use Faker\Provider\vi_VN\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\vi_VN\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\vi_VN\PhoneNumber();
}

public function testPhoneNumber0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($areaCodeLength < 2) == false (line 55)

    $actual = $this->phoneNumber->phoneNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPhoneNumber1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($areaCodeLength < 2) == true (line 55)

    $actual = $this->phoneNumber->phoneNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
