<?php

namespace tests\Illuminate\View;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Factory;
use Illuminate\View\ViewFinderInterface;
use Mockery as m;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_engines;
/**
* @var \Mockery\MockInterface
*/
protected $_finder;
/**
* @var \Mockery\MockInterface
*/
protected $_events;
/**
* @var \Illuminate\View\Factory
*/
protected $factory;

public function setUp()
{
    parent::setUp();

    $this->_engines = m::mock(\Illuminate\View\Engines\EngineResolver::class);
    $this->_finder = m::mock(\Illuminate\View\ViewFinderInterface::class);
    $this->_events = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);
    $this->factory = new \Illuminate\View\Factory($this->_engines, $this->_finder, $this->_events);
}

public function testFile0()
{
    $path = m::mock('UntypedParameter_path_');
    $data = m::mock('UntypedParameter_data_');
    $mergeData = m::mock('UntypedParameter_mergeData_');

    // TODO: Your mock expectations here

    $actual = $this->factory->file($path, $data, $mergeData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = m::mock('UntypedParameter_data_');
    $mergeData = m::mock('UntypedParameter_mergeData_');

    // TODO: Your mock expectations here

    $actual = $this->factory->make($view, $data, $mergeData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirst0()
{
    $views = [];
    $data = m::mock('UntypedParameter_data_');
    $mergeData = m::mock('UntypedParameter_mergeData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$view) == false (line 155)

    $actual = $this->factory->first($views, $data, $mergeData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testFirst1()
{
    $views = [];
    $data = m::mock('UntypedParameter_data_');
    $mergeData = m::mock('UntypedParameter_mergeData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$view) == true (line 155)
    // throw new \InvalidArgumentException('None of the views in the given array exist.') -> exception (line 156)

    $actual = $this->factory->first($views, $data, $mergeData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRenderWhen0()
{
    $condition = m::mock('UntypedParameter_condition_');
    $view = m::mock('UntypedParameter_view_');
    $data = m::mock('UntypedParameter_data_');
    $mergeData = m::mock('UntypedParameter_mergeData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$condition) == false (line 173)

    $actual = $this->factory->renderWhen($condition, $view, $data, $mergeData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRenderWhen1()
{
    $condition = m::mock('UntypedParameter_condition_');
    $view = m::mock('UntypedParameter_view_');
    $data = m::mock('UntypedParameter_data_');
    $mergeData = m::mock('UntypedParameter_mergeData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$condition) == true (line 173)

    $actual = $this->factory->renderWhen($condition, $view, $data, $mergeData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRenderEach0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = m::mock('UntypedParameter_data_');
    $iterator = m::mock('UntypedParameter_iterator_');
    $empty = m::mock('UntypedParameter_empty_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($data) > 0) == false (line 196)

    $actual = $this->factory->renderEach($view, $data, $iterator, $empty);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRenderEach1()
{
    $view = m::mock('UntypedParameter_view_');
    $data = m::mock('UntypedParameter_data_');
    $iterator = m::mock('UntypedParameter_iterator_');
    $empty = m::mock('UntypedParameter_empty_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($data) > 0) == true (line 196)

    $actual = $this->factory->renderEach($view, $data, $iterator, $empty);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRenderEach2()
{
    $view = m::mock('UntypedParameter_view_');
    $data = m::mock('UntypedParameter_data_');
    $iterator = m::mock('UntypedParameter_iterator_');
    $empty = m::mock('UntypedParameter_empty_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($data) > 0) == true (line 196)

    $actual = $this->factory->renderEach($view, $data, $iterator, $empty);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExists0()
{
    $view = m::mock('UntypedParameter_view_');

    // TODO: Your mock expectations here

    $actual = $this->factory->exists($view);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists1()
{
    $view = m::mock('UntypedParameter_view_');

    // TODO: Your mock expectations here

    $actual = $this->factory->exists($view);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists2()
{
    $view = m::mock('UntypedParameter_view_');

    // TODO: Your mock expectations here

    $actual = $this->factory->exists($view);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEngineFromPath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($extension = $this->getExtension($path))) == false (line 278)

    $actual = $this->factory->getEngineFromPath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGetEngineFromPath1()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($extension = $this->getExtension($path))) == true (line 278)
    // throw new \InvalidArgumentException("Unrecognized extension in file: {$path}") -> exception (line 279)

    $actual = $this->factory->getEngineFromPath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShare0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->factory->share($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShare1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->factory->share($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrementRender0()
{
    // TODO: Your mock expectations here

    $actual = $this->factory->incrementRender();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrementRender0()
{
    // TODO: Your mock expectations here

    $actual = $this->factory->decrementRender();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDoneRendering0()
{
    // TODO: Your mock expectations here

    $actual = $this->factory->doneRendering();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddLocation0()
{
    $location = m::mock('UntypedParameter_location_');

    // TODO: Your mock expectations here

    $actual = $this->factory->addLocation($location);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddNamespace0()
{
    $namespace = m::mock('UntypedParameter_namespace_');
    $hints = m::mock('UntypedParameter_hints_');

    // TODO: Your mock expectations here

    $actual = $this->factory->addNamespace($namespace, $hints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrependNamespace0()
{
    $namespace = m::mock('UntypedParameter_namespace_');
    $hints = m::mock('UntypedParameter_hints_');

    // TODO: Your mock expectations here

    $actual = $this->factory->prependNamespace($namespace, $hints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplaceNamespace0()
{
    $namespace = m::mock('UntypedParameter_namespace_');
    $hints = m::mock('UntypedParameter_hints_');

    // TODO: Your mock expectations here

    $actual = $this->factory->replaceNamespace($namespace, $hints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddExtension0()
{
    $extension = m::mock('UntypedParameter_extension_');
    $engine = m::mock('UntypedParameter_engine_');
    $resolver = m::mock('UntypedParameter_resolver_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($resolver)) == false (line 415)

    $actual = $this->factory->addExtension($extension, $engine, $resolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddExtension1()
{
    $extension = m::mock('UntypedParameter_extension_');
    $engine = m::mock('UntypedParameter_engine_');
    $resolver = m::mock('UntypedParameter_resolver_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($resolver)) == true (line 415)

    $actual = $this->factory->addExtension($extension, $engine, $resolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlushState0()
{
    // TODO: Your mock expectations here

    $actual = $this->factory->flushState();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlushStateIfDoneRendering0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->doneRendering()) == false (line 444)

    $actual = $this->factory->flushStateIfDoneRendering();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlushStateIfDoneRendering1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->doneRendering()) == true (line 444)

    $actual = $this->factory->flushStateIfDoneRendering();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExtensions0()
{
    // TODO: Your mock expectations here

    $actual = $this->factory->getExtensions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEngineResolver0()
{
    // TODO: Your mock expectations here

    $actual = $this->factory->getEngineResolver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFinder0()
{
    // TODO: Your mock expectations here

    $actual = $this->factory->getFinder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFinder0()
{
    $finder = m::mock(\Illuminate\View\ViewFinderInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->factory->setFinder($finder);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlushFinderCache0()
{
    // TODO: Your mock expectations here

    $actual = $this->factory->flushFinderCache();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDispatcher0()
{
    // TODO: Your mock expectations here

    $actual = $this->factory->getDispatcher();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDispatcher0()
{
    $events = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);

    // TODO: Your mock expectations here

    $actual = $this->factory->setDispatcher($events);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetContainer0()
{
    // TODO: Your mock expectations here

    $actual = $this->factory->getContainer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetContainer0()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    $actual = $this->factory->setContainer($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShared0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->factory->shared($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShared0()
{
    // TODO: Your mock expectations here

    $actual = $this->factory->getShared();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
