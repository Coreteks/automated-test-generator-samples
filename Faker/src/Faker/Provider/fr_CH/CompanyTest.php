<?php

namespace tests\Faker\Provider\fr_CH;

use Faker\Provider\fr_CH\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_CH\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\fr_CH\Company();
}
}
