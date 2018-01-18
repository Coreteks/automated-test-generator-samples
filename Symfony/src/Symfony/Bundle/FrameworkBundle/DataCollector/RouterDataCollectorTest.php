<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DataCollector;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector;

class RouterDataCollectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
*/
protected $routerDataCollector;

public function setUp()
{
    parent::setUp();

    $this->routerDataCollector = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
}

public function testGuessRoute0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($controller)) == false (line 27)
    // if ($controller instanceof \Symfony\Bundle\FrameworkBundle\Controller\RedirectController) == false (line 31)

    $actual = $this->routerDataCollector->guessRoute($request, $controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessRoute1()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($controller)) == false (line 27)
    // if ($controller instanceof \Symfony\Bundle\FrameworkBundle\Controller\RedirectController) == true (line 31)

    $actual = $this->routerDataCollector->guessRoute($request, $controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessRoute2()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($controller)) == true (line 27)
    // if ($controller instanceof \Symfony\Bundle\FrameworkBundle\Controller\RedirectController) == false (line 31)

    $actual = $this->routerDataCollector->guessRoute($request, $controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessRoute3()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($controller)) == true (line 27)
    // if ($controller instanceof \Symfony\Bundle\FrameworkBundle\Controller\RedirectController) == true (line 31)

    $actual = $this->routerDataCollector->guessRoute($request, $controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
