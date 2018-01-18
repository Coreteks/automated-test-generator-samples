<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Routing;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser;
use Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader;
use Symfony\Component\Config\Loader\LoaderResolverInterface;

class DelegatingLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_parser;
/**
* @var \Mockery\MockInterface
*/
protected $_resolver;
/**
* @var \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
*/
protected $delegatingLoader;

public function setUp()
{
    parent::setUp();

    $this->_parser = m::mock(\Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser::class);
    $this->_resolver = m::mock(\Symfony\Component\Config\Loader\LoaderResolverInterface::class);
    $this->delegatingLoader = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->_parser, $this->_resolver);
}

/**
 * @expectedException \Exception
 */
public function testLoad0()
{
    $resource = m::mock('UntypedParameter_resource_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loading) == false (line 48)

    $actual = $this->delegatingLoader->load($resource, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $resource = m::mock('UntypedParameter_resource_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loading) == false (line 48)

    $actual = $this->delegatingLoader->load($resource, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad2()
{
    $resource = m::mock('UntypedParameter_resource_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loading) == false (line 48)
    // if (!is_string($controller = $route->getDefault('_controller')) || !$controller) == false (line 76)

    $actual = $this->delegatingLoader->load($resource, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad3()
{
    $resource = m::mock('UntypedParameter_resource_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loading) == false (line 48)
    // if (!is_string($controller = $route->getDefault('_controller')) || !$controller) == false (line 76)

    $actual = $this->delegatingLoader->load($resource, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad4()
{
    $resource = m::mock('UntypedParameter_resource_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loading) == false (line 48)
    // if (!is_string($controller = $route->getDefault('_controller')) || !$controller) == false (line 76)

    $actual = $this->delegatingLoader->load($resource, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad5()
{
    $resource = m::mock('UntypedParameter_resource_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loading) == false (line 48)
    // if (!is_string($controller = $route->getDefault('_controller')) || !$controller) == true (line 76)

    $actual = $this->delegatingLoader->load($resource, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad6()
{
    $resource = m::mock('UntypedParameter_resource_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loading) == false (line 48)

    $actual = $this->delegatingLoader->load($resource, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad7()
{
    $resource = m::mock('UntypedParameter_resource_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loading) == false (line 48)

    $actual = $this->delegatingLoader->load($resource, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testLoad8()
{
    $resource = m::mock('UntypedParameter_resource_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loading) == false (line 48)
    // if (!is_string($controller = $route->getDefault('_controller')) || !$controller) == false (line 76)

    $actual = $this->delegatingLoader->load($resource, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad9()
{
    $resource = m::mock('UntypedParameter_resource_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loading) == false (line 48)
    // if (!is_string($controller = $route->getDefault('_controller')) || !$controller) == false (line 76)

    $actual = $this->delegatingLoader->load($resource, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad10()
{
    $resource = m::mock('UntypedParameter_resource_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loading) == false (line 48)
    // if (!is_string($controller = $route->getDefault('_controller')) || !$controller) == false (line 76)

    $actual = $this->delegatingLoader->load($resource, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad11()
{
    $resource = m::mock('UntypedParameter_resource_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loading) == false (line 48)
    // if (!is_string($controller = $route->getDefault('_controller')) || !$controller) == true (line 76)

    $actual = $this->delegatingLoader->load($resource, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Config\Exception\FileLoaderLoadException
 */
public function testLoad12()
{
    $resource = m::mock('UntypedParameter_resource_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loading) == true (line 48)
    // throw new \Symfony\Component\Config\Exception\FileLoaderLoadException($resource, null, null, null, $type) -> exception (line 65)

    $actual = $this->delegatingLoader->load($resource, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
