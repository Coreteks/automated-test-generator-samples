<?php

namespace tests\Faker\Provider\fa_IR;

use Faker\Provider\fa_IR\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fa_IR\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\fa_IR\Person();
}
}
