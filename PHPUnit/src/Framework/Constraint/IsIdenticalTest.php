<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsIdentical;

class IsIdenticalTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_value = null;
/**
* @var \PHPUnit\Framework\Constraint\IsIdentical
*/
protected $isIdentical;

public function setUp()
{
    parent::setUp();

    $this->_value = null;
    $this->isIdentical = new \PHPUnit\Framework\Constraint\IsIdentical($this->_value);
}

public function testEvaluate0()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_float($this->value) && \is_float($other) && !\is_infinite($this->value) && !\is_infinite($other) && !\is_nan($this->value) && !\is_nan($other)) == false (line 69)
    // if ($returnResult) == false (line 77)
    // if (!$success) == false (line 81)

    $actual = $this->isIdentical->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate1()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_float($this->value) && \is_float($other) && !\is_infinite($this->value) && !\is_infinite($other) && !\is_nan($this->value) && !\is_nan($other)) == false (line 69)
    // if ($returnResult) == false (line 77)
    // if (!$success) == true (line 81)
    // if (\is_string($this->value) && \is_string($other)) == false (line 85)

    $actual = $this->isIdentical->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate2()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_float($this->value) && \is_float($other) && !\is_infinite($this->value) && !\is_infinite($other) && !\is_nan($this->value) && !\is_nan($other)) == false (line 69)
    // if ($returnResult) == false (line 77)
    // if (!$success) == true (line 81)
    // if (\is_string($this->value) && \is_string($other)) == true (line 85)

    $actual = $this->isIdentical->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate3()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_float($this->value) && \is_float($other) && !\is_infinite($this->value) && !\is_infinite($other) && !\is_nan($this->value) && !\is_nan($other)) == false (line 69)
    // if ($returnResult) == true (line 77)

    $actual = $this->isIdentical->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate4()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_float($this->value) && \is_float($other) && !\is_infinite($this->value) && !\is_infinite($other) && !\is_nan($this->value) && !\is_nan($other)) == true (line 69)
    // if ($returnResult) == false (line 77)
    // if (!$success) == false (line 81)

    $actual = $this->isIdentical->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate5()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_float($this->value) && \is_float($other) && !\is_infinite($this->value) && !\is_infinite($other) && !\is_nan($this->value) && !\is_nan($other)) == true (line 69)
    // if ($returnResult) == false (line 77)
    // if (!$success) == true (line 81)
    // if (\is_string($this->value) && \is_string($other)) == false (line 85)

    $actual = $this->isIdentical->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate6()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_float($this->value) && \is_float($other) && !\is_infinite($this->value) && !\is_infinite($other) && !\is_nan($this->value) && !\is_nan($other)) == true (line 69)
    // if ($returnResult) == false (line 77)
    // if (!$success) == true (line 81)
    // if (\is_string($this->value) && \is_string($other)) == true (line 85)

    $actual = $this->isIdentical->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate7()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_float($this->value) && \is_float($other) && !\is_infinite($this->value) && !\is_infinite($other) && !\is_nan($this->value) && !\is_nan($other)) == true (line 69)
    // if ($returnResult) == true (line 77)

    $actual = $this->isIdentical->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->value)) == false (line 108)

    $actual = $this->isIdentical->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_object($this->value)) == true (line 108)

    $actual = $this->isIdentical->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
