<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\GroupableEntity;

class GroupableEntityTest extends \PHPUnit_Framework_TestCase
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
protected $_groupName = null;
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\GroupableEntity
*/
protected $groupableEntity;

public function setUp()
{
    parent::setUp();

    $this->_id = null;
    $this->_name = null;
    $this->_groupName = null;
    $this->groupableEntity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\GroupableEntity($this->_id, $this->_name, $this->_groupName);
}
}
