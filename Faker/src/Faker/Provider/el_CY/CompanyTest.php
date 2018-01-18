<?php

namespace tests\Faker\Provider\el_CY;

use Faker\Provider\el_CY\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\el_CY\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\el_CY\Company();
}
}
