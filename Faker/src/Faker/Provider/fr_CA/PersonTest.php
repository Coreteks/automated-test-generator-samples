<?php

namespace tests\Faker\Provider\fr_CA;

use Faker\Provider\fr_CA\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_CA\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\fr_CA\Person();
}
}
