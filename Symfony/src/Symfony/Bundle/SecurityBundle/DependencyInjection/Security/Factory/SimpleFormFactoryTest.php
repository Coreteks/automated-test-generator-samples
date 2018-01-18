<?php

namespace tests\Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\SimpleFormFactory;

class SimpleFormFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\SimpleFormFactory
*/
protected $simpleFormFactory;

public function setUp()
{
    parent::setUp();

    $this->simpleFormFactory = new \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\SimpleFormFactory();
}

public function testGetKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->simpleFormFactory->getKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConfiguration0()
{
    $node = m::mock(\Symfony\Component\Config\Definition\Builder\NodeDefinition::class);

    // TODO: Your mock expectations here

    $actual = $this->simpleFormFactory->addConfiguration($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
