<?php

namespace tests\Faker\Provider\ru_RU;

use Faker\Provider\ru_RU\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ru_RU\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\ru_RU\Company();
}

public function testCompany0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->company();
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

public function testCompanyNameElement0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyNameElement();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompanyNameSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyNameSuffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInn0()
{
    $area_code = m::mock('UntypedParameter_area_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($area_code === "" || intval($area_code) == 0) == false (line 76)

    $actual = $this->company->inn($area_code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInn1()
{
    $area_code = m::mock('UntypedParameter_area_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($area_code === "" || intval($area_code) == 0) == true (line 76)

    $actual = $this->company->inn($area_code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKpp0()
{
    $inn = m::mock('UntypedParameter_inn_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($inn == "" || strlen($inn) < 4) == false (line 89)

    $actual = $this->company->kpp($inn);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKpp1()
{
    $inn = m::mock('UntypedParameter_inn_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($inn == "" || strlen($inn) < 4) == true (line 89)

    $actual = $this->company->kpp($inn);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
