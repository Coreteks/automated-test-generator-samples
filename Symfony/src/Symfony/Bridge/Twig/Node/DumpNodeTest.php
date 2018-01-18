<?php

namespace tests\Symfony\Bridge\Twig\Node;

use Mockery as m;
use Symfony\Bridge\Twig\Node\DumpNode;
use Twig\Node\Node;

class DumpNodeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_varPrefix = null;
/**
* @var \Mockery\MockInterface
*/
protected $_values;
/**
* @var mixed
*/
protected $_lineno = null;
/**
* @var mixed
*/
protected $_tag = null;
/**
* @var \Symfony\Bridge\Twig\Node\DumpNode
*/
protected $dumpNode;

public function setUp()
{
    parent::setUp();

    $this->_varPrefix = null;
    $this->_values = m::mock(\Twig\Node\Node::class);
    $this->_lineno = null;
    $this->_tag = null;
    $this->dumpNode = new \Symfony\Bridge\Twig\Node\DumpNode($this->_varPrefix, $this->_values, $this->_lineno, $this->_tag);
}

public function testCompile0()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasNode('values')) == false (line 44)
    // if (($values = $this->getNode('values')) && 1 === $values->count()) == false (line 59)

    $actual = $this->dumpNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile1()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasNode('values')) == false (line 44)
    // if (($values = $this->getNode('values')) && 1 === $values->count()) == false (line 59)
    // if ($node->hasAttribute('name')) == false (line 72)

    $actual = $this->dumpNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile2()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasNode('values')) == false (line 44)
    // if (($values = $this->getNode('values')) && 1 === $values->count()) == false (line 59)
    // if ($node->hasAttribute('name')) == true (line 72)

    $actual = $this->dumpNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile3()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasNode('values')) == false (line 44)
    // if (($values = $this->getNode('values')) && 1 === $values->count()) == true (line 59)

    $actual = $this->dumpNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile4()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasNode('values')) == true (line 44)

    $actual = $this->dumpNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
