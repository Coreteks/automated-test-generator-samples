<?php

namespace tests\Faker\Provider\en_NG;

use Faker\Provider\en_NG\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_NG\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\en_NG\Person();
}
}
