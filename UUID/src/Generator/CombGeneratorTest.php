<?php

namespace tests\Ramsey\Uuid\Generator;

use Mockery as m;
use Ramsey\Uuid\Converter\NumberConverterInterface;
use Ramsey\Uuid\Generator\CombGenerator;
use Ramsey\Uuid\Generator\RandomGeneratorInterface;

class CombGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Mockery\MockInterface
*/
protected $_numberConverter;
/**
* @var \Ramsey\Uuid\Generator\CombGenerator
*/
protected $combGenerator;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Ramsey\Uuid\Generator\RandomGeneratorInterface::class);
    $this->_numberConverter = m::mock(\Ramsey\Uuid\Converter\NumberConverterInterface::class);
    $this->combGenerator = new \Ramsey\Uuid\Generator\CombGenerator($this->_generator, $this->_numberConverter);
}

public function testGenerate0()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length < self::TIMESTAMP_BYTES || $length < 0) == false (line 59)
    // if (self::TIMESTAMP_BYTES > 0 && $length > self::TIMESTAMP_BYTES) == false (line 65)

    $actual = $this->combGenerator->generate($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length < self::TIMESTAMP_BYTES || $length < 0) == false (line 59)
    // if (self::TIMESTAMP_BYTES > 0 && $length > self::TIMESTAMP_BYTES) == true (line 65)

    $actual = $this->combGenerator->generate($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGenerate2()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length < self::TIMESTAMP_BYTES || $length < 0) == true (line 59)
    // throw new \InvalidArgumentException('Length must be a positive integer.') -> exception (line 60)

    $actual = $this->combGenerator->generate($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
