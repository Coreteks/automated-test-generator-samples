<?php

namespace tests\Ramsey\Uuid;

use Mockery as m;
use Ramsey\Uuid\FeatureSet;
use Ramsey\Uuid\UuidFactory;

class UuidFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_features;
/**
* @var \Ramsey\Uuid\UuidFactory
*/
protected $uuidFactory;

public function setUp()
{
    parent::setUp();

    $this->_features = m::mock(\Ramsey\Uuid\FeatureSet::class);
    $this->uuidFactory = new \Ramsey\Uuid\UuidFactory($this->_features);
}

public function testGetCodec0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->getCodec();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCodec0()
{
    $codec = m::mock(\Ramsey\Uuid\Codec\CodecInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->setCodec($codec);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNodeProvider0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->getNodeProvider();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRandomGenerator0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->getRandomGenerator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimeGenerator0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->getTimeGenerator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTimeGenerator0()
{
    $generator = m::mock(\Ramsey\Uuid\Generator\TimeGeneratorInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->setTimeGenerator($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNumberConverter0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->getNumberConverter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRandomGenerator0()
{
    $generator = m::mock(\Ramsey\Uuid\Generator\RandomGeneratorInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->setRandomGenerator($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetNumberConverter0()
{
    $converter = m::mock(\Ramsey\Uuid\Converter\NumberConverterInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->setNumberConverter($converter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUuidBuilder0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->getUuidBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetUuidBuilder0()
{
    $builder = m::mock(\Ramsey\Uuid\Builder\UuidBuilderInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->setUuidBuilder($builder);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromBytes0()
{
    $bytes = m::mock('UntypedParameter_bytes_');

    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->fromBytes($bytes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromString0()
{
    $uuid = m::mock('UntypedParameter_uuid_');

    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->fromString($uuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromInteger0()
{
    $integer = m::mock('UntypedParameter_integer_');

    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->fromInteger($integer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUuid10()
{
    $node = m::mock('UntypedParameter_node_');
    $clockSeq = m::mock('UntypedParameter_clockSeq_');

    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->uuid1($node, $clockSeq);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUuid30()
{
    $ns = m::mock('UntypedParameter_ns_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->uuid3($ns, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUuid40()
{
    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->uuid4();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUuid50()
{
    $ns = m::mock('UntypedParameter_ns_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->uuid5($ns, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUuid0()
{
    $fields = [];

    // TODO: Your mock expectations here

    $actual = $this->uuidFactory->uuid($fields);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
