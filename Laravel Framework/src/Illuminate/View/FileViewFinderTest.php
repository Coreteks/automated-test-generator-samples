<?php

namespace tests\Illuminate\View;

use Illuminate\Filesystem\Filesystem;
use Illuminate\View\FileViewFinder;
use Mockery as m;

class FileViewFinderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var array
*/
protected $_paths = [];
/**
* @var array
*/
protected $_extensions = [];
/**
* @var \Illuminate\View\FileViewFinder
*/
protected $fileViewFinder;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->_paths = [];
    $this->_extensions = [];
    $this->fileViewFinder = new \Illuminate\View\FileViewFinder($this->_files, $this->_paths, $this->_extensions);
}

public function testFind0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->views[$name])) == false (line 71)
    // if ($this->hasHintInformation($name = trim($name))) == false (line 75)

    $actual = $this->fileViewFinder->find($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->views[$name])) == false (line 71)
    // if ($this->hasHintInformation($name = trim($name))) == true (line 75)

    $actual = $this->fileViewFinder->find($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->views[$name])) == true (line 71)

    $actual = $this->fileViewFinder->find($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddLocation0()
{
    $location = m::mock('UntypedParameter_location_');

    // TODO: Your mock expectations here

    $actual = $this->fileViewFinder->addLocation($location);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrependLocation0()
{
    $location = m::mock('UntypedParameter_location_');

    // TODO: Your mock expectations here

    $actual = $this->fileViewFinder->prependLocation($location);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddNamespace0()
{
    $namespace = m::mock('UntypedParameter_namespace_');
    $hints = m::mock('UntypedParameter_hints_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->hints[$namespace])) == false (line 186)

    $actual = $this->fileViewFinder->addNamespace($namespace, $hints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddNamespace1()
{
    $namespace = m::mock('UntypedParameter_namespace_');
    $hints = m::mock('UntypedParameter_hints_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->hints[$namespace])) == true (line 186)

    $actual = $this->fileViewFinder->addNamespace($namespace, $hints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrependNamespace0()
{
    $namespace = m::mock('UntypedParameter_namespace_');
    $hints = m::mock('UntypedParameter_hints_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->hints[$namespace])) == false (line 204)

    $actual = $this->fileViewFinder->prependNamespace($namespace, $hints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrependNamespace1()
{
    $namespace = m::mock('UntypedParameter_namespace_');
    $hints = m::mock('UntypedParameter_hints_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->hints[$namespace])) == true (line 204)

    $actual = $this->fileViewFinder->prependNamespace($namespace, $hints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplaceNamespace0()
{
    $namespace = m::mock('UntypedParameter_namespace_');
    $hints = m::mock('UntypedParameter_hints_');

    // TODO: Your mock expectations here

    $actual = $this->fileViewFinder->replaceNamespace($namespace, $hints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddExtension0()
{
    $extension = m::mock('UntypedParameter_extension_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($index = array_search($extension, $this->extensions)) !== false) == false (line 231)

    $actual = $this->fileViewFinder->addExtension($extension);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddExtension1()
{
    $extension = m::mock('UntypedParameter_extension_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($index = array_search($extension, $this->extensions)) !== false) == true (line 231)

    $actual = $this->fileViewFinder->addExtension($extension);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasHintInformation0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->fileViewFinder->hasHintInformation($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->fileViewFinder->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilesystem0()
{
    // TODO: Your mock expectations here

    $actual = $this->fileViewFinder->getFilesystem();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPaths0()
{
    // TODO: Your mock expectations here

    $actual = $this->fileViewFinder->getPaths();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHints0()
{
    // TODO: Your mock expectations here

    $actual = $this->fileViewFinder->getHints();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExtensions0()
{
    // TODO: Your mock expectations here

    $actual = $this->fileViewFinder->getExtensions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
