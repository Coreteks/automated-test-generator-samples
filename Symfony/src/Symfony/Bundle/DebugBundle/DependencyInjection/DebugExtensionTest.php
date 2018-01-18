<?php

namespace tests\Symfony\Bundle\DebugBundle\DependencyInjection;

use Mockery as m;
use Symfony\Bundle\DebugBundle\DependencyInjection\DebugExtension;

class DebugExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\DebugBundle\DependencyInjection\DebugExtension
*/
protected $debugExtension;

public function setUp()
{
    parent::setUp();

    $this->debugExtension = new \Symfony\Bundle\DebugBundle\DependencyInjection\DebugExtension();
}

public function testLoad0()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $config['dump_destination']) == false (line 43)

    $actual = $this->debugExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $config['dump_destination']) == true (line 43)

    $actual = $this->debugExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXsdValidationBasePath0()
{
    // TODO: Your mock expectations here

    $actual = $this->debugExtension->getXsdValidationBasePath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNamespace0()
{
    // TODO: Your mock expectations here

    $actual = $this->debugExtension->getNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
