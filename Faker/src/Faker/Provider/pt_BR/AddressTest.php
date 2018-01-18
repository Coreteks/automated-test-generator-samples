<?php

namespace tests\Faker\Provider\pt_BR;

use Faker\Provider\pt_BR\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\pt_BR\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\pt_BR\Address();
}

public function testStreetPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetPrefix();
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

public function testSecondaryAddress0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->secondaryAddress();
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

public function testStateAbbr0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->stateAbbr();
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

public function testRegionAbbr0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->regionAbbr();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
