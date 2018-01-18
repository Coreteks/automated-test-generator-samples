<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\ArraySubset;

class ArraySubsetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_subset = null;
/**
* @var mixed
*/
protected $_strict = null;
/**
* @var \PHPUnit\Framework\Constraint\ArraySubset
*/
protected $arraySubset;

public function setUp()
{
    parent::setUp();

    $this->_subset = null;
    $this->_strict = null;
    $this->arraySubset = new \PHPUnit\Framework\Constraint\ArraySubset($this->_subset, $this->_strict);
}

public function testEvaluate0()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->strict) == false (line 74)
    // if ($returnResult) == false (line 80)
    // if (!$result) == false (line 84)

    $actual = $this->arraySubset->evaluate($other, $description, $returnResult);
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
    // if ($this->strict) == false (line 74)
    // if ($returnResult) == false (line 80)
    // if (!$result) == true (line 84)

    $actual = $this->arraySubset->evaluate($other, $description, $returnResult);
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
    // if ($this->strict) == false (line 74)
    // if ($returnResult) == true (line 80)

    $actual = $this->arraySubset->evaluate($other, $description, $returnResult);
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
    // if ($this->strict) == true (line 74)
    // if ($returnResult) == false (line 80)
    // if (!$result) == false (line 84)

    $actual = $this->arraySubset->evaluate($other, $description, $returnResult);
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
    // if ($this->strict) == true (line 74)
    // if ($returnResult) == false (line 80)
    // if (!$result) == true (line 84)

    $actual = $this->arraySubset->evaluate($other, $description, $returnResult);
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
    // if ($this->strict) == true (line 74)
    // if ($returnResult) == true (line 80)

    $actual = $this->arraySubset->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->arraySubset->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
