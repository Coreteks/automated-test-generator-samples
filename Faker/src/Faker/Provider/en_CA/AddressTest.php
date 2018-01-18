<?php

namespace tests\Faker\Provider\en_CA;

use Faker\Provider\en_CA\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_CA\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\en_CA\Address();
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

public function testRandomPostcodeLetter0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->randomPostcodeLetter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPostcode0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->postcode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
