<?php

namespace tests\Faker\Provider\it_CH;

use Faker\Provider\it_CH\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\it_CH\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\it_CH\Person();
}
}
