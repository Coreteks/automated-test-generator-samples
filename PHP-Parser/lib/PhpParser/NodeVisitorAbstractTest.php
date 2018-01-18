<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\NodeVisitorAbstract;

class NodeVisitorAbstractTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\NodeVisitorAbstract
*/
protected $nodeVisitorAbstract;

public function setUp()
{
    parent::setUp();

    $this->nodeVisitorAbstract = new \PhpParser\NodeVisitorAbstract();
}

public function testBeforeTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    $actual = $this->nodeVisitorAbstract->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    $actual = $this->nodeVisitorAbstract->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    $actual = $this->nodeVisitorAbstract->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfterTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    $actual = $this->nodeVisitorAbstract->afterTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
