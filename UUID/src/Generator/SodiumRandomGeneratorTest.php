<?php

namespace tests\Ramsey\Uuid\Generator;

use Mockery as m;
use Ramsey\Uuid\Generator\SodiumRandomGenerator;

class SodiumRandomGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Generator\SodiumRandomGenerator
*/
protected $sodiumRandomGenerator;

public function setUp()
{
    parent::setUp();

    $this->sodiumRandomGenerator = new \Ramsey\Uuid\Generator\SodiumRandomGenerator();
}

public function testGenerate0()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    $actual = $this->sodiumRandomGenerator->generate($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
