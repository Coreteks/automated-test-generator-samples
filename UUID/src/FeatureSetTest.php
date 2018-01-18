<?php

namespace tests\Ramsey\Uuid;

use Mockery as m;
use Ramsey\Uuid\FeatureSet;

class FeatureSetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_useGuids = null;
/**
* @var mixed
*/
protected $_force32Bit = null;
/**
* @var mixed
*/
protected $_forceNoBigNumber = null;
/**
* @var mixed
*/
protected $_ignoreSystemNode = null;
/**
* @var mixed
*/
protected $_enablePecl = null;
/**
* @var \Ramsey\Uuid\FeatureSet
*/
protected $featureSet;

public function setUp()
{
    parent::setUp();

    $this->_useGuids = null;
    $this->_force32Bit = null;
    $this->_forceNoBigNumber = null;
    $this->_ignoreSystemNode = null;
    $this->_enablePecl = null;
    $this->featureSet = new \Ramsey\Uuid\FeatureSet($this->_useGuids, $this->_force32Bit, $this->_forceNoBigNumber, $this->_ignoreSystemNode, $this->_enablePecl);
}

public function testGetBuilder0()
{
    // TODO: Your mock expectations here

    $actual = $this->featureSet->getBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCodec0()
{
    // TODO: Your mock expectations here

    $actual = $this->featureSet->getCodec();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNodeProvider0()
{
    // TODO: Your mock expectations here

    $actual = $this->featureSet->getNodeProvider();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNumberConverter0()
{
    // TODO: Your mock expectations here

    $actual = $this->featureSet->getNumberConverter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRandomGenerator0()
{
    // TODO: Your mock expectations here

    $actual = $this->featureSet->getRandomGenerator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimeGenerator0()
{
    // TODO: Your mock expectations here

    $actual = $this->featureSet->getTimeGenerator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTimeProvider0()
{
    $timeProvider = m::mock(\Ramsey\Uuid\Provider\TimeProviderInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->featureSet->setTimeProvider($timeProvider);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
