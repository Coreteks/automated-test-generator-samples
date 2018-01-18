<?php

namespace tests\PhpParser\NodeVisitor;

use Mockery as m;
use PhpParser\NodeVisitor\FirstFindingVisitor;

class FirstFindingVisitorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_filterCallback = null;
/**
* @var \PhpParser\NodeVisitor\FirstFindingVisitor
*/
protected $firstFindingVisitor;

public function setUp()
{
    parent::setUp();

    $this->_filterCallback = null;
    $this->firstFindingVisitor = new \PhpParser\NodeVisitor\FirstFindingVisitor($this->_filterCallback);
}

public function testGetFoundNode0()
{
    // TODO: Your mock expectations here

    $actual = $this->firstFindingVisitor->getFoundNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    $actual = $this->firstFindingVisitor->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($filterCallback($node)) == false (line 43)

    $actual = $this->firstFindingVisitor->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($filterCallback($node)) == true (line 43)

    $actual = $this->firstFindingVisitor->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
