<?php

namespace tests\Symfony\Bridge\Twig\Node;

use Mockery as m;
use Symfony\Bridge\Twig\Node\RenderBlockNode;

class RenderBlockNodeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\Node\RenderBlockNode
*/
protected $renderBlockNode;

public function setUp()
{
    parent::setUp();

    $this->renderBlockNode = new \Symfony\Bridge\Twig\Node\RenderBlockNode();
}

public function testCompile0()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == false (line 33)

    $actual = $this->renderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile1()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 33)
    // if (isset($arguments[1])) == false (line 37)

    $actual = $this->renderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile2()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 33)
    // if (isset($arguments[1])) == true (line 37)

    $actual = $this->renderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
