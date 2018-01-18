<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating\Loader;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader;
use Symfony\Component\Config\FileLocatorInterface;

class FilesystemLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_locator;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
*/
protected $filesystemLoader;

public function setUp()
{
    parent::setUp();

    $this->_locator = m::mock(\Symfony\Component\Config\FileLocatorInterface::class);
    $this->filesystemLoader = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->_locator);
}

/**
 * @expectedException \Exception
 */
public function testLoad0()
{
    $template = m::mock(\Symfony\Component\Templating\TemplateReferenceInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->filesystemLoader->load($template);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $template = m::mock(\Symfony\Component\Templating\TemplateReferenceInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->filesystemLoader->load($template);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    $template = m::mock(\Symfony\Component\Templating\TemplateReferenceInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->filesystemLoader->load($template);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFresh0()
{
    $template = m::mock(\Symfony\Component\Templating\TemplateReferenceInterface::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === ($storage = $this->load($template))) == false (line 52)
    // if (!is_readable((string) $storage)) == false (line 56)

    $actual = $this->filesystemLoader->isFresh($template, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFresh1()
{
    $template = m::mock(\Symfony\Component\Templating\TemplateReferenceInterface::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === ($storage = $this->load($template))) == false (line 52)
    // if (!is_readable((string) $storage)) == true (line 56)

    $actual = $this->filesystemLoader->isFresh($template, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFresh2()
{
    $template = m::mock(\Symfony\Component\Templating\TemplateReferenceInterface::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === ($storage = $this->load($template))) == true (line 52)

    $actual = $this->filesystemLoader->isFresh($template, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
