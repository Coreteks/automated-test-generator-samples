<?php

namespace tests\Ramsey\Uuid\Generator;

use Mockery as m;
use Ramsey\Uuid\Converter\TimeConverterInterface;
use Ramsey\Uuid\Generator\DefaultTimeGenerator;
use Ramsey\Uuid\Provider\NodeProviderInterface;
use Ramsey\Uuid\Provider\TimeProviderInterface;

class DefaultTimeGeneratorTest extends \PHPUnit_Framework_TestCase
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
* @var \Ramsey\Uuid\Generator\DefaultTimeGenerator
*/
protected $defaultTimeGenerator;

public function setUp()
{
    parent::setUp();

    $this->_nodeProvider = m::mock(\Ramsey\Uuid\Provider\NodeProviderInterface::class);
    $this->_timeConverter = m::mock(\Ramsey\Uuid\Converter\TimeConverterInterface::class);
    $this->_timeProvider = m::mock(\Ramsey\Uuid\Provider\TimeProviderInterface::class);
    $this->defaultTimeGenerator = new \Ramsey\Uuid\Generator\DefaultTimeGenerator($this->_nodeProvider, $this->_timeConverter, $this->_timeProvider);
}

public function testGenerate0()
{
    $node = m::mock('UntypedParameter_node_');
    $clockSeq = m::mock('UntypedParameter_clockSeq_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($clockSeq === null) == false (line 80)

    $actual = $this->defaultTimeGenerator->generate($node, $clockSeq);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1()
{
    $node = m::mock('UntypedParameter_node_');
    $clockSeq = m::mock('UntypedParameter_clockSeq_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($clockSeq === null) == true (line 80)

    $actual = $this->defaultTimeGenerator->generate($node, $clockSeq);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
