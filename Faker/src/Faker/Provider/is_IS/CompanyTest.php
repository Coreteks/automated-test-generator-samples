<?php

namespace tests\Faker\Provider\is_IS;

use Faker\Provider\is_IS\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\is_IS\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\is_IS\Company();
}

public function testVsk0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->vsk();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
