<?php

namespace tests\Faker\Provider\uk_UA;

use Faker\Provider\uk_UA\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\uk_UA\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\uk_UA\Address();
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

public function testStreetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetName();
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

public function testCityAndRegion0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cityAndRegion();
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
}
