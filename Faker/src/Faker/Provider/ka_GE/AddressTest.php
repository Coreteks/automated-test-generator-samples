<?php

namespace tests\Faker\Provider\ka_GE;

use Faker\Provider\ka_GE\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ka_GE\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\ka_GE\Address();
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

public function testRegionGenitiveForm0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->regionGenitiveForm();
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

public function testStreet0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->street();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
