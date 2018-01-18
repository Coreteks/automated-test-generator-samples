<?php

namespace tests\Faker\Provider;

use Faker\Provider\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\Company();
}

public function testCompany0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->company();
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

public function testJobTitle0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->jobTitle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
