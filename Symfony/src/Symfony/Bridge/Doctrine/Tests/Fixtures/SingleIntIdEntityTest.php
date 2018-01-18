<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdEntity;

class SingleIntIdEntityTest extends \PHPUnit_Framework_TestCase
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
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdEntity
*/
protected $singleIntIdEntity;

public function setUp()
{
    parent::setUp();

    $this->_id = null;
    $this->_name = null;
    $this->singleIntIdEntity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdEntity($this->_id, $this->_name);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->singleIntIdEntity->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
