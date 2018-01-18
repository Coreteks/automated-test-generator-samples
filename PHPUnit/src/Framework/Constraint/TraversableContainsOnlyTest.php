<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\TraversableContainsOnly;

class TraversableContainsOnlyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_type = null;
/**
* @var mixed
*/
protected $_isNativeType = null;
/**
* @var \PHPUnit\Framework\Constraint\TraversableContainsOnly
*/
protected $traversableContainsOnly;

public function setUp()
{
    parent::setUp();

    $this->_type = null;
    $this->_isNativeType = null;
    $this->traversableContainsOnly = new \PHPUnit\Framework\Constraint\TraversableContainsOnly($this->_type, $this->_isNativeType);
}

public function testEvaluate0()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($returnResult) == false (line 81)
    // if (!$success) == false (line 85)

    $actual = $this->traversableContainsOnly->evaluate($other, $description, $returnResult);
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
    // if ($returnResult) == false (line 81)
    // if (!$success) == true (line 85)

    $actual = $this->traversableContainsOnly->evaluate($other, $description, $returnResult);
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
    // if ($returnResult) == true (line 81)

    $actual = $this->traversableContainsOnly->evaluate($other, $description, $returnResult);
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
    // if (!$this->constraint->evaluate($item, '', true)) == false (line 74)
    // if ($returnResult) == false (line 81)
    // if (!$success) == false (line 85)

    $actual = $this->traversableContainsOnly->evaluate($other, $description, $returnResult);
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
    // if (!$this->constraint->evaluate($item, '', true)) == false (line 74)
    // if ($returnResult) == false (line 81)
    // if (!$success) == true (line 85)

    $actual = $this->traversableContainsOnly->evaluate($other, $description, $returnResult);
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
    // if (!$this->constraint->evaluate($item, '', true)) == false (line 74)
    // if ($returnResult) == true (line 81)

    $actual = $this->traversableContainsOnly->evaluate($other, $description, $returnResult);
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
    // if (!$this->constraint->evaluate($item, '', true)) == true (line 74)
    // if ($returnResult) == false (line 81)
    // if (!$success) == false (line 85)

    $actual = $this->traversableContainsOnly->evaluate($other, $description, $returnResult);
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
    // if (!$this->constraint->evaluate($item, '', true)) == true (line 74)
    // if ($returnResult) == false (line 81)
    // if (!$success) == true (line 85)

    $actual = $this->traversableContainsOnly->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate8()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->constraint->evaluate($item, '', true)) == true (line 74)
    // if ($returnResult) == true (line 81)

    $actual = $this->traversableContainsOnly->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->traversableContainsOnly->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
