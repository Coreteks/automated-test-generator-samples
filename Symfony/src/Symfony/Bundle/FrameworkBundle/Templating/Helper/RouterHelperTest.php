<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating\Helper;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class RouterHelperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_router;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper
*/
protected $routerHelper;

public function setUp()
{
    parent::setUp();

    $this->_router = m::mock(\Symfony\Component\Routing\Generator\UrlGeneratorInterface::class);
    $this->routerHelper = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->_router);
}

public function testPath0()
{
    $name = m::mock('UntypedParameter_name_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $relative = m::mock('UntypedParameter_relative_');

    // TODO: Your mock expectations here

    $actual = $this->routerHelper->path($name, $parameters, $relative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrl0()
{
    $name = m::mock('UntypedParameter_name_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $schemeRelative = m::mock('UntypedParameter_schemeRelative_');

    // TODO: Your mock expectations here

    $actual = $this->routerHelper->url($name, $parameters, $schemeRelative);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->routerHelper->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
