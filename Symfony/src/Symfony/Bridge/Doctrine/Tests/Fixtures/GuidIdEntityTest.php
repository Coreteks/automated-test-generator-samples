<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\GuidIdEntity;

class GuidIdEntityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_id = null;
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\GuidIdEntity
*/
protected $guidIdEntity;

public function setUp()
{
    parent::setUp();

    $this->_id = null;
    $this->guidIdEntity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\GuidIdEntity($this->_id);
}
}
