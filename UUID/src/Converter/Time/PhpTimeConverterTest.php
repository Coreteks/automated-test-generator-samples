<?php

namespace tests\Ramsey\Uuid\Converter\Time;

use Mockery as m;
use Ramsey\Uuid\Converter\Time\PhpTimeConverter;

class PhpTimeConverterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Converter\Time\PhpTimeConverter
*/
protected $phpTimeConverter;

public function setUp()
{
    parent::setUp();

    $this->phpTimeConverter = new \Ramsey\Uuid\Converter\Time\PhpTimeConverter();
}

public function testCalculateTime0()
{
    $seconds = m::mock('UntypedParameter_seconds_');
    $microSeconds = m::mock('UntypedParameter_microSeconds_');

    // TODO: Your mock expectations here

    $actual = $this->phpTimeConverter->calculateTime($seconds, $microSeconds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
