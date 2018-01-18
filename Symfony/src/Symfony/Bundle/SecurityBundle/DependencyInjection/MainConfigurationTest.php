<?php

namespace tests\Symfony\Bundle\SecurityBundle\DependencyInjection;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\DependencyInjection\MainConfiguration;

class MainConfigurationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_factories = [];
/**
* @var array
*/
protected $_userProviderFactories = [];
/**
* @var \Symfony\Bundle\SecurityBundle\DependencyInjection\MainConfiguration
*/
protected $mainConfiguration;

public function setUp()
{
    parent::setUp();

    $this->_factories = [];
    $this->_userProviderFactories = [];
    $this->mainConfiguration = new \Symfony\Bundle\SecurityBundle\DependencyInjection\MainConfiguration($this->_factories, $this->_userProviderFactories);
}

public function testGetConfigTreeBuilder0()
{
    // TODO: Your mock expectations here

    $actual = $this->mainConfiguration->getConfigTreeBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
