<?php

namespace tests\Faker\Provider\zh_CN;

use Faker\Provider\zh_CN\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\zh_CN\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\zh_CN\Person();
}
}
