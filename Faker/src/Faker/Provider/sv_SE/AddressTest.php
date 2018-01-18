<?php

namespace tests\Faker\Provider\sv_SE;

use Faker\Provider\sv_SE\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\sv_SE\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\sv_SE\Address();
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

public function testStreetPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetPrefix();
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
}
