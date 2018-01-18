<?php

namespace tests\Faker\Provider\zh_TW;

use Faker\Provider\zh_TW\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\zh_TW\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\zh_TW\Address();
}

public function testStreet0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->street();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomChineseNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->randomChineseNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomNumber20()
{
    // TODO: Your mock expectations here

    $actual = $this->address->randomNumber2();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandomNumber30()
{
    // TODO: Your mock expectations here

    $actual = $this->address->randomNumber3();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLocalLatitude0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->localLatitude();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLocalLongitude0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->localLongitude();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCity0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->city();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testState0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->state();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStateAbbr0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->stateAbbr();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCityPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cityPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCitySuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->citySuffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSecondaryAddress0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->secondaryAddress();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
