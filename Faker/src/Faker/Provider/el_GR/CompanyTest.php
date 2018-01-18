<?php

namespace tests\Faker\Provider\el_GR;

use Faker\Provider\el_GR\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\el_GR\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\el_GR\Company();
}

public function testDoy0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->doy();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testObject0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->object();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
