<?php

namespace tests\Faker\Provider\lt_LT;

use Faker\Provider\lt_LT\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\lt_LT\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\lt_LT\Company();
}
}
