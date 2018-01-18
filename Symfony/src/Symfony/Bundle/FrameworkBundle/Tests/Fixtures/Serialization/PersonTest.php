<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Serialization;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Serialization\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Serialization\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Serialization\Person();
}
}
