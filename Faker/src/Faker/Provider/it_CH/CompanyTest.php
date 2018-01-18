<?php

namespace tests\Faker\Provider\it_CH;

use Faker\Provider\it_CH\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\it_CH\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\it_CH\Company();
}
}
