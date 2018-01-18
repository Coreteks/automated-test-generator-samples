<?php

namespace tests\Faker\Provider\da_DK;

use Faker\Provider\da_DK\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\da_DK\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\da_DK\Address();
}

public function testCityName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cityName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStreetSuffixWord0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetSuffixWord();
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

public function testBuildingLevel0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->buildingLevel();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuildingSide0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->buildingSide();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKommune0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->kommune();
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
}
