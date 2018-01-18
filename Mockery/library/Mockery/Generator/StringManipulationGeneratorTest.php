<?php

namespace tests\Mockery\Generator;

use Mockery as m;
use Mockery\Generator\StringManipulationGenerator;

class StringManipulationGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_passes = [];
/**
* @var \Mockery\Generator\StringManipulationGenerator
*/
protected $stringManipulationGenerator;

public function setUp()
{
    parent::setUp();

    $this->_passes = [];
    $this->stringManipulationGenerator = new \Mockery\Generator\StringManipulationGenerator($this->_passes);
}

public function testWithDefaultPasses0()
{
    // TODO: Your mock expectations here

    $actual = $this->stringManipulationGenerator->withDefaultPasses();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate0()
{
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    $actual = $this->stringManipulationGenerator->generate($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1()
{
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    $actual = $this->stringManipulationGenerator->generate($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddPass0()
{
    $pass = m::mock(\Mockery\Generator\StringManipulation\Pass\Pass::class);

    // TODO: Your mock expectations here

    $actual = $this->stringManipulationGenerator->addPass($pass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
