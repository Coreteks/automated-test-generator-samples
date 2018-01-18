<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\CompositeIntIdEntity;

class CompositeIntIdEntityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_id1 = null;
/**
* @var mixed
*/
protected $_id2 = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\CompositeIntIdEntity
*/
protected $compositeIntIdEntity;

public function setUp()
{
    parent::setUp();

    $this->_id1 = null;
    $this->_id2 = null;
    $this->_name = null;
    $this->compositeIntIdEntity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\CompositeIntIdEntity($this->_id1, $this->_id2, $this->_name);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->compositeIntIdEntity->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
