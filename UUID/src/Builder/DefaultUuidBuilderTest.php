<?php

namespace tests\Ramsey\Uuid\Builder;

use Mockery as m;
use Ramsey\Uuid\Builder\DefaultUuidBuilder;
use Ramsey\Uuid\Converter\NumberConverterInterface;

class DefaultUuidBuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_converter;
/**
* @var \Ramsey\Uuid\Builder\DefaultUuidBuilder
*/
protected $defaultUuidBuilder;

public function setUp()
{
    parent::setUp();

    $this->_converter = m::mock(\Ramsey\Uuid\Converter\NumberConverterInterface::class);
    $this->defaultUuidBuilder = new \Ramsey\Uuid\Builder\DefaultUuidBuilder($this->_converter);
}

public function testBuild0()
{
    $codec = m::mock(\Ramsey\Uuid\Codec\CodecInterface::class);
    $fields = [];

    // TODO: Your mock expectations here

    $actual = $this->defaultUuidBuilder->build($codec, $fields);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
