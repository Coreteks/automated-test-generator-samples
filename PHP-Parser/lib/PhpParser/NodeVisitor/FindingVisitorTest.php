<?php

namespace tests\PhpParser\NodeVisitor;

use Mockery as m;
use PhpParser\NodeVisitor\FindingVisitor;

class FindingVisitorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_filterCallback = null;
/**
* @var \PhpParser\NodeVisitor\FindingVisitor
*/
protected $findingVisitor;

public function setUp()
{
    parent::setUp();

    $this->_filterCallback = null;
    $this->findingVisitor = new \PhpParser\NodeVisitor\FindingVisitor($this->_filterCallback);
}

public function testGetFoundNodes0()
{
    // TODO: Your mock expectations here

    $actual = $this->findingVisitor->getFoundNodes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    $actual = $this->findingVisitor->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($filterCallback($node)) == false (line 42)

    $actual = $this->findingVisitor->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($filterCallback($node)) == true (line 42)

    $actual = $this->findingVisitor->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
