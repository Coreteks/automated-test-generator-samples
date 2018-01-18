<?php

namespace tests\Faker\Provider;

use Faker\Provider\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\Address();
}

public function testCitySuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->citySuffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStreetSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetSuffix();
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

public function testCity0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->city();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStreetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStreetAddress0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetAddress();
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

public function testLatitude0()
{
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->address->latitude($min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLongitude0()
{
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');

    // TODO: Your mock expectations here

    $actual = $this->address->longitude($min, $max);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLocalCoordinates0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->localCoordinates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
