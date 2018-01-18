<?php

namespace tests\Faker\Provider\ko_KR;

use Faker\Provider\ko_KR\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ko_KR\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\ko_KR\Company();
}

public function testCompanyPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompanySuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companySuffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
