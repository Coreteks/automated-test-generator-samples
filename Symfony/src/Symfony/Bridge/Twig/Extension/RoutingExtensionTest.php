<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\RoutingExtension;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class RoutingExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Symfony\Bridge\Twig\Extension\RoutingExtension
*/
protected $routingExtension;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Symfony\Component\Routing\Generator\UrlGeneratorInterface::class);
    $this->routingExtension = new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->_generator);
}

public function testGetFunctions0()
{
    // TODO: Your mock expectations here

    $actual = $this->routingExtension->getFunctions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPath0()
{
    $name = m::mock('UntypedParameter_name_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    $actual = $this->routingExtension->getPath($name, $parameters, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUrl0()
{
    $name = m::mock('UntypedParameter_name_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $schemeRelative = m::mock('UntypedParameter_schemeRelative_');

    // TODO: Your mock expectations here

    $actual = $this->routingExtension->getUrl($name, $parameters, $schemeRelative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsUrlGenerationSafe0()
{
    $argsNode = m::mock(\Twig\Node\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $paramsNode || $paramsNode instanceof \Twig\Node\Expression\ArrayExpression && count($paramsNode) <= 2 && (!$paramsNode->hasNode(1) || $paramsNode->getNode(1) instanceof \Twig\Node\Expression\ConstantExpression)) == false (line 103)

    $actual = $this->routingExtension->isUrlGenerationSafe($argsNode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsUrlGenerationSafe1()
{
    $argsNode = m::mock(\Twig\Node\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $paramsNode || $paramsNode instanceof \Twig\Node\Expression\ArrayExpression && count($paramsNode) <= 2 && (!$paramsNode->hasNode(1) || $paramsNode->getNode(1) instanceof \Twig\Node\Expression\ConstantExpression)) == true (line 103)

    $actual = $this->routingExtension->isUrlGenerationSafe($argsNode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->routingExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
