<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\Mod;

class ModTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\Mod
*/
protected $mod;

public function setUp()
{
    parent::setUp();

    $this->mod = new \PhpParser\Node\Expr\BinaryOp\Mod();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->mod->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->mod->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
