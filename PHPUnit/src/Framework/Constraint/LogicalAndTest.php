<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\LogicalAnd;

class LogicalAndTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\LogicalAnd
*/
protected $logicalAnd;

public function setUp()
{
    parent::setUp();

    $this->logicalAnd = new \PHPUnit\Framework\Constraint\LogicalAnd();
}

public function testFromConstraints0()
{
    $constraints = m::mock(\PHPUnit\Framework\Constraint\Constraint::class);

    // TODO: Your mock expectations here

    $actual = $this->logicalAnd->fromConstraints($constraints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConstraints0()
{
    $constraints = [];

    // TODO: Your mock expectations here

    $actual = $this->logicalAnd->setConstraints($constraints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConstraints1()
{
    $constraints = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \PHPUnit\Framework\Constraint\Constraint) == false (line 48)

    $actual = $this->logicalAnd->setConstraints($constraints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testSetConstraints2()
{
    $constraints = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \PHPUnit\Framework\Constraint\Constraint) == true (line 48)
    // throw new \PHPUnit\Framework\Exception('All parameters to ' . __CLASS__ . ' must be a constraint object.') -> exception (line 49)

    $actual = $this->logicalAnd->setConstraints($constraints);
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
    // if ($returnResult) == false (line 91)
    // if (!$success) == false (line 95)

    $actual = $this->logicalAnd->evaluate($other, $description, $returnResult);
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
    // if ($returnResult) == false (line 91)
    // if (!$success) == true (line 95)

    $actual = $this->logicalAnd->evaluate($other, $description, $returnResult);
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
    // if ($returnResult) == true (line 91)

    $actual = $this->logicalAnd->evaluate($other, $description, $returnResult);
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
    // if (!$constraint->evaluate($other, $description, true)) == false (line 84)
    // if ($returnResult) == false (line 91)
    // if (!$success) == false (line 95)

    $actual = $this->logicalAnd->evaluate($other, $description, $returnResult);
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
    // if (!$constraint->evaluate($other, $description, true)) == false (line 84)
    // if ($returnResult) == false (line 91)
    // if (!$success) == true (line 95)

    $actual = $this->logicalAnd->evaluate($other, $description, $returnResult);
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
    // if (!$constraint->evaluate($other, $description, true)) == false (line 84)
    // if ($returnResult) == true (line 91)

    $actual = $this->logicalAnd->evaluate($other, $description, $returnResult);
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
    // if (!$constraint->evaluate($other, $description, true)) == true (line 84)
    // if ($returnResult) == false (line 91)
    // if (!$success) == false (line 95)

    $actual = $this->logicalAnd->evaluate($other, $description, $returnResult);
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
    // if (!$constraint->evaluate($other, $description, true)) == true (line 84)
    // if ($returnResult) == false (line 91)
    // if (!$success) == true (line 95)

    $actual = $this->logicalAnd->evaluate($other, $description, $returnResult);
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
    // if (!$constraint->evaluate($other, $description, true)) == true (line 84)
    // if ($returnResult) == true (line 91)

    $actual = $this->logicalAnd->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->logicalAnd->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key > 0) == false (line 110)

    $actual = $this->logicalAnd->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key > 0) == true (line 110)

    $actual = $this->logicalAnd->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->logicalAnd->count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCount1()
{
    // TODO: Your mock expectations here

    $actual = $this->logicalAnd->count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
