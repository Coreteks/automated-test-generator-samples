<?php

namespace tests\Ramsey\Uuid\Codec;

use Mockery as m;
use Ramsey\Uuid\Codec\TimestampFirstCombCodec;

class TimestampFirstCombCodecTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Codec\TimestampFirstCombCodec
*/
protected $timestampFirstCombCodec;

public function setUp()
{
    parent::setUp();

    $this->timestampFirstCombCodec = new \Ramsey\Uuid\Codec\TimestampFirstCombCodec();
}

public function testEncode0()
{
    $uuid = m::mock(\Ramsey\Uuid\UuidInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->timestampFirstCombCodec->encode($uuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncodeBinary0()
{
    $uuid = m::mock(\Ramsey\Uuid\UuidInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->timestampFirstCombCodec->encodeBinary($uuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecode0()
{
    $encodedUuid = m::mock('UntypedParameter_encodedUuid_');

    // TODO: Your mock expectations here

    $actual = $this->timestampFirstCombCodec->decode($encodedUuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecodeBytes0()
{
    $bytes = m::mock('UntypedParameter_bytes_');

    // TODO: Your mock expectations here

    $actual = $this->timestampFirstCombCodec->decodeBytes($bytes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
