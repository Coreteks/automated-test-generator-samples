<?php

namespace tests\Faker\Provider\ka_GE;

use Faker\Provider\ka_GE\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ka_GE\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\ka_GE\Company();
}

public function testCompany0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->company();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompanyPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompanyNameElement0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyNameElement();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompanyNameSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyNameSuffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
