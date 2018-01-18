<?php

namespace tests\Symfony\Bridge\Twig\Node;

use Mockery as m;
use Symfony\Bridge\Twig\Node\FormThemeNode;
use Twig\Node\Node;
use Twig\Node\Node;

class FormThemeNodeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_form;
/**
* @var \Mockery\MockInterface
*/
protected $_resources;
/**
* @var mixed
*/
protected $_lineno = null;
/**
* @var mixed
*/
protected $_tag = null;
/**
* @var mixed
*/
protected $_only = null;
/**
* @var \Symfony\Bridge\Twig\Node\FormThemeNode
*/
protected $formThemeNode;

public function setUp()
{
    parent::setUp();

    $this->_form = m::mock(\Twig\Node\Node::class);
    $this->_resources = m::mock(\Twig\Node\Node::class);
    $this->_lineno = null;
    $this->_tag = null;
    $this->_only = null;
    $this->formThemeNode = new \Symfony\Bridge\Twig\Node\FormThemeNode($this->_form, $this->_resources, $this->_lineno, $this->_tag, $this->_only);
}

public function testCompile0()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    $actual = $this->formThemeNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
