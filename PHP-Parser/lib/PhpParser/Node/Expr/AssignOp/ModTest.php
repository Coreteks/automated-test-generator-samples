<?php

namespace tests\PhpParser\Node\Expr\AssignOp;

use Mockery as m;
use PhpParser\Node\Expr\AssignOp\Mod;

class ModTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\AssignOp\Mod
*/
protected $mod;

public function setUp()
{
    parent::setUp();

    $this->mod = new \PhpParser\Node\Expr\AssignOp\Mod();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->mod->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
