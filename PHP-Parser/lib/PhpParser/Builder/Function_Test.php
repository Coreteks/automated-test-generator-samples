<?php

namespace tests\PhpParser\Builder;

use Mockery as m;
use PhpParser\Builder\Function_;

class Function_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \PhpParser\Builder\Function_
*/
protected $function_;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->function_ = new \PhpParser\Builder\Function_($this->_name);
}

public function testAddStmt0()
{
    $stmt = m::mock('UntypedParameter_stmt_');

    // TODO: Your mock expectations here

    $actual = $this->function_->addStmt($stmt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode0()
{
    // TODO: Your mock expectations here

    $actual = $this->function_->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
