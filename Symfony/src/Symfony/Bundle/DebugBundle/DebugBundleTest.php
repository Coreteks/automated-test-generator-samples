<?php

namespace tests\Symfony\Bundle\DebugBundle;

use Mockery as m;
use Symfony\Bundle\DebugBundle\DebugBundle;

class DebugBundleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\DebugBundle\DebugBundle
*/
protected $debugBundle;

public function setUp()
{
    parent::setUp();

    $this->debugBundle = new \Symfony\Bundle\DebugBundle\DebugBundle();
}

public function testBoot0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container->getParameter('kernel.debug')) == false (line 26)

    $actual = $this->debugBundle->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container->getParameter('kernel.debug')) == true (line 26)

    $actual = $this->debugBundle->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    $actual = $this->debugBundle->build($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
