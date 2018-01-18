<?php

namespace tests\Faker\Provider\hr_HR;

use Faker\Provider\hr_HR\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\hr_HR\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\hr_HR\Person();
}
}
