<?php

namespace tests\Faker\Provider\fr_BE;

use Faker\Provider\fr_BE\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_BE\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\fr_BE\Company();
}
}
