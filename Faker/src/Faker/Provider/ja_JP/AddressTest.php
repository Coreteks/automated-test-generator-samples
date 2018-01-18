<?php

namespace tests\Faker\Provider\ja_JP;

use Faker\Provider\ja_JP\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ja_JP\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\ja_JP\Address();
}

public function testPostcode10()
{
    // TODO: Your mock expectations here

    $actual = $this->address->postcode1();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPostcode20()
{
    // TODO: Your mock expectations here

    $actual = $this->address->postcode2();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPostcode0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->postcode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrefecture0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->prefecture();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWard0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->ward();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAreaNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->areaNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuildingNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->buildingNumber();
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
