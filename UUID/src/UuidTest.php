<?php

namespace tests\Ramsey\Uuid;

use Mockery as m;
use Ramsey\Uuid\Codec\CodecInterface;
use Ramsey\Uuid\Converter\NumberConverterInterface;
use Ramsey\Uuid\Uuid;

class UuidTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_fields = [];
/**
* @var \Mockery\MockInterface
*/
protected $_converter;
/**
* @var \Mockery\MockInterface
*/
protected $_codec;
/**
* @var \Ramsey\Uuid\Uuid
*/
protected $uuid;

public function setUp()
{
    parent::setUp();

    $this->_fields = [];
    $this->_converter = m::mock(\Ramsey\Uuid\Converter\NumberConverterInterface::class);
    $this->_codec = m::mock(\Ramsey\Uuid\Codec\CodecInterface::class);
    $this->uuid = new \Ramsey\Uuid\Uuid($this->_fields, $this->_converter, $this->_codec);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJsonSerialize0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->jsonSerialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerialize0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->serialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnserialize0()
{
    $serialized = m::mock('UntypedParameter_serialized_');

    // TODO: Your mock expectations here

    $actual = $this->uuid->unserialize($serialized);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompareTo0()
{
    $other = m::mock(\Ramsey\Uuid\UuidInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getMostSignificantBitsHex() < $other->getMostSignificantBitsHex()) == false (line 245)
    // if ($this->getMostSignificantBitsHex() > $other->getMostSignificantBitsHex()) == false (line 247)
    // if ($this->getLeastSignificantBitsHex() < $other->getLeastSignificantBitsHex()) == false (line 249)
    // if ($this->getLeastSignificantBitsHex() > $other->getLeastSignificantBitsHex()) == false (line 251)

    $actual = $this->uuid->compareTo($other);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompareTo1()
{
    $other = m::mock(\Ramsey\Uuid\UuidInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getMostSignificantBitsHex() < $other->getMostSignificantBitsHex()) == false (line 245)
    // if ($this->getMostSignificantBitsHex() > $other->getMostSignificantBitsHex()) == false (line 247)
    // if ($this->getLeastSignificantBitsHex() < $other->getLeastSignificantBitsHex()) == false (line 249)
    // if ($this->getLeastSignificantBitsHex() > $other->getLeastSignificantBitsHex()) == true (line 251)

    $actual = $this->uuid->compareTo($other);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompareTo2()
{
    $other = m::mock(\Ramsey\Uuid\UuidInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getMostSignificantBitsHex() < $other->getMostSignificantBitsHex()) == false (line 245)
    // if ($this->getMostSignificantBitsHex() > $other->getMostSignificantBitsHex()) == false (line 247)
    // if ($this->getLeastSignificantBitsHex() < $other->getLeastSignificantBitsHex()) == true (line 249)

    $actual = $this->uuid->compareTo($other);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompareTo3()
{
    $other = m::mock(\Ramsey\Uuid\UuidInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getMostSignificantBitsHex() < $other->getMostSignificantBitsHex()) == false (line 245)
    // if ($this->getMostSignificantBitsHex() > $other->getMostSignificantBitsHex()) == true (line 247)

    $actual = $this->uuid->compareTo($other);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompareTo4()
{
    $other = m::mock(\Ramsey\Uuid\UuidInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getMostSignificantBitsHex() < $other->getMostSignificantBitsHex()) == true (line 245)

    $actual = $this->uuid->compareTo($other);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEquals0()
{
    $other = m::mock('UntypedParameter_other_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$other instanceof \Ramsey\Uuid\UuidInterface) == false (line 260)

    $actual = $this->uuid->equals($other);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEquals1()
{
    $other = m::mock('UntypedParameter_other_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$other instanceof \Ramsey\Uuid\UuidInterface) == true (line 260)

    $actual = $this->uuid->equals($other);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBytes0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getBytes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetClockSeqHiAndReserved0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getClockSeqHiAndReserved();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetClockSeqHiAndReservedHex0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getClockSeqHiAndReservedHex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetClockSeqLow0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getClockSeqLow();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetClockSeqLowHex0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getClockSeqLowHex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetClockSequence0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getClockSequence();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetClockSequenceHex0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getClockSequenceHex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNumberConverter0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getNumberConverter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDateTime0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVersion() != 1) == false (line 337)

    $actual = $this->uuid->getDateTime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Ramsey\Uuid\Exception\UnsupportedOperationException
 */
public function testGetDateTime1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVersion() != 1) == true (line 337)
    // throw new \Ramsey\Uuid\Exception\UnsupportedOperationException('Not a time-based UUID') -> exception (line 338)

    $actual = $this->uuid->getDateTime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFields0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getFields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFieldsHex0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getFieldsHex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHex0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getHex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInteger0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getInteger();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLeastSignificantBits0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getLeastSignificantBits();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLeastSignificantBitsHex0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getLeastSignificantBitsHex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMostSignificantBits0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getMostSignificantBits();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMostSignificantBitsHex0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getMostSignificantBitsHex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNodeHex0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getNodeHex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimeHiAndVersion0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getTimeHiAndVersion();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimeHiAndVersionHex0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getTimeHiAndVersionHex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimeLow0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getTimeLow();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimeLowHex0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getTimeLowHex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimeMid0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getTimeMid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimeMidHex0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getTimeMidHex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimestamp0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVersion() != 1) == false (line 530)

    $actual = $this->uuid->getTimestamp();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Ramsey\Uuid\Exception\UnsupportedOperationException
 */
public function testGetTimestamp1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVersion() != 1) == true (line 530)
    // throw new \Ramsey\Uuid\Exception\UnsupportedOperationException('Not a time-based UUID') -> exception (line 531)

    $actual = $this->uuid->getTimestamp();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimestampHex0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVersion() != 1) == false (line 539)

    $actual = $this->uuid->getTimestampHex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Ramsey\Uuid\Exception\UnsupportedOperationException
 */
public function testGetTimestampHex1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVersion() != 1) == true (line 539)
    // throw new \Ramsey\Uuid\Exception\UnsupportedOperationException('Not a time-based UUID') -> exception (line 540)

    $actual = $this->uuid->getTimestampHex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUrn0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->getUrn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetVariant0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 === ($clockSeq & 0x80)) == false (line 559)
    // if (0 === ($clockSeq & 0x40)) == false (line 561)
    // if (0 === ($clockSeq & 0x20)) == false (line 563)

    $actual = $this->uuid->getVariant();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetVariant1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 === ($clockSeq & 0x80)) == false (line 559)
    // if (0 === ($clockSeq & 0x40)) == false (line 561)
    // if (0 === ($clockSeq & 0x20)) == true (line 563)

    $actual = $this->uuid->getVariant();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetVariant2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 === ($clockSeq & 0x80)) == false (line 559)
    // if (0 === ($clockSeq & 0x40)) == true (line 561)

    $actual = $this->uuid->getVariant();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetVariant3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 === ($clockSeq & 0x80)) == true (line 559)

    $actual = $this->uuid->getVariant();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetVersion0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVariant() == self::RFC_4122) == false (line 574)

    $actual = $this->uuid->getVersion();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetVersion1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVariant() == self::RFC_4122) == true (line 574)

    $actual = $this->uuid->getVersion();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFactory0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$factory) == false (line 593)

    $actual = $this->uuid->getFactory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFactory1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$factory) == true (line 593)

    $actual = $this->uuid->getFactory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFactory0()
{
    $factory = m::mock(\Ramsey\Uuid\UuidFactoryInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->uuid->setFactory($factory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromBytes0()
{
    $bytes = m::mock('UntypedParameter_bytes_');

    // TODO: Your mock expectations here

    $actual = $this->uuid->fromBytes($bytes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromString0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->uuid->fromString($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromInteger0()
{
    $integer = m::mock('UntypedParameter_integer_');

    // TODO: Your mock expectations here

    $actual = $this->uuid->fromInteger($integer);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsValid0()
{
    $uuid = m::mock('UntypedParameter_uuid_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($uuid == self::NIL) == false (line 653)
    // if (!preg_match('/' . self::VALID_PATTERN . '/', $uuid)) == false (line 657)

    $actual = $this->uuid->isValid($uuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsValid1()
{
    $uuid = m::mock('UntypedParameter_uuid_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($uuid == self::NIL) == false (line 653)
    // if (!preg_match('/' . self::VALID_PATTERN . '/', $uuid)) == true (line 657)

    $actual = $this->uuid->isValid($uuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsValid2()
{
    $uuid = m::mock('UntypedParameter_uuid_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($uuid == self::NIL) == true (line 653)

    $actual = $this->uuid->isValid($uuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUuid10()
{
    $node = m::mock('UntypedParameter_node_');
    $clockSeq = m::mock('UntypedParameter_clockSeq_');

    // TODO: Your mock expectations here

    $actual = $this->uuid->uuid1($node, $clockSeq);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUuid30()
{
    $ns = m::mock('UntypedParameter_ns_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->uuid->uuid3($ns, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUuid40()
{
    // TODO: Your mock expectations here

    $actual = $this->uuid->uuid4();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUuid50()
{
    $ns = m::mock('UntypedParameter_ns_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->uuid->uuid5($ns, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
