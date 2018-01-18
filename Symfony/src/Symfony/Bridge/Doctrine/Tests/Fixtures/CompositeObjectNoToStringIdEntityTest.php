<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\CompositeObjectNoToStringIdEntity;
use Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdNoToStringEntity;
use Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdNoToStringEntity;

class CompositeObjectNoToStringIdEntityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_objectOne;
/**
* @var \Mockery\MockInterface
*/
protected $_objectTwo;
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\CompositeObjectNoToStringIdEntity
*/
protected $compositeObjectNoToStringIdEntity;

public function setUp()
{
    parent::setUp();

    $this->_objectOne = m::mock(\Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdNoToStringEntity::class);
    $this->_objectTwo = m::mock(\Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdNoToStringEntity::class);
    $this->compositeObjectNoToStringIdEntity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\CompositeObjectNoToStringIdEntity($this->_objectOne, $this->_objectTwo);
}

public function testGetObjectOne0()
{
    // TODO: Your mock expectations here

    $actual = $this->compositeObjectNoToStringIdEntity->getObjectOne();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetObjectTwo0()
{
    // TODO: Your mock expectations here

    $actual = $this->compositeObjectNoToStringIdEntity->getObjectTwo();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
