<?php

namespace tests\Faker\Provider\me_ME;

use Faker\Provider\me_ME\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\me_ME\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\me_ME\Company();
}

public function testCompanyType0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompanyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
