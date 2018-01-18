<?php

namespace tests\Faker\Provider\bn_BD;

use Faker\Provider\bn_BD\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\bn_BD\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\bn_BD\Company();
}

public function testCompanyType0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyType();
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
