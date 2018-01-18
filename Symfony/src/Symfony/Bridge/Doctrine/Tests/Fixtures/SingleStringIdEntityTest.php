<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\SingleStringIdEntity;

class SingleStringIdEntityTest extends \PHPUnit_Framework_TestCase
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
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\SingleStringIdEntity
*/
protected $singleStringIdEntity;

public function setUp()
{
    parent::setUp();

    $this->_id = null;
    $this->_name = null;
    $this->singleStringIdEntity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\SingleStringIdEntity($this->_id, $this->_name);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->singleStringIdEntity->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
