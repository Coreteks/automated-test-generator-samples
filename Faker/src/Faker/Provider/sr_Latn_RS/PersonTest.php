<?php

namespace tests\Faker\Provider\sr_Latn_RS;

use Faker\Provider\sr_Latn_RS\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\sr_Latn_RS\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\sr_Latn_RS\Person();
}
}
