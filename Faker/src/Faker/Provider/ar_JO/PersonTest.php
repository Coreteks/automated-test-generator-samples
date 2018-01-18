<?php

namespace tests\Faker\Provider\ar_JO;

use Faker\Provider\ar_JO\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ar_JO\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\ar_JO\Person();
}

public function testPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->prefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
