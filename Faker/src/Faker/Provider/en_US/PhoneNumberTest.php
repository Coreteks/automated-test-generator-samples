<?php

namespace tests\Faker\Provider\en_US;

use Faker\Provider\en_US\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_US\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\en_US\PhoneNumber();
}

public function testTollFreeAreaCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->tollFreeAreaCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTollFreePhoneNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->tollFreePhoneNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAreaCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->areaCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExchangeCode0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($digits[1] === 1) == false (line 100)

    $actual = $this->phoneNumber->exchangeCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExchangeCode1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($digits[1] === 1) == true (line 100)

    $actual = $this->phoneNumber->exchangeCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
