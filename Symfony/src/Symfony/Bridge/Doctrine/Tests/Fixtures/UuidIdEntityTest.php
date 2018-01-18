<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\UuidIdEntity;

class UuidIdEntityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_id = null;
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\UuidIdEntity
*/
protected $uuidIdEntity;

public function setUp()
{
    parent::setUp();

    $this->_id = null;
    $this->uuidIdEntity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\UuidIdEntity($this->_id);
}
}
