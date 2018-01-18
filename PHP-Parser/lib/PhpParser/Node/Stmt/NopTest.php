<?php

namespace tests\PhpParser\Node\Stmt;

use Mockery as m;
use PhpParser\Node\Stmt\Nop;

class NopTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Stmt\Nop
*/
protected $nop;

public function setUp()
{
    parent::setUp();

    $this->nop = new \PhpParser\Node\Stmt\Nop();
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->nop->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->nop->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
