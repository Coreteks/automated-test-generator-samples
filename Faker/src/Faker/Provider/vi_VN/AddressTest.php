<?php

namespace tests\Faker\Provider\vi_VN;

use Faker\Provider\vi_VN\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\vi_VN\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\vi_VN\Address();
}

public function testHamletName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->hamletName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHamletPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->hamletPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWardName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->wardName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWardPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->wardPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDistrictName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->districtName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDistrictPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->districtPrefix();
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

public function testProvince0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->province();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
