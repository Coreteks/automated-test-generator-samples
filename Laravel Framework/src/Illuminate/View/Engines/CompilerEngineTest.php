<?php

namespace tests\Illuminate\View\Engines;

use Illuminate\View\Compilers\CompilerInterface;
use Illuminate\View\Engines\CompilerEngine;
use Mockery as m;

class CompilerEngineTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_compiler;
/**
* @var \Illuminate\View\Engines\CompilerEngine
*/
protected $compilerEngine;

public function setUp()
{
    parent::setUp();

    $this->_compiler = m::mock(\Illuminate\View\Compilers\CompilerInterface::class);
    $this->compilerEngine = new \Illuminate\View\Engines\CompilerEngine($this->_compiler);
}

public function testGet0()
{
    $path = m::mock('UntypedParameter_path_');
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compiler->isExpired($path)) == false (line 50)

    $actual = $this->compilerEngine->get($path, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $path = m::mock('UntypedParameter_path_');
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compiler->isExpired($path)) == true (line 50)

    $actual = $this->compilerEngine->get($path, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCompiler0()
{
    // TODO: Your mock expectations here

    $actual = $this->compilerEngine->getCompiler();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
