<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\NodeFinder;

class NodeFinderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\NodeFinder
*/
protected $nodeFinder;

public function setUp()
{
    parent::setUp();

    $this->nodeFinder = new \PhpParser\NodeFinder();
}

public function testFind0()
{
    $nodes = m::mock('UntypedParameter_nodes_');
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($nodes)) == false (line 19)

    $actual = $this->nodeFinder->find($nodes, $filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind1()
{
    $nodes = m::mock('UntypedParameter_nodes_');
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($nodes)) == true (line 19)

    $actual = $this->nodeFinder->find($nodes, $filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindInstanceOf0()
{
    $nodes = m::mock('UntypedParameter_nodes_');
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    $actual = $this->nodeFinder->findInstanceOf($nodes, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindFirst0()
{
    $nodes = m::mock('UntypedParameter_nodes_');
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($nodes)) == false (line 55)

    $actual = $this->nodeFinder->findFirst($nodes, $filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindFirst1()
{
    $nodes = m::mock('UntypedParameter_nodes_');
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($nodes)) == true (line 55)

    $actual = $this->nodeFinder->findFirst($nodes, $filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindFirstInstanceOf0()
{
    $nodes = m::mock('UntypedParameter_nodes_');
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    $actual = $this->nodeFinder->findFirstInstanceOf($nodes, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
