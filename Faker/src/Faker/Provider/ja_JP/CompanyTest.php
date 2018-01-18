<?php

namespace tests\Faker\Provider\ja_JP;

use Faker\Provider\ja_JP\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ja_JP\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\ja_JP\Company();
}

public function testCompanyPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
