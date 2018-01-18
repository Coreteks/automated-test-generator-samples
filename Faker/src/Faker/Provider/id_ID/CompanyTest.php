<?php

namespace tests\Faker\Provider\id_ID;

use Faker\Provider\id_ID\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\id_ID\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\id_ID\Company();
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
