<?php

namespace tests\Mockery\Loader;

use Mockery as m;
use Mockery\Loader\EvalLoader;

class EvalLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Loader\EvalLoader
*/
protected $evalLoader;

public function setUp()
{
    parent::setUp();

    $this->evalLoader = new \Mockery\Loader\EvalLoader();
}

public function testLoad0()
{
    $definition = m::mock(\Mockery\Generator\MockDefinition::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (class_exists($definition->getClassName(), false)) == false (line 30)

    $actual = $this->evalLoader->load($definition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $definition = m::mock(\Mockery\Generator\MockDefinition::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (class_exists($definition->getClassName(), false)) == true (line 30)

    $actual = $this->evalLoader->load($definition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
