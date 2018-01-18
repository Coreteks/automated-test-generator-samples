<?php

namespace tests\Faker\Provider\zh_TW;

use Faker\Provider\zh_TW\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\zh_TW\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\zh_TW\Company();
}

public function testCompanyEnSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyEnSuffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompanyEn0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyEn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompanyModifier0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyModifier();
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

public function testCatchPhrase0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->catchPhrase();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBs0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->bs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBs1()
{
    // TODO: Your mock expectations here

    $actual = $this->company->bs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVAT0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->VAT();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
