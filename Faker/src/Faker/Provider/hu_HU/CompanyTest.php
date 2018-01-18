<?php

namespace tests\Faker\Provider\hu_HU;

use Faker\Provider\hu_HU\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\hu_HU\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\hu_HU\Company();
}
}
