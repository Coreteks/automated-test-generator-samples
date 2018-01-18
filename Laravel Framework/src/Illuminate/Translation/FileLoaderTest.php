<?php

namespace tests\Illuminate\Translation;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader;
use Mockery as m;

class FileLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var mixed
*/
protected $_path = null;
/**
* @var \Illuminate\Translation\FileLoader
*/
protected $fileLoader;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->_path = null;
    $this->fileLoader = new \Illuminate\Translation\FileLoader($this->_files, $this->_path);
}

public function testLoad0()
{
    $locale = m::mock('UntypedParameter_locale_');
    $group = m::mock('UntypedParameter_group_');
    $namespace = m::mock('UntypedParameter_namespace_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($group == '*' && $namespace == '*') == false (line 62)
    // if (is_null($namespace) || $namespace == '*') == false (line 66)

    $actual = $this->fileLoader->load($locale, $group, $namespace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $locale = m::mock('UntypedParameter_locale_');
    $group = m::mock('UntypedParameter_group_');
    $namespace = m::mock('UntypedParameter_namespace_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($group == '*' && $namespace == '*') == false (line 62)
    // if (is_null($namespace) || $namespace == '*') == true (line 66)

    $actual = $this->fileLoader->load($locale, $group, $namespace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    $locale = m::mock('UntypedParameter_locale_');
    $group = m::mock('UntypedParameter_group_');
    $namespace = m::mock('UntypedParameter_namespace_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($group == '*' && $namespace == '*') == true (line 62)

    $actual = $this->fileLoader->load($locale, $group, $namespace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddNamespace0()
{
    $namespace = m::mock('UntypedParameter_namespace_');
    $hint = m::mock('UntypedParameter_hint_');

    // TODO: Your mock expectations here

    $actual = $this->fileLoader->addNamespace($namespace, $hint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddJsonPath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->fileLoader->addJsonPath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNamespaces0()
{
    // TODO: Your mock expectations here

    $actual = $this->fileLoader->namespaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
