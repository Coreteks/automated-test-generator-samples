<?php

namespace tests\Mockery\Loader;

use Mockery as m;
use Mockery\Loader\RequireLoader;

class RequireLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_path = null;
/**
* @var \Mockery\Loader\RequireLoader
*/
protected $requireLoader;

public function setUp()
{
    parent::setUp();

    $this->_path = null;
    $this->requireLoader = new \Mockery\Loader\RequireLoader($this->_path);
}

public function testLoad0()
{
    $definition = m::mock(\Mockery\Generator\MockDefinition::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (class_exists($definition->getClassName(), false)) == false (line 37)

    $actual = $this->requireLoader->load($definition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $definition = m::mock(\Mockery\Generator\MockDefinition::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (class_exists($definition->getClassName(), false)) == true (line 37)

    $actual = $this->requireLoader->load($definition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
