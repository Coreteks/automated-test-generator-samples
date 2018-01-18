<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdNoToStringEntity;

class SingleIntIdNoToStringEntityTest extends \PHPUnit_Framework_TestCase
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
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdNoToStringEntity
*/
protected $singleIntIdNoToStringEntity;

public function setUp()
{
    parent::setUp();

    $this->_id = null;
    $this->_name = null;
    $this->singleIntIdNoToStringEntity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdNoToStringEntity($this->_id, $this->_name);
}
}
