<?php

namespace tests\Symfony\Bridge\Twig\Form;

use Mockery as m;
use Symfony\Bridge\Twig\Form\TwigRendererEngine;
use Twig\Environment;

class TwigRendererEngineTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_defaultThemes = [];
/**
* @var \Mockery\MockInterface
*/
protected $_environment;
/**
* @var \Symfony\Bridge\Twig\Form\TwigRendererEngine
*/
protected $twigRendererEngine;

public function setUp()
{
    parent::setUp();

    $this->_defaultThemes = [];
    $this->_environment = m::mock(\Twig\Environment::class);
    $this->twigRendererEngine = new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->_defaultThemes, $this->_environment);
}

public function testRenderBlock0()
{
    $view = m::mock(\Symfony\Component\Form\FormView::class);
    $resource = m::mock('UntypedParameter_resource_');
    $blockName = m::mock('UntypedParameter_blockName_');
    $variables = [];

    // TODO: Your mock expectations here

    $actual = $this->twigRendererEngine->renderBlock($view, $resource, $blockName, $variables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
