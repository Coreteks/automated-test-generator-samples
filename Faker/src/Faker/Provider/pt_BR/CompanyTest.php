<?php

namespace tests\Faker\Provider\pt_BR;

use Faker\Provider\pt_BR\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\pt_BR\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\pt_BR\Company();
}

public function testCnpj0()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    $actual = $this->company->cnpj($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
