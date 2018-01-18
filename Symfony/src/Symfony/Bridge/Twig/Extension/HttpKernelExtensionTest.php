<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\HttpKernelExtension;

class HttpKernelExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\Extension\HttpKernelExtension
*/
protected $httpKernelExtension;

public function setUp()
{
    parent::setUp();

    $this->httpKernelExtension = new \Symfony\Bridge\Twig\Extension\HttpKernelExtension();
}

public function testGetFunctions0()
{
    // TODO: Your mock expectations here

    $actual = $this->httpKernelExtension->getFunctions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testController0()
{
    $controller = m::mock('UntypedParameter_controller_');
    $attributes = m::mock('UntypedParameter_attributes_');
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    $actual = $this->httpKernelExtension->controller($controller, $attributes, $query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->httpKernelExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
