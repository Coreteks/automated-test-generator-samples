<?php

namespace tests\Faker\Provider\nl_NL;

use Faker\Provider\nl_NL\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\nl_NL\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\nl_NL\Address();
}

public function testBuildingNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->buildingNumber();
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

public function testCityName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cityName();
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
}
