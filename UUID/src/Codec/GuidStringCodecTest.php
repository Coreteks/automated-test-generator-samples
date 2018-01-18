<?php

namespace tests\Ramsey\Uuid\Codec;

use Mockery as m;
use Ramsey\Uuid\Codec\GuidStringCodec;

class GuidStringCodecTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Codec\GuidStringCodec
*/
protected $guidStringCodec;

public function setUp()
{
    parent::setUp();

    $this->guidStringCodec = new \Ramsey\Uuid\Codec\GuidStringCodec();
}

public function testEncode0()
{
    $uuid = m::mock(\Ramsey\Uuid\UuidInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->guidStringCodec->encode($uuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncodeBinary0()
{
    $uuid = m::mock(\Ramsey\Uuid\UuidInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->guidStringCodec->encodeBinary($uuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecode0()
{
    $encodedUuid = m::mock('UntypedParameter_encodedUuid_');

    // TODO: Your mock expectations here

    $actual = $this->guidStringCodec->decode($encodedUuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecodeBytes0()
{
    $bytes = m::mock('UntypedParameter_bytes_');

    // TODO: Your mock expectations here

    $actual = $this->guidStringCodec->decodeBytes($bytes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
