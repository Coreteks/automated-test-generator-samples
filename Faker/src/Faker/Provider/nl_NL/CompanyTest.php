<?php

namespace tests\Faker\Provider\nl_NL;

use Faker\Provider\nl_NL\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\nl_NL\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\nl_NL\Company();
}

public function testVat0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->vat();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBtw0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->btw();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
