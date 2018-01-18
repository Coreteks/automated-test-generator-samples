<?php

namespace tests\Faker\Provider\nl_BE;

use Faker\Provider\nl_BE\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\nl_BE\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\nl_BE\Company();
}
}
