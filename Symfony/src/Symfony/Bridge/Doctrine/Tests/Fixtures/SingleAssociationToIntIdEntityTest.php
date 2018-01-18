<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\SingleAssociationToIntIdEntity;
use Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdNoToStringEntity;

class SingleAssociationToIntIdEntityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_entity;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\SingleAssociationToIntIdEntity
*/
protected $singleAssociationToIntIdEntity;

public function setUp()
{
    parent::setUp();

    $this->_entity = m::mock(\Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdNoToStringEntity::class);
    $this->_name = null;
    $this->singleAssociationToIntIdEntity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\SingleAssociationToIntIdEntity($this->_entity, $this->_name);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->singleAssociationToIntIdEntity->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
