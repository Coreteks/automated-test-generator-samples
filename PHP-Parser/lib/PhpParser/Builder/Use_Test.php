<?php

namespace tests\PhpParser\Builder;

use Mockery as m;
use PhpParser\Builder\Use_;

class Use_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_type = null;
/**
* @var \PhpParser\Builder\Use_
*/
protected $use_;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_type = null;
    $this->use_ = new \PhpParser\Builder\Use_($this->_name, $this->_type);
}

public function testAs0()
{
    $alias = m::mock('UntypedParameter_alias_');

    // TODO: Your mock expectations here

    $actual = $this->use_->as($alias);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode0()
{
    // TODO: Your mock expectations here

    $actual = $this->use_->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
