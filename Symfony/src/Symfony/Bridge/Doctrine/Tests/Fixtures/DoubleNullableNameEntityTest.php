<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\DoubleNullableNameEntity;

class DoubleNullableNameEntityTest extends \PHPUnit_Framework_TestCase
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
* @var mixed
*/
protected $_name2 = null;
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\DoubleNullableNameEntity
*/
protected $doubleNullableNameEntity;

public function setUp()
{
    parent::setUp();

    $this->_id = null;
    $this->_name = null;
    $this->_name2 = null;
    $this->doubleNullableNameEntity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\DoubleNullableNameEntity($this->_id, $this->_name, $this->_name2);
}
}
