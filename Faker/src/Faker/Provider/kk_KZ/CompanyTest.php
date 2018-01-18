<?php

namespace tests\Faker\Provider\kk_KZ;

use Faker\Provider\kk_KZ\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\kk_KZ\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\kk_KZ\Company();
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

public function testBusinessIdentificationNumber0()
{
    $registrationDate = m::mock(\DateTime::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$registrationDate) == false (line 61)

    $actual = $this->company->businessIdentificationNumber($registrationDate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBusinessIdentificationNumber1()
{
    $registrationDate = m::mock(\DateTime::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$registrationDate) == true (line 61)

    $actual = $this->company->businessIdentificationNumber($registrationDate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
