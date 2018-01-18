<?php

namespace tests\Faker\Provider\en_ZA;

use Faker\Provider\en_ZA\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_ZA\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\en_ZA\Company();
}

public function testCompanyNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
