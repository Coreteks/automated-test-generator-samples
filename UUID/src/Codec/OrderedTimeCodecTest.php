<?php

namespace tests\Ramsey\Uuid\Codec;

use Mockery as m;
use Ramsey\Uuid\Codec\OrderedTimeCodec;

class OrderedTimeCodecTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Codec\OrderedTimeCodec
*/
protected $orderedTimeCodec;

public function setUp()
{
    parent::setUp();

    $this->orderedTimeCodec = new \Ramsey\Uuid\Codec\OrderedTimeCodec();
}

public function testEncodeBinary0()
{
    $uuid = m::mock(\Ramsey\Uuid\UuidInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->orderedTimeCodec->encodeBinary($uuid);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecodeBytes0()
{
    $bytes = m::mock('UntypedParameter_bytes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strlen($bytes) !== 16) == false (line 56)

    $actual = $this->orderedTimeCodec->decodeBytes($bytes);
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
    // if (strlen($bytes) !== 16) == true (line 56)
    // throw new \InvalidArgumentException('$bytes string should contain 16 characters.') -> exception (line 57)

    $actual = $this->orderedTimeCodec->decodeBytes($bytes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
