<?php

namespace tests\Faker\Provider\zh_CN;

use Faker\Provider\zh_CN\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\zh_CN\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\zh_CN\Address();
}

public function testCity0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->city();
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

public function testArea0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->area();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCountry0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->country();
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

public function testPostcode0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->postcode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
