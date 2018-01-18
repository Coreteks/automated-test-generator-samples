<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\LogicalNot;

class LogicalNotTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_constraint = null;
/**
* @var \PHPUnit\Framework\Constraint\LogicalNot
*/
protected $logicalNot;

public function setUp()
{
    parent::setUp();

    $this->_constraint = null;
    $this->logicalNot = new \PHPUnit\Framework\Constraint\LogicalNot($this->_constraint);
}

public function testNegate0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($matches) > 0) == false (line 73)

    $actual = $this->logicalNot->negate($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNegate1()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($matches) > 0) == true (line 73)

    $actual = $this->logicalNot->negate($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvaluate0()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($returnResult) == false (line 120)
    // if (!$success) == false (line 124)

    $actual = $this->logicalNot->evaluate($other, $description, $returnResult);
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
    // if ($returnResult) == false (line 120)
    // if (!$success) == true (line 124)

    $actual = $this->logicalNot->evaluate($other, $description, $returnResult);
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
    // if ($returnResult) == true (line 120)

    $actual = $this->logicalNot->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\get_class($this->constraint)) (line 136)
    // Case \PHPUnit\Framework\Constraint\LogicalAnd::class == false (line 137)
    // Case self::class == false (line 138)
    // Case \PHPUnit\Framework\Constraint\LogicalOr::class == false (line 139)
    // Default (line 142)

    $actual = $this->logicalNot->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\get_class($this->constraint)) (line 136)
    // Case \PHPUnit\Framework\Constraint\LogicalAnd::class == false (line 137)
    // Case self::class == false (line 138)
    // Case \PHPUnit\Framework\Constraint\LogicalOr::class == true (line 139)

    $actual = $this->logicalNot->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\get_class($this->constraint)) (line 136)
    // Case \PHPUnit\Framework\Constraint\LogicalAnd::class == false (line 137)
    // Case self::class == true (line 138)

    $actual = $this->logicalNot->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\get_class($this->constraint)) (line 136)
    // Case \PHPUnit\Framework\Constraint\LogicalAnd::class == true (line 137)

    $actual = $this->logicalNot->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->logicalNot->count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
