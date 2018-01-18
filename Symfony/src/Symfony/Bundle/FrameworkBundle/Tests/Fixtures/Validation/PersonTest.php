<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Person();
}
}
