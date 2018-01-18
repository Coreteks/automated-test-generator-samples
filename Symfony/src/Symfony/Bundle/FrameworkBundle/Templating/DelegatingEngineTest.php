<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating;

use Mockery as m;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine;

class DelegatingEngineTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var array
*/
protected $_engineIds = [];
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine
*/
protected $delegatingEngine;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Psr\Container\ContainerInterface::class);
    $this->_engineIds = [];
    $this->delegatingEngine = new \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine($this->_container, $this->_engineIds);
}

public function testGetEngine0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->delegatingEngine->getEngine($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRenderResponse0()
{
    $view = m::mock('UntypedParameter_view_');
    $parameters = [];
    $response = m::mock(\Symfony\Component\HttpFoundation\Response::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($engine instanceof \Symfony\Bundle\FrameworkBundle\Templating\EngineInterface) == false (line 50)
    // if (null === $response) == false (line 54)

    $actual = $this->delegatingEngine->renderResponse($view, $parameters, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRenderResponse1()
{
    $view = m::mock('UntypedParameter_view_');
    $parameters = [];
    $response = m::mock(\Symfony\Component\HttpFoundation\Response::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($engine instanceof \Symfony\Bundle\FrameworkBundle\Templating\EngineInterface) == false (line 50)
    // if (null === $response) == true (line 54)

    $actual = $this->delegatingEngine->renderResponse($view, $parameters, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRenderResponse2()
{
    $view = m::mock('UntypedParameter_view_');
    $parameters = [];
    $response = m::mock(\Symfony\Component\HttpFoundation\Response::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($engine instanceof \Symfony\Bundle\FrameworkBundle\Templating\EngineInterface) == true (line 50)

    $actual = $this->delegatingEngine->renderResponse($view, $parameters, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
