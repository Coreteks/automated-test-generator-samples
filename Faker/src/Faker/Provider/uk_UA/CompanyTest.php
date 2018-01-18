<?php

namespace tests\Faker\Provider\uk_UA;

use Faker\Provider\uk_UA\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\uk_UA\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\uk_UA\Company();
}

public function testCompanyUrl0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyUrl();
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

public function testCompanyName0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
