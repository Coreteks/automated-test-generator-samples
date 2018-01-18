<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Routing;

use Mockery as m;
use Psr\Container\ContainerInterface;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\Routing\RequestContext;

class RouterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var mixed
*/
protected $_resource = null;
/**
* @var array
*/
protected $_options = [];
/**
* @var \Mockery\MockInterface
*/
protected $_context;
/**
* @var \Mockery\MockInterface
*/
protected $_parameters;
/**
* @var \Mockery\MockInterface
*/
protected $_logger;
/**
* @var \Symfony\Bundle\FrameworkBundle\Routing\Router
*/
protected $router;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Psr\Container\ContainerInterface::class);
    $this->_resource = null;
    $this->_options = [];
    $this->_context = m::mock(\Symfony\Component\Routing\RequestContext::class);
    $this->_parameters = m::mock(\Psr\Container\ContainerInterface::class);
    $this->_logger = m::mock(\Psr\Log\LoggerInterface::class);
    $this->router = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this->_container, $this->_resource, $this->_options, $this->_context, $this->_parameters, $this->_logger);
}

public function testGetRouteCollection0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->collection) == false (line 68)

    $actual = $this->router->getRouteCollection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRouteCollection1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->collection) == true (line 68)

    $actual = $this->router->getRouteCollection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp0()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    $actual = $this->router->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSubscribedServices0()
{
    // TODO: Your mock expectations here

    $actual = $this->router->getSubscribedServices();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
