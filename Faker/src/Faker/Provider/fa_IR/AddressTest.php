<?php

namespace tests\Faker\Provider\fa_IR;

use Faker\Provider\fa_IR\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fa_IR\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\fa_IR\Address();
}

public function testCityPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cityPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCityName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cityName();
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

public function testBuildingNamePrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->buildingNamePrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuildingNumberPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->buildingNumberPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuilding0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->building();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPostcodePrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->postcodePrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
