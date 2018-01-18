<?php

namespace tests\Mockery\Generator;

use Mockery as m;
use Mockery\Generator\MockConfiguration;
use Mockery\Generator\MockDefinition;

class MockDefinitionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_config;
/**
* @var mixed
*/
protected $_code = null;
/**
* @var \Mockery\Generator\MockDefinition
*/
protected $mockDefinition;

public function setUp()
{
    parent::setUp();

    $this->_config = m::mock(\Mockery\Generator\MockConfiguration::class);
    $this->_code = null;
    $this->mockDefinition = new \Mockery\Generator\MockDefinition($this->_config, $this->_code);
}

public function testGetConfig0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockDefinition->getConfig();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetClassName0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockDefinition->getClassName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockDefinition->getCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
