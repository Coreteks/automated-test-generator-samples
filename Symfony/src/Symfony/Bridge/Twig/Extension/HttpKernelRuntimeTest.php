<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\HttpKernelRuntime;
use Symfony\Component\HttpKernel\Fragment\FragmentHandler;

class HttpKernelRuntimeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_handler;
/**
* @var \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
*/
protected $httpKernelRuntime;

public function setUp()
{
    parent::setUp();

    $this->_handler = m::mock(\Symfony\Component\HttpKernel\Fragment\FragmentHandler::class);
    $this->httpKernelRuntime = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime($this->_handler);
}

public function testRenderFragment0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->httpKernelRuntime->renderFragment($uri, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRenderFragmentStrategy0()
{
    $strategy = m::mock('UntypedParameter_strategy_');
    $uri = m::mock('UntypedParameter_uri_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->httpKernelRuntime->renderFragmentStrategy($strategy, $uri, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
