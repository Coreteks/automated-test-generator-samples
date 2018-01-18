<?php

namespace tests\Symfony\Bridge\Twig\Node;

use Mockery as m;
use Symfony\Bridge\Twig\Node\TransNode;
use Twig\Node\Expression\AbstractExpression;
use Twig\Node\Expression\AbstractExpression;
use Twig\Node\Expression\AbstractExpression;
use Twig\Node\Node;
use Twig\Node\Node;

class TransNodeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_body;
/**
* @var \Mockery\MockInterface
*/
protected $_domain;
/**
* @var \Mockery\MockInterface
*/
protected $_count;
/**
* @var \Mockery\MockInterface
*/
protected $_vars;
/**
* @var \Mockery\MockInterface
*/
protected $_locale;
/**
* @var mixed
*/
protected $_lineno = null;
/**
* @var mixed
*/
protected $_tag = null;
/**
* @var \Symfony\Bridge\Twig\Node\TransNode
*/
protected $transNode;

public function setUp()
{
    parent::setUp();

    $this->_body = m::mock(\Twig\Node\Node::class);
    $this->_domain = m::mock(\Twig\Node\Node::class);
    $this->_count = m::mock(\Twig\Node\Expression\AbstractExpression::class);
    $this->_vars = m::mock(\Twig\Node\Expression\AbstractExpression::class);
    $this->_locale = m::mock(\Twig\Node\Expression\AbstractExpression::class);
    $this->_lineno = null;
    $this->_tag = null;
    $this->transNode = new \Symfony\Bridge\Twig\Node\TransNode($this->_body, $this->_domain, $this->_count, $this->_vars, $this->_locale, $this->_lineno, $this->_tag);
}

public function testCompile0()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile1()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile2()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile3()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile4()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile5()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile6()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile7()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile8()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile9()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile10()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile11()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile12()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile13()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile14()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile15()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == false (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile16()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile17()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile18()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile19()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile20()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile21()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile22()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile23()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == false (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile24()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile25()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile26()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile27()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == false (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile28()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile29()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == false (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile30()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == false (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile31()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasNode('vars') && ($vars = $this->getNode('vars')) instanceof \Twig\Node\Expression\ArrayExpression) == true (line 54)
    // if ($this->hasNode('count')) == true (line 69)
    // if (null !== $vars) == true (line 76)
    // if (!$this->hasNode('domain')) == true (line 90)
    // if ($this->hasNode('locale')) == true (line 96)

    $actual = $this->transNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
