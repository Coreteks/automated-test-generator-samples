<?php

namespace tests\Faker\Provider\nb_NO;

use Faker\Provider\nb_NO\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\nb_NO\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\nb_NO\Company();
}
}
