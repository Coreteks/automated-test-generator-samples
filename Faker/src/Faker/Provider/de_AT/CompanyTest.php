<?php

namespace tests\Faker\Provider\de_AT;

use Faker\Provider\de_AT\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\de_AT\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\de_AT\Company();
}
}
