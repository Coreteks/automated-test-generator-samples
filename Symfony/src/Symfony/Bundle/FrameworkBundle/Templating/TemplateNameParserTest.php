<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser;
use Symfony\Component\HttpKernel\KernelInterface;

class TemplateNameParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_kernel;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
*/
protected $templateNameParser;

public function setUp()
{
    parent::setUp();

    $this->_kernel = m::mock(\Symfony\Component\HttpKernel\KernelInterface::class);
    $this->templateNameParser = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->_kernel);
}

public function testParse0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 40)
    // if (isset($this->cache[$name])) == false (line 42)
    // if (false !== strpos($name, '..')) == false (line 49)
    // if (!preg_match('/^(?:([^:]*):([^:]*):)?(.+)\\.([^\\.]+)\\.([^\\.]+)$/', $name, $matches) || 0 === strpos($name, '@')) == false (line 53)
    // if ($template->get('bundle')) == false (line 59)

    $actual = $this->templateNameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testParse1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 40)
    // if (isset($this->cache[$name])) == false (line 42)
    // if (false !== strpos($name, '..')) == false (line 49)
    // if (!preg_match('/^(?:([^:]*):([^:]*):)?(.+)\\.([^\\.]+)\\.([^\\.]+)$/', $name, $matches) || 0 === strpos($name, '@')) == false (line 53)
    // if ($template->get('bundle')) == true (line 59)

    $actual = $this->templateNameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testParse2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 40)
    // if (isset($this->cache[$name])) == false (line 42)
    // if (false !== strpos($name, '..')) == false (line 49)
    // if (!preg_match('/^(?:([^:]*):([^:]*):)?(.+)\\.([^\\.]+)\\.([^\\.]+)$/', $name, $matches) || 0 === strpos($name, '@')) == false (line 53)
    // if ($template->get('bundle')) == true (line 59)
    // throw new \InvalidArgumentException(sprintf('Template name "%s" is not valid.', $name), 0, $e) -> exception (line 63)

    $actual = $this->templateNameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse3()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 40)
    // if (isset($this->cache[$name])) == false (line 42)
    // if (false !== strpos($name, '..')) == false (line 49)
    // if (!preg_match('/^(?:([^:]*):([^:]*):)?(.+)\\.([^\\.]+)\\.([^\\.]+)$/', $name, $matches) || 0 === strpos($name, '@')) == false (line 53)
    // if ($template->get('bundle')) == true (line 59)

    $actual = $this->templateNameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse4()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 40)
    // if (isset($this->cache[$name])) == false (line 42)
    // if (false !== strpos($name, '..')) == false (line 49)
    // if (!preg_match('/^(?:([^:]*):([^:]*):)?(.+)\\.([^\\.]+)\\.([^\\.]+)$/', $name, $matches) || 0 === strpos($name, '@')) == true (line 53)

    $actual = $this->templateNameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testParse5()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 40)
    // if (isset($this->cache[$name])) == false (line 42)
    // if (false !== strpos($name, '..')) == true (line 49)
    // throw new \RuntimeException(sprintf('Template name "%s" contains invalid characters.', $name)) -> exception (line 50)

    $actual = $this->templateNameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse6()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 40)
    // if (isset($this->cache[$name])) == true (line 42)

    $actual = $this->templateNameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse7()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == true (line 40)

    $actual = $this->templateNameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
