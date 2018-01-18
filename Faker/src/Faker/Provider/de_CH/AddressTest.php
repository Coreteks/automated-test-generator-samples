<?php

namespace tests\Faker\Provider\de_CH;

use Faker\Provider\de_CH\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\de_CH\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\de_CH\Address();
}

public function testCityName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cityName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStreetSuffixShort0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetSuffixShort();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStreetSuffixLong0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetSuffixLong();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCanton0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->canton();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCantonShort0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cantonShort();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCantonName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cantonName();
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
}
