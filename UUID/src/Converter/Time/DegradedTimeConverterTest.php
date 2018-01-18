<?php

namespace tests\Ramsey\Uuid\Converter\Time;

use Mockery as m;
use Ramsey\Uuid\Converter\Time\DegradedTimeConverter;

class DegradedTimeConverterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Converter\Time\DegradedTimeConverter
*/
protected $degradedTimeConverter;

public function setUp()
{
    parent::setUp();

    $this->degradedTimeConverter = new \Ramsey\Uuid\Converter\Time\DegradedTimeConverter();
}

/**
 * @expectedException \Ramsey\Uuid\Exception\UnsatisfiedDependencyException
 */
public function testCalculateTime0()
{
    $seconds = m::mock('UntypedParameter_seconds_');
    $microSeconds = m::mock('UntypedParameter_microSeconds_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \Ramsey\Uuid\Exception\UnsatisfiedDependencyException('When calling ' . __METHOD__ . ' on a 32-bit system, ' . 'Moontoast\\Math\\BigNumber must be present.') -> exception (line 37)

    $actual = $this->degradedTimeConverter->calculateTime($seconds, $microSeconds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
