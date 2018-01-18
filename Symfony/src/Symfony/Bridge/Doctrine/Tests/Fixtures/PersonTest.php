<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_id = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->_id = null;
    $this->_name = null;
    $this->person = new \Symfony\Bridge\Doctrine\Tests\Fixtures\Person($this->_id, $this->_name);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
