<?php

namespace tests\Faker\Provider\me_ME;

use Faker\Provider\me_ME\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\me_ME\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\me_ME\Person();
}
}
