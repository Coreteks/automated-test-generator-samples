<?php

namespace tests\Faker\Provider\sl_SI;

use Faker\Provider\sl_SI\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\sl_SI\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\sl_SI\Company();
}
}
