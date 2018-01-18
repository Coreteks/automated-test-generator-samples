<?php

namespace tests\Ramsey\Uuid\Generator;

use Mockery as m;
use Ramsey\Uuid\Generator\MtRandGenerator;

class MtRandGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Generator\MtRandGenerator
*/
protected $mtRandGenerator;

public function setUp()
{
    parent::setUp();

    $this->mtRandGenerator = new \Ramsey\Uuid\Generator\MtRandGenerator();
}

public function testGenerate0()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 35)

    $actual = $this->mtRandGenerator->generate($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerate1()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 35)
    // for (...) == false (line 35)

    $actual = $this->mtRandGenerator->generate($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
