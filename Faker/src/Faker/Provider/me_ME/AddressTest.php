<?php

namespace tests\Faker\Provider\me_ME;

use Faker\Provider\me_ME\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\me_ME\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\me_ME\Address();
}

public function testStreetPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetPrefix();
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

public function testCityName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cityName();
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
