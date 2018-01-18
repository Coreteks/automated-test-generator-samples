<?php

namespace tests\Faker\Provider\en_ZA;

use Faker\Provider\en_ZA\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_ZA\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\en_ZA\Address();
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

public function testProvince0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->province();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvinceAbbr0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->provinceAbbr();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
