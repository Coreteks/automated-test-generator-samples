<?php

namespace tests\Faker\Provider\es_VE;

use Faker\Provider\es_VE\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\es_VE\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\es_VE\Address();
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
}
