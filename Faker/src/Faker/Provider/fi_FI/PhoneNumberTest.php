<?php

namespace tests\Faker\Provider\fi_FI;

use Faker\Provider\fi_FI\PhoneNumber;
use Mockery as m;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fi_FI\PhoneNumber
*/
protected $phoneNumber;

public function setUp()
{
    parent::setUp();

    $this->phoneNumber = new \Faker\Provider\fi_FI\PhoneNumber();
}

public function testLandLineAreaCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->landLineAreaCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testE164landLineAreaCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->e164landLineAreaCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMobileNetworkAreaCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->mobileNetworkAreaCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testE164MobileNetworkAreaCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->e164MobileNetworkAreaCode();
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

public function testSeparator0()
{
    // TODO: Your mock expectations here

    $actual = $this->phoneNumber->separator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
