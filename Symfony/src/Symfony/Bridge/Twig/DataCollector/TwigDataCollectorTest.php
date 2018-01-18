<?php

namespace tests\Symfony\Bridge\Twig\DataCollector;

use Mockery as m;
use Symfony\Bridge\Twig\DataCollector\TwigDataCollector;
use Twig\Environment;
use Twig\Profiler\Profile;

class TwigDataCollectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_profile;
/**
* @var \Mockery\MockInterface
*/
protected $_twig;
/**
* @var \Symfony\Bridge\Twig\DataCollector\TwigDataCollector
*/
protected $twigDataCollector;

public function setUp()
{
    parent::setUp();

    $this->_profile = m::mock(\Twig\Profiler\Profile::class);
    $this->_twig = m::mock(\Twig\Environment::class);
    $this->twigDataCollector = new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector($this->_profile, $this->_twig);
}

public function testCollect0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $response = m::mock(\Symfony\Component\HttpFoundation\Response::class);
    $exception = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    $actual = $this->twigDataCollector->collect($request, $response, $exception);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset0()
{
    // TODO: Your mock expectations here

    $actual = $this->twigDataCollector->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLateCollect0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->twig) == false (line 65)

    $actual = $this->twigDataCollector->lateCollect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLateCollect1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->twig) == true (line 65)

    $actual = $this->twigDataCollector->lateCollect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTime0()
{
    // TODO: Your mock expectations here

    $actual = $this->twigDataCollector->getTime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTemplateCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->twigDataCollector->getTemplateCount();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTemplatePaths0()
{
    // TODO: Your mock expectations here

    $actual = $this->twigDataCollector->getTemplatePaths();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTemplates0()
{
    // TODO: Your mock expectations here

    $actual = $this->twigDataCollector->getTemplates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBlockCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->twigDataCollector->getBlockCount();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMacroCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->twigDataCollector->getMacroCount();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHtmlCallGraph0()
{
    // TODO: Your mock expectations here

    $actual = $this->twigDataCollector->getHtmlCallGraph();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProfile0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->profile) == false (line 140)

    $actual = $this->twigDataCollector->getProfile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProfile1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->profile) == true (line 140)

    $actual = $this->twigDataCollector->getProfile();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->twigDataCollector->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
