<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating;

use Mockery as m;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables;
use Symfony\Bundle\FrameworkBundle\Templating\PhpEngine;
use Symfony\Component\Templating\Loader\LoaderInterface;
use Symfony\Component\Templating\TemplateNameParserInterface;

class PhpEngineTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_parser;
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Mockery\MockInterface
*/
protected $_loader;
/**
* @var \Mockery\MockInterface
*/
protected $_globals;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine
*/
protected $phpEngine;

public function setUp()
{
    parent::setUp();

    $this->_parser = m::mock(\Symfony\Component\Templating\TemplateNameParserInterface::class);
    $this->_container = m::mock(\Psr\Container\ContainerInterface::class);
    $this->_loader = m::mock(\Symfony\Component\Templating\Loader\LoaderInterface::class);
    $this->_globals = m::mock(\Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables::class);
    $this->phpEngine = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->_parser, $this->_container, $this->_loader, $this->_globals);
}

public function testGet0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->helpers[$name])) == false (line 45)
    // if (is_string($this->helpers[$name])) == false (line 49)

    $actual = $this->phpEngine->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->helpers[$name])) == false (line 45)
    // if (is_string($this->helpers[$name])) == true (line 49)

    $actual = $this->phpEngine->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGet2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->helpers[$name])) == true (line 45)
    // throw new \InvalidArgumentException(sprintf('The helper "%s" is not defined.', $name)) -> exception (line 46)

    $actual = $this->phpEngine->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetHelpers0()
{
    $helpers = [];

    // TODO: Your mock expectations here

    $actual = $this->phpEngine->setHelpers($helpers);
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
    // if (null === $response) == false (line 70)

    $actual = $this->phpEngine->renderResponse($view, $parameters, $response);
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
    // if (null === $response) == true (line 70)

    $actual = $this->phpEngine->renderResponse($view, $parameters, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
