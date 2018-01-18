<?php

namespace tests\Faker\Provider\bn_BD;

use Faker\Provider\bn_BD\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\bn_BD\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\bn_BD\Address();
}

public function testCityPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->cityPrefix();
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

public function testStreetNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBanglaStreetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->banglaStreetName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
