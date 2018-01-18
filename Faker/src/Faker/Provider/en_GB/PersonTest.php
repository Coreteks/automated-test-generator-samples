<?php

namespace tests\Faker\Provider\en_GB;

use Faker\Provider\en_GB\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_GB\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\en_GB\Person();
}
}
