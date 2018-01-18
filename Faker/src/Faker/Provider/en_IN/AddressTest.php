<?php

namespace tests\Faker\Provider\en_IN;

use Faker\Provider\en_IN\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_IN\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\en_IN\Address();
}

public function testSocietySuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->societySuffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSocietyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->societyName();
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

public function testLocality0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->locality();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLocalityName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->localityName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAreaSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->areaSuffix();
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

public function testStateAbbr0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->stateAbbr();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
