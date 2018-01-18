<?php

namespace tests\Faker\Provider\th_TH;

use Faker\Provider\th_TH\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\th_TH\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\th_TH\Company();
}

public function testSlogan0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->slogan();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlogan1()
{
    // TODO: Your mock expectations here

    $actual = $this->company->slogan();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
