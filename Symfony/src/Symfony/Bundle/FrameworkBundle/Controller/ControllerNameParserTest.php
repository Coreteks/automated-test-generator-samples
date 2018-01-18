<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Controller;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser;
use Symfony\Component\HttpKernel\KernelInterface;

class ControllerNameParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_kernel;
/**
* @var \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
*/
protected $controllerNameParser;

public function setUp()
{
    parent::setUp();

    $this->_kernel = m::mock(\Symfony\Component\HttpKernel\KernelInterface::class);
    $this->controllerNameParser = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->_kernel);
}

/**
 * @expectedException \Exception
 */
public function testParse0()
{
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (3 !== count($parts) || in_array('', $parts, true)) == false (line 45)

    $actual = $this->controllerNameParser->parse($controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testParse1()
{
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (3 !== count($parts) || in_array('', $parts, true)) == false (line 45)
    // if ($alternative = $this->findAlternative($bundleName)) == false (line 63)
    // throw new \InvalidArgumentException($message, 0, $e) -> exception (line 67)

    $actual = $this->controllerNameParser->parse($controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testParse2()
{
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (3 !== count($parts) || in_array('', $parts, true)) == false (line 45)
    // if ($alternative = $this->findAlternative($bundleName)) == true (line 63)
    // throw new \InvalidArgumentException($message, 0, $e) -> exception (line 67)

    $actual = $this->controllerNameParser->parse($controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testParse3()
{
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (3 !== count($parts) || in_array('', $parts, true)) == false (line 45)
    // if (class_exists($try)) == false (line 71)
    // throw new \InvalidArgumentException(sprintf('The _controller value "%s:%s:%s" maps to a "%s" class, but this class was not found. Create this class or check the spelling of the class and its namespace.', $bundleName, $controller, $action, $try)) -> exception (line 75)

    $actual = $this->controllerNameParser->parse($controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse4()
{
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (3 !== count($parts) || in_array('', $parts, true)) == false (line 45)
    // if (class_exists($try)) == true (line 71)

    $actual = $this->controllerNameParser->parse($controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testParse5()
{
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (3 !== count($parts) || in_array('', $parts, true)) == true (line 45)
    // throw new \InvalidArgumentException(sprintf('The "%s" controller is not a valid "a:b:c" controller string.', $controller)) -> exception (line 46)

    $actual = $this->controllerNameParser->parse($controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testBuild0()
{
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 === preg_match('#^(.*?\\\\Controller\\\\(.+)Controller)::(.+)Action$#', $controller, $match)) == false (line 89)
    // throw new \InvalidArgumentException(sprintf('Unable to find a bundle that defines controller "%s".', $controller)) -> exception (line 104)

    $actual = $this->controllerNameParser->build($controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild1()
{
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 === preg_match('#^(.*?\\\\Controller\\\\(.+)Controller)::(.+)Action$#', $controller, $match)) == false (line 89)
    // if (0 !== strpos($className, $bundle->getNamespace())) == false (line 97)

    $actual = $this->controllerNameParser->build($controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testBuild2()
{
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 === preg_match('#^(.*?\\\\Controller\\\\(.+)Controller)::(.+)Action$#', $controller, $match)) == false (line 89)
    // if (0 !== strpos($className, $bundle->getNamespace())) == true (line 97)
    // throw new \InvalidArgumentException(sprintf('Unable to find a bundle that defines controller "%s".', $controller)) -> exception (line 104)

    $actual = $this->controllerNameParser->build($controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testBuild3()
{
    $controller = m::mock('UntypedParameter_controller_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 === preg_match('#^(.*?\\\\Controller\\\\(.+)Controller)::(.+)Action$#', $controller, $match)) == true (line 89)
    // throw new \InvalidArgumentException(sprintf('The "%s" controller is not a valid "class::method" string.', $controller)) -> exception (line 90)

    $actual = $this->controllerNameParser->build($controller);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
