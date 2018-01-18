<?php

namespace tests\Faker\Provider\ne_NP;

use Faker\Provider\ne_NP\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ne_NP\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\ne_NP\Address();
}

public function testCityName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cityName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWardNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->wardNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDistrict0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->district();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
