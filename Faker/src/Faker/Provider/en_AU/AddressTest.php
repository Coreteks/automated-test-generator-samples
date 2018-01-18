<?php

namespace tests\Faker\Provider\en_AU;

use Faker\Provider\en_AU\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_AU\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\en_AU\Address();
}

public function testBuildingLetter0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->buildingLetter();
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

public function testStreetSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetSuffix();
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
}
