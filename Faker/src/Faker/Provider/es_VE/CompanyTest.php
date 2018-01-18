<?php

namespace tests\Faker\Provider\es_VE;

use Faker\Provider\es_VE\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\es_VE\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\es_VE\Company();
}

public function testCompanyPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTaxpayerIdentificationNumber0()
{
    $separator = m::mock('UntypedParameter_separator_');

    // TODO: Your mock expectations here

    $actual = $this->company->taxpayerIdentificationNumber($separator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
