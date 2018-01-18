<?php

namespace tests\Illuminate\Foundation;

use Illuminate\Foundation\AliasLoader;
use Mockery as m;

class AliasLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_aliases = null;
/**
* @var \Illuminate\Foundation\AliasLoader
*/
protected $aliasLoader;

public function setUp()
{
    parent::setUp();

    $this->_aliases = null;
    $this->aliasLoader = new \Illuminate\Foundation\AliasLoader($this->_aliases);
}

public function testGetInstance0()
{
    $aliases = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null(static::$instance)) == false (line 54)

    $actual = $this->aliasLoader->getInstance($aliases);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInstance1()
{
    $aliases = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null(static::$instance)) == true (line 54)

    $actual = $this->aliasLoader->getInstance($aliases);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad0()
{
    $alias = m::mock('UntypedParameter_alias_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::$facadeNamespace && strpos($alias, static::$facadeNamespace) === 0) == false (line 73)
    // if (isset($this->aliases[$alias])) == false (line 79)

    $actual = $this->aliasLoader->load($alias);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $alias = m::mock('UntypedParameter_alias_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::$facadeNamespace && strpos($alias, static::$facadeNamespace) === 0) == false (line 73)
    // if (isset($this->aliases[$alias])) == true (line 79)

    $actual = $this->aliasLoader->load($alias);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    $alias = m::mock('UntypedParameter_alias_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::$facadeNamespace && strpos($alias, static::$facadeNamespace) === 0) == true (line 73)

    $actual = $this->aliasLoader->load($alias);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAlias0()
{
    $class = m::mock('UntypedParameter_class_');
    $alias = m::mock('UntypedParameter_alias_');

    // TODO: Your mock expectations here

    $actual = $this->aliasLoader->alias($class, $alias);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->registered) == false (line 153)

    $actual = $this->aliasLoader->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->registered) == true (line 153)

    $actual = $this->aliasLoader->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAliases0()
{
    // TODO: Your mock expectations here

    $actual = $this->aliasLoader->getAliases();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetAliases0()
{
    $aliases = [];

    // TODO: Your mock expectations here

    $actual = $this->aliasLoader->setAliases($aliases);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsRegistered0()
{
    // TODO: Your mock expectations here

    $actual = $this->aliasLoader->isRegistered();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRegistered0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->aliasLoader->setRegistered($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFacadeNamespace0()
{
    $namespace = m::mock('UntypedParameter_namespace_');

    // TODO: Your mock expectations here

    $actual = $this->aliasLoader->setFacadeNamespace($namespace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetInstance0()
{
    $loader = m::mock('UntypedParameter_loader_');

    // TODO: Your mock expectations here

    $actual = $this->aliasLoader->setInstance($loader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
