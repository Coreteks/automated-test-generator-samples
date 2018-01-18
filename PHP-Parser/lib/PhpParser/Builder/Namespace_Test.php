<?php

namespace tests\PhpParser\Builder;

use Mockery as m;
use PhpParser\Builder\Namespace_;

class Namespace_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \PhpParser\Builder\Namespace_
*/
protected $namespace_;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->namespace_ = new \PhpParser\Builder\Namespace_($this->_name);
}

public function testAddStmt0()
{
    $stmt = m::mock('UntypedParameter_stmt_');

    // TODO: Your mock expectations here

    $actual = $this->namespace_->addStmt($stmt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode0()
{
    // TODO: Your mock expectations here

    $actual = $this->namespace_->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
