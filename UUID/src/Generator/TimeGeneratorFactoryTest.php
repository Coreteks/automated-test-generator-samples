<?php

namespace tests\Ramsey\Uuid\Generator;

use Mockery as m;
use Ramsey\Uuid\Converter\TimeConverterInterface;
use Ramsey\Uuid\Generator\TimeGeneratorFactory;
use Ramsey\Uuid\Provider\NodeProviderInterface;
use Ramsey\Uuid\Provider\TimeProviderInterface;

class TimeGeneratorFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_nodeProvider;
/**
* @var \Mockery\MockInterface
*/
protected $_timeConverter;
/**
* @var \Mockery\MockInterface
*/
protected $_timeProvider;
/**
* @var \Ramsey\Uuid\Generator\TimeGeneratorFactory
*/
protected $timeGeneratorFactory;

public function setUp()
{
    parent::setUp();

    $this->_nodeProvider = m::mock(\Ramsey\Uuid\Provider\NodeProviderInterface::class);
    $this->_timeConverter = m::mock(\Ramsey\Uuid\Converter\TimeConverterInterface::class);
    $this->_timeProvider = m::mock(\Ramsey\Uuid\Provider\TimeProviderInterface::class);
    $this->timeGeneratorFactory = new \Ramsey\Uuid\Generator\TimeGeneratorFactory($this->_nodeProvider, $this->_timeConverter, $this->_timeProvider);
}

public function testGetGenerator0()
{
    // TODO: Your mock expectations here

    $actual = $this->timeGeneratorFactory->getGenerator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
