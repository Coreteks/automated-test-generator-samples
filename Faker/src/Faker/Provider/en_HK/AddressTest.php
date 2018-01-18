<?php

namespace tests\Faker\Provider\en_HK;

use Faker\Provider\en_HK\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_HK\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\en_HK\Address();
}

public function testCity0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->city();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTown0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->town();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSyllable0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->syllable();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDirection0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->direction();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnglishStreetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->englishStreetName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVillageSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->villageSuffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEstateSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->estateSuffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVillage0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->village();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEstate0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->estate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
