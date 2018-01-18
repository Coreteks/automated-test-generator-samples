<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdStringWrapperNameEntity;

class SingleIntIdStringWrapperNameEntityTest extends \PHPUnit_Framework_TestCase
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
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdStringWrapperNameEntity
*/
protected $singleIntIdStringWrapperNameEntity;

public function setUp()
{
    parent::setUp();

    $this->_id = null;
    $this->_name = null;
    $this->singleIntIdStringWrapperNameEntity = new \Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdStringWrapperNameEntity($this->_id, $this->_name);
}
}
