<?php

namespace tests\Symfony\Bridge\Twig\Node;

use Mockery as m;
use Symfony\Bridge\Twig\Node\SearchAndRenderBlockNode;

class SearchAndRenderBlockNodeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\Node\SearchAndRenderBlockNode
*/
protected $searchAndRenderBlockNode;

public function setUp()
{
    parent::setUp();

    $this->searchAndRenderBlockNode = new \Symfony\Bridge\Twig\Node\SearchAndRenderBlockNode();
}

public function testCompile0()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == false (line 35)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile1()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == false (line 39)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile2()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == false (line 40)
    // if (null !== $variables || $labelIsExpression) == false (line 87)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile3()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == false (line 40)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile4()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == false (line 40)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile5()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == false (line 40)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile6()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == false (line 40)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile7()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == false (line 40)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile8()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == false (line 40)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile9()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == false (line 47)
    // if (null !== $variables || $labelIsExpression) == false (line 87)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile10()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == false (line 47)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile11()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == false (line 47)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile12()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == false (line 47)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile13()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == false (line 47)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile14()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == false (line 47)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile15()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == false (line 47)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile16()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == false (line 54)
    // if (null !== $variables || $labelIsExpression) == false (line 87)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile17()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == false (line 54)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile18()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == false (line 54)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile19()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == false (line 54)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile20()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == false (line 54)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile21()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == false (line 54)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile22()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == false (line 54)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile23()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == false (line 59)
    // if (null !== $variables || $labelIsExpression) == false (line 87)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile24()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == false (line 59)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile25()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == false (line 59)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile26()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == false (line 59)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile27()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == false (line 59)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile28()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == false (line 59)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile29()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == false (line 59)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile30()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if (null !== $variables || $labelIsExpression) == false (line 87)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile31()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile32()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile33()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile34()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile35()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile36()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile37()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == false (line 62)
    // if (null !== $variables || $labelIsExpression) == false (line 87)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile38()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == false (line 62)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile39()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == false (line 62)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile40()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == false (line 62)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile41()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == false (line 62)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile42()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == false (line 62)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile43()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == false (line 62)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile44()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == true (line 62)
    // if (null !== $variables || $labelIsExpression) == false (line 87)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile45()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == true (line 62)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile46()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == true (line 62)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile47()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == true (line 62)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == false (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile48()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == true (line 62)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == false (line 94)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile49()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == true (line 62)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == false (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile50()
{
    $compiler = m::mock(\Twig\Compiler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($arguments[0])) == true (line 35)
    // if (isset($arguments[1])) == true (line 39)
    // if ('label' === $blockNameSuffix) == true (line 40)
    // if ($label instanceof \Twig\Node\Expression\ConstantExpression) == true (line 47)
    // if (!twig_test_empty($label->getAttribute('value'))) == true (line 54)
    // if (null !== $originalVariables) == true (line 59)
    // if ((string) $labelKey !== (string) $pair['key']) == true (line 62)
    // if (null !== $variables || $labelIsExpression) == true (line 87)
    // if (null !== $variables) == true (line 90)
    // if ($labelIsExpression) == true (line 94)
    // if (null !== $variables) == true (line 95)

    $actual = $this->searchAndRenderBlockNode->compile($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
