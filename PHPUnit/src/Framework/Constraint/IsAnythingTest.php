<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsAnything;

class IsAnythingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\IsAnything
*/
protected $isAnything;

public function setUp()
{
    parent::setUp();

    $this->isAnything = new \PHPUnit\Framework\Constraint\IsAnything();
}

public function testEvaluate0()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    $actual = $this->isAnything->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->isAnything->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->isAnything->count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
