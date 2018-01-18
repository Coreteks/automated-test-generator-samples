<?php

namespace tests\Faker\Provider\hu_HU;

use Faker\Provider\hu_HU\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\hu_HU\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\hu_HU\Address();
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

public function testCapital0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->capital();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBigCity0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->bigCity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSmallerCity0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->smallerCity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLocalCoordinates0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->localCoordinates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
