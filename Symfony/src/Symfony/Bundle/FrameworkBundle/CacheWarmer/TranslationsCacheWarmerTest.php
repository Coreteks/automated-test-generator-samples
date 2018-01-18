<?php

namespace tests\Symfony\Bundle\FrameworkBundle\CacheWarmer;

use Mockery as m;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer;

class TranslationsCacheWarmerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
*/
protected $translationsCacheWarmer;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Psr\Container\ContainerInterface::class);
    $this->translationsCacheWarmer = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->_container);
}

public function testWarmUp0()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->translator) == false (line 41)
    // if ($this->translator instanceof \Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface) == false (line 45)

    $actual = $this->translationsCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp1()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->translator) == false (line 41)
    // if ($this->translator instanceof \Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface) == true (line 45)

    $actual = $this->translationsCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp2()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->translator) == true (line 41)
    // if ($this->translator instanceof \Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface) == false (line 45)

    $actual = $this->translationsCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp3()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->translator) == true (line 41)
    // if ($this->translator instanceof \Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface) == true (line 45)

    $actual = $this->translationsCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsOptional0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationsCacheWarmer->isOptional();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSubscribedServices0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationsCacheWarmer->getSubscribedServices();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
