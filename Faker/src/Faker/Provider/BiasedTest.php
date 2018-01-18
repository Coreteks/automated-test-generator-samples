<?php

namespace tests\Faker\Provider;

use Faker\Provider\Biased;
use Mockery as m;

class BiasedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\Biased
*/
protected $biased;

public function setUp()
{
    parent::setUp();

    $this->biased = new \Faker\Provider\Biased();
}

public function testBiasedNumberBetween0()
{
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');
    $function = m::mock('UntypedParameter_function_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // PhpParser\Node\Stmt\Do_ == false (line 24)

    $actual = $this->biased->biasedNumberBetween($min, $max, $function);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
