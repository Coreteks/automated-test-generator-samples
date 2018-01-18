<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\PreInc;

class PreIncTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_var;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\PreInc
*/
protected $preInc;

public function setUp()
{
    parent::setUp();

    $this->_var = m::mock(\PhpParser\Node\Expr::class);
    $this->_attributes = [];
    $this->preInc = new \PhpParser\Node\Expr\PreInc($this->_var, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->preInc->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->preInc->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
