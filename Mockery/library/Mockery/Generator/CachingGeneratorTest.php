<?php

namespace tests\Mockery\Generator;

use Mockery as m;
use Mockery\Generator\CachingGenerator;
use Mockery\Generator\Generator;

class CachingGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Mockery\Generator\CachingGenerator
*/
protected $cachingGenerator;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Mockery\Generator\Generator::class);
    $this->cachingGenerator = new \Mockery\Generator\CachingGenerator($this->_generator);
}

public function testGenerate0()
{
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->cache[$hash])) == false (line 36)

    $actual = $this->cachingGenerator->generate($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1()
{
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->cache[$hash])) == true (line 36)

    $actual = $this->cachingGenerator->generate($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
