<?php

namespace tests\Faker\Provider\el_GR;

use Faker\Provider\el_GR\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\el_GR\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\el_GR\Address();
}

public function testStreetPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrefecture0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->prefecture();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
