<?php

namespace tests\Faker\Provider\en_IN;

use Faker\Provider\en_IN\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_IN\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\en_IN\Person();
}

public function testMiddleNameMale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->middleNameMale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
