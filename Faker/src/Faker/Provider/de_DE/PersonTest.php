<?php

namespace tests\Faker\Provider\de_DE;

use Faker\Provider\de_DE\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\de_DE\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\de_DE\Person();
}

public function testSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->suffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
