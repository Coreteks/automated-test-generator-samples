<?php

namespace tests\Faker\Provider\lv_LV;

use Faker\Provider\lv_LV\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\lv_LV\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\lv_LV\Address();
}

public function testBuildingNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->buildingNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddress0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCountry0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->country();
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

public function testRegionSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->regionSuffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegion0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->region();
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

public function testCity0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->city();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStreetPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStreet0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->street();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
