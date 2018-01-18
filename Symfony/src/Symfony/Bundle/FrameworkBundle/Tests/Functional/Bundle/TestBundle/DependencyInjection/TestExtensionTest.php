<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\TestExtension;

class TestExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\TestExtension
*/
protected $testExtension;

public function setUp()
{
    parent::setUp();

    $this->testExtension = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\TestExtension();
}

public function testLoad0()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    $actual = $this->testExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepend0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    $actual = $this->testExtension->prepend($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConfiguration0()
{
    $config = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    $actual = $this->testExtension->getConfiguration($config, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCustomConfig0()
{
    $customConfig = m::mock('UntypedParameter_customConfig_');

    // TODO: Your mock expectations here

    $actual = $this->testExtension->setCustomConfig($customConfig);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
