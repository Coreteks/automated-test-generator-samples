<?php

namespace tests\Illuminate\Translation;

use Illuminate\Translation\ArrayLoader;
use Mockery as m;

class ArrayLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Translation\ArrayLoader
*/
protected $arrayLoader;

public function setUp()
{
    parent::setUp();

    $this->arrayLoader = new \Illuminate\Translation\ArrayLoader();
}

public function testLoad0()
{
    $locale = m::mock('UntypedParameter_locale_');
    $group = m::mock('UntypedParameter_group_');
    $namespace = m::mock('UntypedParameter_namespace_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->messages[$namespace][$locale][$group])) == false (line 28)

    $actual = $this->arrayLoader->load($locale, $group, $namespace);
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
    // if (isset($this->messages[$namespace][$locale][$group])) == true (line 28)

    $actual = $this->arrayLoader->load($locale, $group, $namespace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddNamespace0()
{
    $namespace = m::mock('UntypedParameter_namespace_');
    $hint = m::mock('UntypedParameter_hint_');

    // TODO: Your mock expectations here

    $actual = $this->arrayLoader->addNamespace($namespace, $hint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddJsonPath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->arrayLoader->addJsonPath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddMessages0()
{
    $locale = m::mock('UntypedParameter_locale_');
    $group = m::mock('UntypedParameter_group_');
    $messages = [];
    $namespace = m::mock('UntypedParameter_namespace_');

    // TODO: Your mock expectations here

    $actual = $this->arrayLoader->addMessages($locale, $group, $messages, $namespace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNamespaces0()
{
    // TODO: Your mock expectations here

    $actual = $this->arrayLoader->namespaces();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
