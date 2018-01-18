<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DependencyInjection;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\Configuration;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_debug = null;
/**
* @var \Symfony\Bundle\FrameworkBundle\DependencyInjection\Configuration
*/
protected $configuration;

public function setUp()
{
    parent::setUp();

    $this->_debug = null;
    $this->configuration = new \Symfony\Bundle\FrameworkBundle\DependencyInjection\Configuration($this->_debug);
}

public function testGetConfigTreeBuilder0()
{
    // TODO: Your mock expectations here

    $actual = $this->configuration->getConfigTreeBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
