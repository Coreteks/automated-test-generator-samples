<?php

namespace tests\Faker\Provider\de_DE;

use Faker\Provider\de_DE\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\de_DE\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\de_DE\Company();
}
}
