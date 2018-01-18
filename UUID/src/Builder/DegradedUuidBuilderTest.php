<?php

namespace tests\Ramsey\Uuid\Builder;

use Mockery as m;
use Ramsey\Uuid\Builder\DegradedUuidBuilder;
use Ramsey\Uuid\Converter\NumberConverterInterface;

class DegradedUuidBuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_converter;
/**
* @var \Ramsey\Uuid\Builder\DegradedUuidBuilder
*/
protected $degradedUuidBuilder;

public function setUp()
{
    parent::setUp();

    $this->_converter = m::mock(\Ramsey\Uuid\Converter\NumberConverterInterface::class);
    $this->degradedUuidBuilder = new \Ramsey\Uuid\Builder\DegradedUuidBuilder($this->_converter);
}

public function testBuild0()
{
    $codec = m::mock(\Ramsey\Uuid\Codec\CodecInterface::class);
    $fields = [];

    // TODO: Your mock expectations here

    $actual = $this->degradedUuidBuilder->build($codec, $fields);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
