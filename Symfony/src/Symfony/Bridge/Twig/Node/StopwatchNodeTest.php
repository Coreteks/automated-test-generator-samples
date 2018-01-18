<?php

namespace tests\Symfony\Bridge\Twig\Node;

use Mockery as m;
use Symfony\Bridge\Twig\Node\StopwatchNode;
use Twig\Node\Expression\AssignNameExpression;
use Twig\Node\Node;
use Twig\Node\Node;

class StopwatchNodeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_name;
/**
* @var \Mockery\MockInterface
*/
protected $_body;
/**
* @var \Mockery\MockInterface
*/
protected $_var;
/**
* @var mixed
*/
protected $_lineno = null;
/**
* @var mixed
*/
protected $_tag = null;
/**
* @var \Symfony\Bridge\Twig\Node\StopwatchNode
*/
protected $stopwatchNode;

public function setUp()
{
    parent::setUp();

    $this->_name = m::mock(\Twig\Node\Node::class);
    $this->_body = m::mock(\Twig\Node\Node::class);
    $this->_var = m::mock(\Twig\Node\Expression\AssignNameExpression::class);
    $this->_lineno = null;
    $this->_tag = null;
    $this->stopwatchNode = new \Symfony\Bridge\Twig\Node\StopwatchNode($this->_name, $this->_body, $this->_var, $this->_lineno, $this->_tag);
}

public function testCompile0()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    $actual = $this->stopwatchNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
