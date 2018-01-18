<?php

namespace tests\Symfony\Bundle\FrameworkBundle;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;

class FrameworkBundleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\FrameworkBundle
*/
protected $frameworkBundle;

public function setUp()
{
    parent::setUp();

    $this->frameworkBundle = new \Symfony\Bundle\FrameworkBundle\FrameworkBundle();
}

public function testBoot0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container->getParameter('kernel.http_method_override')) == false (line 66)
    // if ($trustedHosts = $this->container->getParameter('kernel.trusted_hosts')) == false (line 70)

    $actual = $this->frameworkBundle->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container->getParameter('kernel.http_method_override')) == false (line 66)
    // if ($trustedHosts = $this->container->getParameter('kernel.trusted_hosts')) == true (line 70)

    $actual = $this->frameworkBundle->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container->getParameter('kernel.http_method_override')) == true (line 66)
    // if ($trustedHosts = $this->container->getParameter('kernel.trusted_hosts')) == false (line 70)

    $actual = $this->frameworkBundle->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container->getParameter('kernel.http_method_override')) == true (line 66)
    // if ($trustedHosts = $this->container->getParameter('kernel.trusted_hosts')) == true (line 70)

    $actual = $this->frameworkBundle->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->getParameter('kernel.debug')) == false (line 118)

    $actual = $this->frameworkBundle->build($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->getParameter('kernel.debug')) == true (line 118)

    $actual = $this->frameworkBundle->build($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterCommands0()
{
    $application = m::mock(\Symfony\Component\Console\Application::class);

    // TODO: Your mock expectations here

    $actual = $this->frameworkBundle->registerCommands($application);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
