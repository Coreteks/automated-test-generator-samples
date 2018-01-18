<?php

namespace tests\Ramsey\Uuid\Converter\Time;

use Mockery as m;
use Ramsey\Uuid\Converter\Time\BigNumberTimeConverter;

class BigNumberTimeConverterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Converter\Time\BigNumberTimeConverter
*/
protected $bigNumberTimeConverter;

public function setUp()
{
    parent::setUp();

    $this->bigNumberTimeConverter = new \Ramsey\Uuid\Converter\Time\BigNumberTimeConverter();
}

public function testCalculateTime0()
{
    $seconds = m::mock('UntypedParameter_seconds_');
    $microSeconds = m::mock('UntypedParameter_microSeconds_');

    // TODO: Your mock expectations here

    $actual = $this->bigNumberTimeConverter->calculateTime($seconds, $microSeconds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
