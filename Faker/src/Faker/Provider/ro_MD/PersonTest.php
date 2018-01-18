<?php

namespace tests\Faker\Provider\ro_MD;

use Faker\Provider\ro_MD\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ro_MD\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\ro_MD\Person();
}
}
