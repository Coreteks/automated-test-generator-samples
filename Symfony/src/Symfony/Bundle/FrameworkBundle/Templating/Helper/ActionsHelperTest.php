<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating\Helper;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper;
use Symfony\Component\HttpKernel\Fragment\FragmentHandler;

class ActionsHelperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_handler;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper
*/
protected $actionsHelper;

public function setUp()
{
    parent::setUp();

    $this->_handler = m::mock(\Symfony\Component\HttpKernel\Fragment\FragmentHandler::class);
    $this->actionsHelper = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->_handler);
}

public function testRender0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->actionsHelper->render($uri, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testController0()
{
    $controller = m::mock('UntypedParameter_controller_');
    $attributes = m::mock('UntypedParameter_attributes_');
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    $actual = $this->actionsHelper->controller($controller, $attributes, $query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->actionsHelper->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
