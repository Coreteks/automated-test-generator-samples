<?php

namespace tests\Illuminate\Container;

use Illuminate\Container\Container;
use Mockery as m;

class ContainerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Container\Container
*/
protected $container;

public function setUp()
{
    parent::setUp();

    $this->container = new \Illuminate\Container\Container();
}

public function testWhen0()
{
    $concrete = m::mock('UntypedParameter_concrete_');

    // TODO: Your mock expectations here

    $actual = $this->container->when($concrete);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBound0()
{
    $abstract = m::mock('UntypedParameter_abstract_');

    // TODO: Your mock expectations here

    $actual = $this->container->bound($abstract);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->container->has($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolved0()
{
    $abstract = m::mock('UntypedParameter_abstract_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isAlias($abstract)) == false (line 174)

    $actual = $this->container->resolved($abstract);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolved1()
{
    $abstract = m::mock('UntypedParameter_abstract_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isAlias($abstract)) == true (line 174)

    $actual = $this->container->resolved($abstract);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsShared0()
{
    $abstract = m::mock('UntypedParameter_abstract_');

    // TODO: Your mock expectations here

    $actual = $this->container->isShared($abstract);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsAlias0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->container->isAlias($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind0()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $concrete = m::mock('UntypedParameter_concrete_');
    $shared = m::mock('UntypedParameter_shared_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($concrete)) == false (line 221)
    // if (!$concrete instanceof \Closure) == false (line 228)
    // if ($this->resolved($abstract)) == false (line 237)

    $actual = $this->container->bind($abstract, $concrete, $shared);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind1()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $concrete = m::mock('UntypedParameter_concrete_');
    $shared = m::mock('UntypedParameter_shared_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($concrete)) == false (line 221)
    // if (!$concrete instanceof \Closure) == false (line 228)
    // if ($this->resolved($abstract)) == true (line 237)

    $actual = $this->container->bind($abstract, $concrete, $shared);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind2()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $concrete = m::mock('UntypedParameter_concrete_');
    $shared = m::mock('UntypedParameter_shared_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($concrete)) == false (line 221)
    // if (!$concrete instanceof \Closure) == true (line 228)
    // if ($this->resolved($abstract)) == false (line 237)

    $actual = $this->container->bind($abstract, $concrete, $shared);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind3()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $concrete = m::mock('UntypedParameter_concrete_');
    $shared = m::mock('UntypedParameter_shared_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($concrete)) == false (line 221)
    // if (!$concrete instanceof \Closure) == true (line 228)
    // if ($this->resolved($abstract)) == true (line 237)

    $actual = $this->container->bind($abstract, $concrete, $shared);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind4()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $concrete = m::mock('UntypedParameter_concrete_');
    $shared = m::mock('UntypedParameter_shared_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($concrete)) == true (line 221)
    // if (!$concrete instanceof \Closure) == false (line 228)
    // if ($this->resolved($abstract)) == false (line 237)

    $actual = $this->container->bind($abstract, $concrete, $shared);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind5()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $concrete = m::mock('UntypedParameter_concrete_');
    $shared = m::mock('UntypedParameter_shared_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($concrete)) == true (line 221)
    // if (!$concrete instanceof \Closure) == false (line 228)
    // if ($this->resolved($abstract)) == true (line 237)

    $actual = $this->container->bind($abstract, $concrete, $shared);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind6()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $concrete = m::mock('UntypedParameter_concrete_');
    $shared = m::mock('UntypedParameter_shared_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($concrete)) == true (line 221)
    // if (!$concrete instanceof \Closure) == true (line 228)
    // if ($this->resolved($abstract)) == false (line 237)

    $actual = $this->container->bind($abstract, $concrete, $shared);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind7()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $concrete = m::mock('UntypedParameter_concrete_');
    $shared = m::mock('UntypedParameter_shared_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($concrete)) == true (line 221)
    // if (!$concrete instanceof \Closure) == true (line 228)
    // if ($this->resolved($abstract)) == true (line 237)

    $actual = $this->container->bind($abstract, $concrete, $shared);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMethodBinding0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    $actual = $this->container->hasMethodBinding($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBindMethod0()
{
    $method = m::mock('UntypedParameter_method_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->container->bindMethod($method, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCallMethodBinding0()
{
    $method = m::mock('UntypedParameter_method_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    $actual = $this->container->callMethodBinding($method, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddContextualBinding0()
{
    $concrete = m::mock('UntypedParameter_concrete_');
    $abstract = m::mock('UntypedParameter_abstract_');
    $implementation = m::mock('UntypedParameter_implementation_');

    // TODO: Your mock expectations here

    $actual = $this->container->addContextualBinding($concrete, $abstract, $implementation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBindIf0()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $concrete = m::mock('UntypedParameter_concrete_');
    $shared = m::mock('UntypedParameter_shared_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->bound($abstract)) == false (line 318)

    $actual = $this->container->bindIf($abstract, $concrete, $shared);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBindIf1()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $concrete = m::mock('UntypedParameter_concrete_');
    $shared = m::mock('UntypedParameter_shared_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->bound($abstract)) == true (line 318)

    $actual = $this->container->bindIf($abstract, $concrete, $shared);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSingleton0()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $concrete = m::mock('UntypedParameter_concrete_');

    // TODO: Your mock expectations here

    $actual = $this->container->singleton($abstract, $concrete);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend0()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $closure = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->instances[$abstract])) == false (line 348)
    // if ($this->resolved($abstract)) == false (line 355)

    $actual = $this->container->extend($abstract, $closure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend1()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $closure = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->instances[$abstract])) == false (line 348)
    // if ($this->resolved($abstract)) == true (line 355)

    $actual = $this->container->extend($abstract, $closure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend2()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $closure = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->instances[$abstract])) == true (line 348)

    $actual = $this->container->extend($abstract, $closure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInstance0()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isBound) == false (line 381)

    $actual = $this->container->instance($abstract, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInstance1()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $instance = m::mock('UntypedParameter_instance_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($isBound) == true (line 381)

    $actual = $this->container->instance($abstract, $instance);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag0()
{
    $abstracts = m::mock('UntypedParameter_abstracts_');
    $tags = m::mock('UntypedParameter_tags_');

    // TODO: Your mock expectations here

    $actual = $this->container->tag($abstracts, $tags);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag1()
{
    $abstracts = m::mock('UntypedParameter_abstracts_');
    $tags = m::mock('UntypedParameter_tags_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->tags[$tag])) == false (line 421)

    $actual = $this->container->tag($abstracts, $tags);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag2()
{
    $abstracts = m::mock('UntypedParameter_abstracts_');
    $tags = m::mock('UntypedParameter_tags_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->tags[$tag])) == false (line 421)

    $actual = $this->container->tag($abstracts, $tags);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag3()
{
    $abstracts = m::mock('UntypedParameter_abstracts_');
    $tags = m::mock('UntypedParameter_tags_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->tags[$tag])) == true (line 421)

    $actual = $this->container->tag($abstracts, $tags);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag4()
{
    $abstracts = m::mock('UntypedParameter_abstracts_');
    $tags = m::mock('UntypedParameter_tags_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->tags[$tag])) == true (line 421)

    $actual = $this->container->tag($abstracts, $tags);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTagged0()
{
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->tags[$tag])) == false (line 441)

    $actual = $this->container->tagged($tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTagged1()
{
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->tags[$tag])) == true (line 441)

    $actual = $this->container->tagged($tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTagged2()
{
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->tags[$tag])) == true (line 441)

    $actual = $this->container->tagged($tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAlias0()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $alias = m::mock('UntypedParameter_alias_');

    // TODO: Your mock expectations here

    $actual = $this->container->alias($abstract, $alias);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRebinding0()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bound($abstract)) == false (line 475)

    $actual = $this->container->rebinding($abstract, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRebinding1()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->bound($abstract)) == true (line 475)

    $actual = $this->container->rebinding($abstract, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRefresh0()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $target = m::mock('UntypedParameter_target_');
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    $actual = $this->container->refresh($abstract, $target, $method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrap0()
{
    $callback = m::mock(\Closure::class);
    $parameters = [];

    // TODO: Your mock expectations here

    $actual = $this->container->wrap($callback, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall0()
{
    $callback = m::mock('UntypedParameter_callback_');
    $parameters = [];
    $defaultMethod = m::mock('UntypedParameter_defaultMethod_');

    // TODO: Your mock expectations here

    $actual = $this->container->call($callback, $parameters, $defaultMethod);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFactory0()
{
    $abstract = m::mock('UntypedParameter_abstract_');

    // TODO: Your mock expectations here

    $actual = $this->container->factory($abstract);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeWith0()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $parameters = [];

    // TODO: Your mock expectations here

    $actual = $this->container->makeWith($abstract, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake0()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $parameters = [];

    // TODO: Your mock expectations here

    $actual = $this->container->make($abstract, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Illuminate\Container\EntryNotFoundException
 */
public function testGet0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->has($id)) == false (line 594)
    // throw new \Illuminate\Container\EntryNotFoundException() -> exception (line 598)

    $actual = $this->container->get($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->has($id)) == true (line 594)

    $actual = $this->container->get($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild0()
{
    $concrete = m::mock('UntypedParameter_concrete_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($concrete instanceof \Closure) == false (line 748)
    // if (!$reflector->isInstantiable()) == false (line 757)
    // if (is_null($constructor)) == false (line 768)

    $actual = $this->container->build($concrete);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild1()
{
    $concrete = m::mock('UntypedParameter_concrete_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($concrete instanceof \Closure) == false (line 748)
    // if (!$reflector->isInstantiable()) == false (line 757)
    // if (is_null($constructor)) == true (line 768)

    $actual = $this->container->build($concrete);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild2()
{
    $concrete = m::mock('UntypedParameter_concrete_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($concrete instanceof \Closure) == false (line 748)
    // if (!$reflector->isInstantiable()) == true (line 757)

    $actual = $this->container->build($concrete);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild3()
{
    $concrete = m::mock('UntypedParameter_concrete_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($concrete instanceof \Closure) == true (line 748)

    $actual = $this->container->build($concrete);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolving0()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($abstract)) == false (line 945)
    // if (is_null($callback) && $abstract instanceof \Closure) == false (line 949)

    $actual = $this->container->resolving($abstract, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolving1()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($abstract)) == false (line 945)
    // if (is_null($callback) && $abstract instanceof \Closure) == true (line 949)

    $actual = $this->container->resolving($abstract, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolving2()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($abstract)) == true (line 945)
    // if (is_null($callback) && $abstract instanceof \Closure) == false (line 949)

    $actual = $this->container->resolving($abstract, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolving3()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($abstract)) == true (line 945)
    // if (is_null($callback) && $abstract instanceof \Closure) == true (line 949)

    $actual = $this->container->resolving($abstract, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfterResolving0()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($abstract)) == false (line 965)
    // if ($abstract instanceof \Closure && is_null($callback)) == false (line 969)

    $actual = $this->container->afterResolving($abstract, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfterResolving1()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($abstract)) == false (line 965)
    // if ($abstract instanceof \Closure && is_null($callback)) == true (line 969)

    $actual = $this->container->afterResolving($abstract, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfterResolving2()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($abstract)) == true (line 965)
    // if ($abstract instanceof \Closure && is_null($callback)) == false (line 969)

    $actual = $this->container->afterResolving($abstract, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfterResolving3()
{
    $abstract = m::mock('UntypedParameter_abstract_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($abstract)) == true (line 965)
    // if ($abstract instanceof \Closure && is_null($callback)) == true (line 969)

    $actual = $this->container->afterResolving($abstract, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBindings0()
{
    // TODO: Your mock expectations here

    $actual = $this->container->getBindings();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAlias0()
{
    $abstract = m::mock('UntypedParameter_abstract_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->aliases[$abstract])) == false (line 1066)
    // if ($this->aliases[$abstract] === $abstract) == false (line 1070)

    $actual = $this->container->getAlias($abstract);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testGetAlias1()
{
    $abstract = m::mock('UntypedParameter_abstract_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->aliases[$abstract])) == false (line 1066)
    // if ($this->aliases[$abstract] === $abstract) == true (line 1070)
    // throw new \LogicException("[{$abstract}] is aliased to itself.") -> exception (line 1071)

    $actual = $this->container->getAlias($abstract);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAlias2()
{
    $abstract = m::mock('UntypedParameter_abstract_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->aliases[$abstract])) == true (line 1066)

    $actual = $this->container->getAlias($abstract);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForgetExtenders0()
{
    $abstract = m::mock('UntypedParameter_abstract_');

    // TODO: Your mock expectations here

    $actual = $this->container->forgetExtenders($abstract);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForgetInstance0()
{
    $abstract = m::mock('UntypedParameter_abstract_');

    // TODO: Your mock expectations here

    $actual = $this->container->forgetInstance($abstract);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForgetInstances0()
{
    // TODO: Your mock expectations here

    $actual = $this->container->forgetInstances();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->container->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInstance0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null(static::$instance)) == false (line 1158)

    $actual = $this->container->getInstance();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInstance1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null(static::$instance)) == true (line 1158)

    $actual = $this->container->getInstance();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetInstance0()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    $actual = $this->container->setInstance($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetExists0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->container->offsetExists($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->container->offsetGet($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->container->offsetSet($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetUnset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->container->offsetUnset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->container->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->container->__set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
