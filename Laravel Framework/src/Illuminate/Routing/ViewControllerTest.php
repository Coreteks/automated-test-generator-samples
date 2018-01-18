<?php

namespace tests\Illuminate\Routing;

use Illuminate\Contracts\View\Factory;
use Illuminate\Routing\ViewController;
use Mockery as m;

class ViewControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_view;
/**
* @var \Illuminate\Routing\ViewController
*/
protected $viewController;

public function setUp()
{
    parent::setUp();

    $this->_view = m::mock(\Illuminate\Contracts\View\Factory::class);
    $this->viewController = new \Illuminate\Routing\ViewController($this->_view);
}

public function test__invoke0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->viewController->__invoke($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
