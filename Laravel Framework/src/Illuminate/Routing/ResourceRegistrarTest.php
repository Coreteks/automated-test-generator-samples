<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\ResourceRegistrar;
use Illuminate\Routing\Router;
use Mockery as m;

class ResourceRegistrarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_router;
/**
* @var \Illuminate\Routing\ResourceRegistrar
*/
protected $resourceRegistrar;

public function setUp()
{
    parent::setUp();

    $this->_router = m::mock(\Illuminate\Routing\Router::class);
    $this->resourceRegistrar = new \Illuminate\Routing\ResourceRegistrar($this->_router);
}

public function testRegister0()
{
    $name = m::mock('UntypedParameter_name_');
    $controller = m::mock('UntypedParameter_controller_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['parameters']) && !isset($this->parameters)) == false (line 75)
    // if (\Illuminate\Support\Str::contains($name, '/')) == false (line 82)

    $actual = $this->resourceRegistrar->register($name, $controller, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister1()
{
    $name = m::mock('UntypedParameter_name_');
    $controller = m::mock('UntypedParameter_controller_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['parameters']) && !isset($this->parameters)) == false (line 75)
    // if (\Illuminate\Support\Str::contains($name, '/')) == false (line 82)

    $actual = $this->resourceRegistrar->register($name, $controller, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister2()
{
    $name = m::mock('UntypedParameter_name_');
    $controller = m::mock('UntypedParameter_controller_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['parameters']) && !isset($this->parameters)) == false (line 75)
    // if (\Illuminate\Support\Str::contains($name, '/')) == true (line 82)

    $actual = $this->resourceRegistrar->register($name, $controller, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister3()
{
    $name = m::mock('UntypedParameter_name_');
    $controller = m::mock('UntypedParameter_controller_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['parameters']) && !isset($this->parameters)) == true (line 75)
    // if (\Illuminate\Support\Str::contains($name, '/')) == false (line 82)

    $actual = $this->resourceRegistrar->register($name, $controller, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister4()
{
    $name = m::mock('UntypedParameter_name_');
    $controller = m::mock('UntypedParameter_controller_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['parameters']) && !isset($this->parameters)) == true (line 75)
    // if (\Illuminate\Support\Str::contains($name, '/')) == false (line 82)

    $actual = $this->resourceRegistrar->register($name, $controller, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister5()
{
    $name = m::mock('UntypedParameter_name_');
    $controller = m::mock('UntypedParameter_controller_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['parameters']) && !isset($this->parameters)) == true (line 75)
    // if (\Illuminate\Support\Str::contains($name, '/')) == true (line 82)

    $actual = $this->resourceRegistrar->register($name, $controller, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResourceUri0()
{
    $resource = m::mock('UntypedParameter_resource_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\Illuminate\Support\Str::contains($resource, '.')) == false (line 292)

    $actual = $this->resourceRegistrar->getResourceUri($resource);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResourceUri1()
{
    $resource = m::mock('UntypedParameter_resource_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\Illuminate\Support\Str::contains($resource, '.')) == true (line 292)

    $actual = $this->resourceRegistrar->getResourceUri($resource);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResourceWildcard0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->parameters[$value])) == false (line 330)
    // if (isset(static::$parameterMap[$value])) == false (line 332)
    // if ($this->parameters === 'singular' || static::$singularParameters) == false (line 334)

    $actual = $this->resourceRegistrar->getResourceWildcard($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResourceWildcard1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->parameters[$value])) == false (line 330)
    // if (isset(static::$parameterMap[$value])) == false (line 332)
    // if ($this->parameters === 'singular' || static::$singularParameters) == true (line 334)

    $actual = $this->resourceRegistrar->getResourceWildcard($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResourceWildcard2()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->parameters[$value])) == false (line 330)
    // if (isset(static::$parameterMap[$value])) == true (line 332)

    $actual = $this->resourceRegistrar->getResourceWildcard($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResourceWildcard3()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->parameters[$value])) == true (line 330)

    $actual = $this->resourceRegistrar->getResourceWildcard($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSingularParameters0()
{
    $singular = m::mock('UntypedParameter_singular_');

    // TODO: Your mock expectations here

    $actual = $this->resourceRegistrar->singularParameters($singular);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetParameters0()
{
    // TODO: Your mock expectations here

    $actual = $this->resourceRegistrar->getParameters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetParameters0()
{
    $parameters = [];

    // TODO: Your mock expectations here

    $actual = $this->resourceRegistrar->setParameters($parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerbs0()
{
    $verbs = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($verbs)) == false (line 434)

    $actual = $this->resourceRegistrar->verbs($verbs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerbs1()
{
    $verbs = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($verbs)) == true (line 434)

    $actual = $this->resourceRegistrar->verbs($verbs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
