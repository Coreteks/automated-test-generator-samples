<?php

namespace tests\Symfony\Bridge\Twig;

use Mockery as m;
use Symfony\Bridge\Twig\TwigEngine;
use Symfony\Component\Templating\TemplateNameParserInterface;
use Twig\Environment;

class TwigEngineTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_environment;
/**
* @var \Mockery\MockInterface
*/
protected $_parser;
/**
* @var \Symfony\Bridge\Twig\TwigEngine
*/
protected $twigEngine;

public function setUp()
{
    parent::setUp();

    $this->_environment = m::mock(\Twig\Environment::class);
    $this->_parser = m::mock(\Symfony\Component\Templating\TemplateNameParserInterface::class);
    $this->twigEngine = new \Symfony\Bridge\Twig\TwigEngine($this->_environment, $this->_parser);
}

public function testRender0()
{
    $name = m::mock('UntypedParameter_name_');
    $parameters = [];

    // TODO: Your mock expectations here

    $actual = $this->twigEngine->render($name, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream0()
{
    $name = m::mock('UntypedParameter_name_');
    $parameters = [];

    // TODO: Your mock expectations here

    $actual = $this->twigEngine->stream($name, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExists0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Twig\Template) == false (line 71)
    // if ($loader instanceof \Twig\Loader\ExistsLoaderInterface || method_exists($loader, 'exists')) == false (line 77)

    $actual = $this->twigEngine->exists($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Twig\Template) == false (line 71)
    // if ($loader instanceof \Twig\Loader\ExistsLoaderInterface || method_exists($loader, 'exists')) == false (line 77)

    $actual = $this->twigEngine->exists($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Twig\Template) == false (line 71)
    // if ($loader instanceof \Twig\Loader\ExistsLoaderInterface || method_exists($loader, 'exists')) == false (line 77)

    $actual = $this->twigEngine->exists($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists3()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Twig\Template) == false (line 71)
    // if ($loader instanceof \Twig\Loader\ExistsLoaderInterface || method_exists($loader, 'exists')) == true (line 77)

    $actual = $this->twigEngine->exists($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists4()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Twig\Template) == true (line 71)

    $actual = $this->twigEngine->exists($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupports0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Twig\Template) == false (line 99)

    $actual = $this->twigEngine->supports($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupports1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Twig\Template) == true (line 99)

    $actual = $this->twigEngine->supports($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
