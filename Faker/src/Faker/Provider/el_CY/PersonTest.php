<?php

namespace tests\Faker\Provider\el_CY;

use Faker\Provider\el_CY\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\el_CY\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\el_CY\Person();
}
}
