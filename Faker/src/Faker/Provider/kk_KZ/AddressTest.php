<?php

namespace tests\Faker\Provider\kk_KZ;

use Faker\Provider\kk_KZ\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\kk_KZ\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\kk_KZ\Address();
}

public function testBuildingNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->buildingNumber();
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

public function testCity0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->city();
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
