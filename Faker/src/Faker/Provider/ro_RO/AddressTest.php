<?php

namespace tests\Faker\Provider\ro_RO;

use Faker\Provider\ro_RO\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ro_RO\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\ro_RO\Address();
}

public function testCityName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cityName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBlock0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->block();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBlockSegment0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->blockSegment();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFloor0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->floor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApartmentNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->apartmentNumber();
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

public function testStreetPlainName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetPlainName();
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

public function testCounty0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->county();
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

public function testStreetAddress0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetAddress();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
