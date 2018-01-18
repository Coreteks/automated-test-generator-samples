<?php

namespace tests\Faker\Provider\sv_SE;

use Faker\Provider\sv_SE\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\sv_SE\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\sv_SE\Company();
}

public function testJobTitle0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->jobTitle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
