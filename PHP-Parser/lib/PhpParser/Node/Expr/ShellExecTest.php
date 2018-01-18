<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr\ShellExec;

class ShellExecTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_parts = [];
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\ShellExec
*/
protected $shellExec;

public function setUp()
{
    parent::setUp();

    $this->_parts = [];
    $this->_attributes = [];
    $this->shellExec = new \PhpParser\Node\Expr\ShellExec($this->_parts, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->shellExec->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->shellExec->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
