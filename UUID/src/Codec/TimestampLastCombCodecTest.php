<?php

namespace tests\Ramsey\Uuid\Codec;

use Mockery as m;
use Ramsey\Uuid\Codec\TimestampLastCombCodec;

class TimestampLastCombCodecTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Codec\TimestampLastCombCodec
*/
protected $timestampLastCombCodec;

public function setUp()
{
    parent::setUp();

    $this->timestampLastCombCodec = new \Ramsey\Uuid\Codec\TimestampLastCombCodec();
}
}
