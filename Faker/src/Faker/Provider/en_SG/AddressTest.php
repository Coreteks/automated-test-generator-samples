<?php

namespace tests\Faker\Provider\en_SG;

use Faker\Provider\en_SG\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_SG\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\en_SG\Address();
}

public function testStreetPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStreetNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBlockNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->blockNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFloorNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->floorNumber();
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

public function testTownName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->townName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
