<?php

namespace tests\Ramsey\Uuid\Codec;

use Mockery as m;
use Ramsey\Uuid\Builder\UuidBuilderInterface;
use Ramsey\Uuid\Codec\StringCodec;

class StringCodecTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_builder;
/**
* @var \Ramsey\Uuid\Codec\StringCodec
*/
protected $stringCodec;

public function setUp()
{
    parent::setUp();

    $this->_builder = m::mock(\Ramsey\Uuid\Builder\UuidBuilderInterface::class);
    $this->stringCodec = new \Ramsey\Uuid\Codec\StringCodec($this->_builder);
}

public function testEncode0()
{
    $uuid = m::mock(\Ramsey\Uuid\UuidInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->stringCodec->encode($uuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncodeBinary0()
{
    $uuid = m::mock(\Ramsey\Uuid\UuidInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->stringCodec->encodeBinary($uuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecode0()
{
    $encodedUuid = m::mock('UntypedParameter_encodedUuid_');

    // TODO: Your mock expectations here

    $actual = $this->stringCodec->decode($encodedUuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecodeBytes0()
{
    $bytes = m::mock('UntypedParameter_bytes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strlen($bytes) !== 16) == false (line 94)

    $actual = $this->stringCodec->decodeBytes($bytes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testDecodeBytes1()
{
    $bytes = m::mock('UntypedParameter_bytes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strlen($bytes) !== 16) == true (line 94)
    // throw new \InvalidArgumentException('$bytes string should contain 16 characters.') -> exception (line 95)

    $actual = $this->stringCodec->decodeBytes($bytes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
