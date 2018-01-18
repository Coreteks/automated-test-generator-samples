<?php

namespace tests\Faker\Provider\de_CH;

use Faker\Provider\de_CH\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\de_CH\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\de_CH\Person();
}
}
