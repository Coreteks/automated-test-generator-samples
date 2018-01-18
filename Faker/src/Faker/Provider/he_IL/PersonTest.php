<?php

namespace tests\Faker\Provider\he_IL;

use Faker\Provider\he_IL\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\he_IL\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\he_IL\Person();
}
}
