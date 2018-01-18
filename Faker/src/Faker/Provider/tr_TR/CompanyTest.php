<?php

namespace tests\Faker\Provider\tr_TR;

use Faker\Provider\tr_TR\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\tr_TR\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\tr_TR\Company();
}

public function testCompanyField0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyField();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
