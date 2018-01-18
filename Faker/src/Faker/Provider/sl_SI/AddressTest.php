<?php

namespace tests\Faker\Provider\sl_SI;

use Faker\Provider\sl_SI\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\sl_SI\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\sl_SI\Address();
}

public function testCityName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cityName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStreetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
