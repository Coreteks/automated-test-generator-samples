<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\Configuration;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_customConfig = null;
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\Configuration
*/
protected $configuration;

public function setUp()
{
    parent::setUp();

    $this->_customConfig = null;
    $this->configuration = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\Configuration($this->_customConfig);
}

public function testGetConfigTreeBuilder0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->customConfig) == false (line 31)

    $actual = $this->configuration->getConfigTreeBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConfigTreeBuilder1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->customConfig) == true (line 31)

    $actual = $this->configuration->getConfigTreeBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
