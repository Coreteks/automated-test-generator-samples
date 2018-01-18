<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating\Loader;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator;
use Symfony\Component\Config\FileLocatorInterface;

class TemplateLocatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_locator;
/**
* @var mixed
*/
protected $_cacheDir = null;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
*/
protected $templateLocator;

public function setUp()
{
    parent::setUp();

    $this->_locator = m::mock(\Symfony\Component\Config\FileLocatorInterface::class);
    $this->_cacheDir = null;
    $this->templateLocator = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->_locator, $this->_cacheDir);
}

/**
 * @expectedException \Exception
 */
public function testLocate0()
{
    $template = m::mock('UntypedParameter_template_');
    $currentPath = m::mock('UntypedParameter_currentPath_');
    $first = m::mock('UntypedParameter_first_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$template instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 66)
    // if (isset($this->cacheHits[$key])) == false (line 72)
    // if (isset($this->cache[$key])) == false (line 75)

    $actual = $this->templateLocator->locate($template, $currentPath, $first);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testLocate1()
{
    $template = m::mock('UntypedParameter_template_');
    $currentPath = m::mock('UntypedParameter_currentPath_');
    $first = m::mock('UntypedParameter_first_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$template instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 66)
    // if (isset($this->cacheHits[$key])) == false (line 72)
    // if (isset($this->cache[$key])) == false (line 75)
    // throw new \InvalidArgumentException(sprintf('Unable to find template "%s" : "%s".', $template, $e->getMessage()), 0, $e) -> exception (line 82)

    $actual = $this->templateLocator->locate($template, $currentPath, $first);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLocate2()
{
    $template = m::mock('UntypedParameter_template_');
    $currentPath = m::mock('UntypedParameter_currentPath_');
    $first = m::mock('UntypedParameter_first_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$template instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 66)
    // if (isset($this->cacheHits[$key])) == false (line 72)
    // if (isset($this->cache[$key])) == false (line 75)

    $actual = $this->templateLocator->locate($template, $currentPath, $first);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLocate3()
{
    $template = m::mock('UntypedParameter_template_');
    $currentPath = m::mock('UntypedParameter_currentPath_');
    $first = m::mock('UntypedParameter_first_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$template instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 66)
    // if (isset($this->cacheHits[$key])) == false (line 72)
    // if (isset($this->cache[$key])) == true (line 75)

    $actual = $this->templateLocator->locate($template, $currentPath, $first);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLocate4()
{
    $template = m::mock('UntypedParameter_template_');
    $currentPath = m::mock('UntypedParameter_currentPath_');
    $first = m::mock('UntypedParameter_first_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$template instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 66)
    // if (isset($this->cacheHits[$key])) == true (line 72)

    $actual = $this->templateLocator->locate($template, $currentPath, $first);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testLocate5()
{
    $template = m::mock('UntypedParameter_template_');
    $currentPath = m::mock('UntypedParameter_currentPath_');
    $first = m::mock('UntypedParameter_first_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$template instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == true (line 66)
    // throw new \InvalidArgumentException('The template must be an instance of TemplateReferenceInterface.') -> exception (line 67)

    $actual = $this->templateLocator->locate($template, $currentPath, $first);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
