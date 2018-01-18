<?php

namespace tests\Symfony\Bundle\DebugBundle\DependencyInjection;

use Mockery as m;
use Symfony\Bundle\DebugBundle\DependencyInjection\Configuration;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\DebugBundle\DependencyInjection\Configuration
*/
protected $configuration;

public function setUp()
{
    parent::setUp();

    $this->configuration = new \Symfony\Bundle\DebugBundle\DependencyInjection\Configuration();
}

public function testGetConfigTreeBuilder0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getConfigTreeBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
