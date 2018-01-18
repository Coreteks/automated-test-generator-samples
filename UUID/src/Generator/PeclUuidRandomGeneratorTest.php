<?php

namespace tests\Ramsey\Uuid\Generator;

use Mockery as m;
use Ramsey\Uuid\Generator\PeclUuidRandomGenerator;

class PeclUuidRandomGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Generator\PeclUuidRandomGenerator
*/
protected $peclUuidRandomGenerator;

public function setUp()
{
    parent::setUp();

    $this->peclUuidRandomGenerator = new \Ramsey\Uuid\Generator\PeclUuidRandomGenerator();
}

public function testGenerate0()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    $actual = $this->peclUuidRandomGenerator->generate($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
