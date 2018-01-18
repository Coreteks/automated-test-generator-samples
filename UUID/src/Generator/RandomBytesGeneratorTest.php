<?php

namespace tests\Ramsey\Uuid\Generator;

use Mockery as m;
use Ramsey\Uuid\Generator\RandomBytesGenerator;

class RandomBytesGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Generator\RandomBytesGenerator
*/
protected $randomBytesGenerator;

public function setUp()
{
    parent::setUp();

    $this->randomBytesGenerator = new \Ramsey\Uuid\Generator\RandomBytesGenerator();
}

public function testGenerate0()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    $actual = $this->randomBytesGenerator->generate($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
