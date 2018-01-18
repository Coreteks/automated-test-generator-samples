<?php

namespace tests\Symfony\Bundle\FrameworkBundle\CacheWarmer;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinderInterface;
use Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer;
use Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator;

class TemplatePathsCacheWarmerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_finder;
/**
* @var \Mockery\MockInterface
*/
protected $_locator;
/**
* @var \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer
*/
protected $templatePathsCacheWarmer;

public function setUp()
{
    parent::setUp();

    $this->_finder = m::mock(\Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinderInterface::class);
    $this->_locator = m::mock(\Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator::class);
    $this->templatePathsCacheWarmer = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($this->_finder, $this->_locator);
}

public function testWarmUp0()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    $actual = $this->templatePathsCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp1()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    $actual = $this->templatePathsCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsOptional0()
{
    // TODO: Your mock expectations here

    $actual = $this->templatePathsCacheWarmer->isOptional();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
