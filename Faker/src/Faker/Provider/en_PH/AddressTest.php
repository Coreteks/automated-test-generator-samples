<?php

namespace tests\Faker\Provider\en_PH;

use Faker\Provider\en_PH\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_PH\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\en_PH\Address();
}

public function testProvince0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->province();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCity0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->city();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMunicipality0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->municipality();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBarangay0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->barangay();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
