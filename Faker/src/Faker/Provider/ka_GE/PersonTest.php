<?php

namespace tests\Faker\Provider\ka_GE;

use Faker\Provider\ka_GE\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ka_GE\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\ka_GE\Person();
}
}
