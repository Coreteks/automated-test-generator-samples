<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating;

use Mockery as m;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables;
use Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine;
use Symfony\Component\Stopwatch\Stopwatch;
use Symfony\Component\Templating\Loader\LoaderInterface;
use Symfony\Component\Templating\TemplateNameParserInterface;

class TimedPhpEngineTest extends \PHPUnit_Framework_TestCase
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
protected $_stopwatch;
/**
* @var \Mockery\MockInterface
*/
protected $_globals;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine
*/
protected $timedPhpEngine;

public function setUp()
{
    parent::setUp();

    $this->_parser = m::mock(\Symfony\Component\Templating\TemplateNameParserInterface::class);
    $this->_container = m::mock(\Psr\Container\ContainerInterface::class);
    $this->_loader = m::mock(\Symfony\Component\Templating\Loader\LoaderInterface::class);
    $this->_stopwatch = m::mock(\Symfony\Component\Stopwatch\Stopwatch::class);
    $this->_globals = m::mock(\Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables::class);
    $this->timedPhpEngine = new \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine($this->_parser, $this->_container, $this->_loader, $this->_stopwatch, $this->_globals);
}

public function testRender0()
{
    $name = m::mock('UntypedParameter_name_');
    $parameters = [];

    // TODO: Your mock expectations here

    $actual = $this->timedPhpEngine->render($name, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
