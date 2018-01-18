<?php

namespace tests\Faker\Provider\bn_BD;

use Faker\Provider\bn_BD\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\bn_BD\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\bn_BD\Person();
}
}
