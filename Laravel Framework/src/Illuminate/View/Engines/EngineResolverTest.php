<?php

namespace tests\Illuminate\View\Engines;

use Illuminate\View\Engines\EngineResolver;
use Mockery as m;

class EngineResolverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\View\Engines\EngineResolver
*/
protected $engineResolver;

public function setUp()
{
    parent::setUp();

    $this->engineResolver = new \Illuminate\View\Engines\EngineResolver();
}

public function testRegister0()
{
    $engine = m::mock('UntypedParameter_engine_');
    $resolver = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->engineResolver->register($engine, $resolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testResolve0()
{
    $engine = m::mock('UntypedParameter_engine_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->resolved[$engine])) == false (line 49)
    // if (isset($this->resolvers[$engine])) == false (line 53)
    // throw new \InvalidArgumentException("Engine {$engine} not found.") -> exception (line 57)

    $actual = $this->engineResolver->resolve($engine);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve1()
{
    $engine = m::mock('UntypedParameter_engine_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->resolved[$engine])) == false (line 49)
    // if (isset($this->resolvers[$engine])) == true (line 53)

    $actual = $this->engineResolver->resolve($engine);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve2()
{
    $engine = m::mock('UntypedParameter_engine_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->resolved[$engine])) == true (line 49)

    $actual = $this->engineResolver->resolve($engine);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
