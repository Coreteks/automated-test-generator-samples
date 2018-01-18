<?php

namespace tests\Symfony\Bundle\FrameworkBundle\CacheWarmer;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Templating\TemplateNameParserInterface;

class TemplateFinderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_kernel;
/**
* @var \Mockery\MockInterface
*/
protected $_parser;
/**
* @var mixed
*/
protected $_rootDir = null;
/**
* @var \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder
*/
protected $templateFinder;

public function setUp()
{
    parent::setUp();

    $this->_kernel = m::mock(\Symfony\Component\HttpKernel\KernelInterface::class);
    $this->_parser = m::mock(\Symfony\Component\Templating\TemplateNameParserInterface::class);
    $this->_rootDir = null;
    $this->templateFinder = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($this->_kernel, $this->_parser, $this->_rootDir);
}

public function testFindAllTemplates0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->templates) == false (line 51)

    $actual = $this->templateFinder->findAllTemplates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindAllTemplates1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->templates) == false (line 51)

    $actual = $this->templateFinder->findAllTemplates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindAllTemplates2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->templates) == true (line 51)

    $actual = $this->templateFinder->findAllTemplates();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
