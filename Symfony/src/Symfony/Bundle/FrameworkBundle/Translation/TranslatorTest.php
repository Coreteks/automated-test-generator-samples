<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Translation;

use Mockery as m;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Translation\Translator;
use Symfony\Component\Translation\Formatter\MessageFormatterInterface;

class TranslatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Mockery\MockInterface
*/
protected $_formatter;
/**
* @var mixed
*/
protected $_defaultLocale = null;
/**
* @var array
*/
protected $_loaderIds = [];
/**
* @var array
*/
protected $_options = [];
/**
* @var \Symfony\Bundle\FrameworkBundle\Translation\Translator
*/
protected $translator;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Psr\Container\ContainerInterface::class);
    $this->_formatter = m::mock(\Symfony\Component\Translation\Formatter\MessageFormatterInterface::class);
    $this->_defaultLocale = null;
    $this->_loaderIds = [];
    $this->_options = [];
    $this->translator = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this->_container, $this->_formatter, $this->_defaultLocale, $this->_loaderIds, $this->_options);
}

public function testWarmUp0()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->options['cache_dir']) == false (line 89)

    $actual = $this->translator->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp1()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->options['cache_dir']) == false (line 89)
    // if (isset($this->catalogues[$locale])) == false (line 96)

    $actual = $this->translator->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp2()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->options['cache_dir']) == false (line 89)
    // if (isset($this->catalogues[$locale])) == true (line 96)

    $actual = $this->translator->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp3()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->options['cache_dir']) == true (line 89)

    $actual = $this->translator->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddResource0()
{
    $format = m::mock('UntypedParameter_format_');
    $resource = m::mock('UntypedParameter_resource_');
    $locale = m::mock('UntypedParameter_locale_');
    $domain = m::mock('UntypedParameter_domain_');

    // TODO: Your mock expectations here

    $actual = $this->translator->addResource($format, $resource, $locale, $domain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
