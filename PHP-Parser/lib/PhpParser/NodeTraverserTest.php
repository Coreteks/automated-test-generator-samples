<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\NodeTraverser;

class NodeTraverserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\NodeTraverser
*/
protected $nodeTraverser;

public function setUp()
{
    parent::setUp();

    $this->nodeTraverser = new \PhpParser\NodeTraverser();
}

public function testAddVisitor0()
{
    $visitor = m::mock(\PhpParser\NodeVisitor::class);

    // TODO: Your mock expectations here

    $actual = $this->nodeTraverser->addVisitor($visitor);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveVisitor0()
{
    $visitor = m::mock(\PhpParser\NodeVisitor::class);

    // TODO: Your mock expectations here

    $actual = $this->nodeTraverser->removeVisitor($visitor);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveVisitor1()
{
    $visitor = m::mock(\PhpParser\NodeVisitor::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($storedVisitor === $visitor) == false (line 62)

    $actual = $this->nodeTraverser->removeVisitor($visitor);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveVisitor2()
{
    $visitor = m::mock(\PhpParser\NodeVisitor::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($storedVisitor === $visitor) == true (line 62)

    $actual = $this->nodeTraverser->removeVisitor($visitor);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    $actual = $this->nodeTraverser->traverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTraverse1()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== ($return = $visitor->afterTraverse($nodes))) == false (line 88)

    $actual = $this->nodeTraverser->traverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTraverse2()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== ($return = $visitor->afterTraverse($nodes))) == true (line 88)

    $actual = $this->nodeTraverser->traverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTraverse3()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== ($return = $visitor->beforeTraverse($nodes))) == false (line 80)

    $actual = $this->nodeTraverser->traverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTraverse4()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== ($return = $visitor->beforeTraverse($nodes))) == false (line 80)
    // if (null !== ($return = $visitor->afterTraverse($nodes))) == false (line 88)

    $actual = $this->nodeTraverser->traverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTraverse5()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== ($return = $visitor->beforeTraverse($nodes))) == false (line 80)
    // if (null !== ($return = $visitor->afterTraverse($nodes))) == true (line 88)

    $actual = $this->nodeTraverser->traverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTraverse6()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== ($return = $visitor->beforeTraverse($nodes))) == true (line 80)

    $actual = $this->nodeTraverser->traverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTraverse7()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== ($return = $visitor->beforeTraverse($nodes))) == true (line 80)
    // if (null !== ($return = $visitor->afterTraverse($nodes))) == false (line 88)

    $actual = $this->nodeTraverser->traverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTraverse8()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== ($return = $visitor->beforeTraverse($nodes))) == true (line 80)
    // if (null !== ($return = $visitor->afterTraverse($nodes))) == true (line 88)

    $actual = $this->nodeTraverser->traverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
