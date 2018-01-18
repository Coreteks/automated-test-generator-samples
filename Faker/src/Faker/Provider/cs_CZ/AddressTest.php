<?php

namespace tests\Faker\Provider\cs_CZ;

use Faker\Provider\cs_CZ\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\cs_CZ\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\cs_CZ\Address();
}

public function testCity0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->city();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegion0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->region();
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
