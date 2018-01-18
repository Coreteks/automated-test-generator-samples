<?php

namespace tests\Faker\Provider\he_IL;

use Faker\Provider\he_IL\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\he_IL\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\he_IL\Company();
}
}
