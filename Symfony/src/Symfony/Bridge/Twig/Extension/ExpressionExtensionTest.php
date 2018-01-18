<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\ExpressionExtension;

class ExpressionExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\Extension\ExpressionExtension
*/
protected $expressionExtension;

public function setUp()
{
    parent::setUp();

    $this->expressionExtension = new \Symfony\Bridge\Twig\Extension\ExpressionExtension();
}

public function testGetFunctions0()
{
    // TODO: Your mock expectations here

    $actual = $this->expressionExtension->getFunctions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateExpression0()
{
    $expression = m::mock('UntypedParameter_expression_');

    // TODO: Your mock expectations here

    $actual = $this->expressionExtension->createExpression($expression);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->expressionExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
