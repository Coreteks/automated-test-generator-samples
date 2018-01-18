<?php

namespace tests\Faker\Provider\ko_KR;

use Faker\Provider\ko_KR\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ko_KR\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\ko_KR\Person();
}
}
