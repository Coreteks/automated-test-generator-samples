<?php

namespace tests\Ramsey\Uuid;

use Mockery as m;
use Ramsey\Uuid\DegradedUuid;

class DegradedUuidTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\DegradedUuid
*/
protected $degradedUuid;

public function setUp()
{
    parent::setUp();

    $this->degradedUuid = new \Ramsey\Uuid\DegradedUuid();
}

public function testGetDateTime0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVersion() != 1) == false (line 29)

    $actual = $this->degradedUuid->getDateTime();
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
    // if ($this->getVersion() != 1) == true (line 29)
    // throw new \Ramsey\Uuid\Exception\UnsupportedOperationException('Not a time-based UUID') -> exception (line 30)

    $actual = $this->degradedUuid->getDateTime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Ramsey\Uuid\Exception\UnsatisfiedDependencyException
 */
public function testGetFields0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \Ramsey\Uuid\Exception\UnsatisfiedDependencyException('Cannot call ' . __METHOD__ . ' on a 32-bit system, since some ' . 'values overflow the system max integer value' . '; consider calling getFieldsHex instead') -> exception (line 52)

    $actual = $this->degradedUuid->getFields();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Ramsey\Uuid\Exception\UnsatisfiedDependencyException
 */
public function testGetNode0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \Ramsey\Uuid\Exception\UnsatisfiedDependencyException('Cannot call ' . __METHOD__ . ' on a 32-bit system, since node ' . 'is an unsigned 48-bit integer and can overflow the system ' . 'max integer value' . '; consider calling getNodeHex instead') -> exception (line 67)

    $actual = $this->degradedUuid->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Ramsey\Uuid\Exception\UnsatisfiedDependencyException
 */
public function testGetTimeLow0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \Ramsey\Uuid\Exception\UnsatisfiedDependencyException('Cannot call ' . __METHOD__ . ' on a 32-bit system, since time_low ' . 'is an unsigned 32-bit integer and can overflow the system ' . 'max integer value' . '; consider calling getTimeLowHex instead') -> exception (line 83)

    $actual = $this->degradedUuid->getTimeLow();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Ramsey\Uuid\Exception\UnsatisfiedDependencyException
 */
public function testGetTimestamp0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVersion() != 1) == false (line 100)
    // throw new \Ramsey\Uuid\Exception\UnsatisfiedDependencyException('Cannot call ' . __METHOD__ . ' on a 32-bit system, since timestamp ' . 'is an unsigned 60-bit integer and can overflow the system ' . 'max integer value' . '; consider calling getTimestampHex instead') -> exception (line 104)

    $actual = $this->degradedUuid->getTimestamp();
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
    // if ($this->getVersion() != 1) == true (line 100)
    // throw new \Ramsey\Uuid\Exception\UnsupportedOperationException('Not a time-based UUID') -> exception (line 101)

    $actual = $this->degradedUuid->getTimestamp();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
