<?php

namespace tests\Faker\Provider\es_ES;

use Faker\Provider\es_ES\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\es_ES\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\es_ES\Company();
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

public function testCatchPhrase1()
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
}