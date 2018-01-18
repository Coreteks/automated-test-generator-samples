<?php

namespace tests\Faker\Provider\fr_FR;

use Faker\Provider\fr_FR\Address;
use Mockery as m;

class AddressTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_FR\Address
*/
protected $address;

public function setUp()
{
    parent::setUp();

    $this->address = new \Faker\Provider\fr_FR\Address();
}

public function testSecondaryAddress0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->secondaryAddress();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStreetPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->streetPrefix();
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

public function testDepartment0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->department();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDepartmentName0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->departmentName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDepartmentNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->address->departmentNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
