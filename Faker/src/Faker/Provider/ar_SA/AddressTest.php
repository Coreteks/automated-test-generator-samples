<?php

namespace tests\Faker\Provider\ar_SA;

use Faker\Provider\ar_SA\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ar_SA\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\ar_SA\Address();
}

public function testCityPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cityPrefix();
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

public function testStreetPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetPrefix();
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

public function testSubdivision0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->subdivision();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGovernorate0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->governorate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
