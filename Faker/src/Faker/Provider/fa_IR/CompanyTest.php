<?php

namespace tests\Faker\Provider\fa_IR;

use Faker\Provider\fa_IR\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fa_IR\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\fa_IR\Company();
}

public function testCompanyPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompanyField0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyField();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContract0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->contract();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
