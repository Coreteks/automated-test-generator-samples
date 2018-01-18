<?php

namespace tests\Ramsey\Uuid\Generator;

use Mockery as m;
use Ramsey\Uuid\Generator\PeclUuidTimeGenerator;

class PeclUuidTimeGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Generator\PeclUuidTimeGenerator
*/
protected $peclUuidTimeGenerator;

public function setUp()
{
    parent::setUp();

    $this->peclUuidTimeGenerator = new \Ramsey\Uuid\Generator\PeclUuidTimeGenerator();
}

public function testGenerate0()
{
    $node = m::mock('UntypedParameter_node_');
    $clockSeq = m::mock('UntypedParameter_clockSeq_');

    // TODO: Your mock expectations here

    $actual = $this->peclUuidTimeGenerator->generate($node, $clockSeq);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
