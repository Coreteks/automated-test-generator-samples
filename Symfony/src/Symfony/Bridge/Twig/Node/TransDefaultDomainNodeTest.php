<?php

namespace tests\Symfony\Bridge\Twig\Node;

use Mockery as m;
use Symfony\Bridge\Twig\Node\TransDefaultDomainNode;
use Twig\Node\Expression\AbstractExpression;

class TransDefaultDomainNodeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_expr;
/**
* @var mixed
*/
protected $_lineno = null;
/**
* @var mixed
*/
protected $_tag = null;
/**
* @var \Symfony\Bridge\Twig\Node\TransDefaultDomainNode
*/
protected $transDefaultDomainNode;

public function setUp()
{
    parent::setUp();

    $this->_expr = m::mock(\Twig\Node\Expression\AbstractExpression::class);
    $this->_lineno = null;
    $this->_tag = null;
    $this->transDefaultDomainNode = new \Symfony\Bridge\Twig\Node\TransDefaultDomainNode($this->_expr, $this->_lineno, $this->_tag);
}

public function testCompile0()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    $actual = $this->transDefaultDomainNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
