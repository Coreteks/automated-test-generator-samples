<?php

namespace tests\Faker\Provider\fr_BE;

use Faker\Provider\fr_BE\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_BE\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\fr_BE\Address();
}

public function testProvince0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->province();
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
}
