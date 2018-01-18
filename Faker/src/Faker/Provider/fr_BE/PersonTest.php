<?php

namespace tests\Faker\Provider\fr_BE;

use Faker\Provider\fr_BE\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_BE\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\fr_BE\Person();
}
}
