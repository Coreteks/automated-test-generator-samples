<?php

namespace tests\Faker\Provider\da_DK;

use Faker\Provider\da_DK\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\da_DK\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\da_DK\Company();
}

public function testCvr0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->cvr();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testP0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->p();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
