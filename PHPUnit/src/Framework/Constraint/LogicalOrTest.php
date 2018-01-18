<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\LogicalOr;

class LogicalOrTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\LogicalOr
*/
protected $logicalOr;

public function setUp()
{
    parent::setUp();

    $this->logicalOr = new \PHPUnit\Framework\Constraint\LogicalOr();
}

public function testFromConstraints0()
{
    $constraints = m::mock(\PHPUnit\Framework\Constraint\Constraint::class);

    // TODO: Your mock expectations here

    $actual = $this->logicalOr->fromConstraints($constraints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConstraints0()
{
    $constraints = [];

    // TODO: Your mock expectations here

    $actual = $this->logicalOr->setConstraints($constraints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConstraints1()
{
    $constraints = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \PHPUnit\Framework\Constraint\Constraint) == false (line 41)

    $actual = $this->logicalOr->setConstraints($constraints);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConstraints2()
{
    $constraints = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \PHPUnit\Framework\Constraint\Constraint) == true (line 41)

    $actual = $this->logicalOr->setConstraints($constraints);
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
    // if ($returnResult) == false (line 83)
    // if (!$success) == false (line 87)

    $actual = $this->logicalOr->evaluate($other, $description, $returnResult);
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
    // if ($returnResult) == false (line 83)
    // if (!$success) == true (line 87)

    $actual = $this->logicalOr->evaluate($other, $description, $returnResult);
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
    // if ($returnResult) == true (line 83)

    $actual = $this->logicalOr->evaluate($other, $description, $returnResult);
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
    // if ($constraint->evaluate($other, $description, true)) == false (line 76)
    // if ($returnResult) == false (line 83)
    // if (!$success) == false (line 87)

    $actual = $this->logicalOr->evaluate($other, $description, $returnResult);
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
    // if ($constraint->evaluate($other, $description, true)) == false (line 76)
    // if ($returnResult) == false (line 83)
    // if (!$success) == true (line 87)

    $actual = $this->logicalOr->evaluate($other, $description, $returnResult);
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
    // if ($constraint->evaluate($other, $description, true)) == false (line 76)
    // if ($returnResult) == true (line 83)

    $actual = $this->logicalOr->evaluate($other, $description, $returnResult);
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
    // if ($constraint->evaluate($other, $description, true)) == true (line 76)
    // if ($returnResult) == false (line 83)
    // if (!$success) == false (line 87)

    $actual = $this->logicalOr->evaluate($other, $description, $returnResult);
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
    // if ($constraint->evaluate($other, $description, true)) == true (line 76)
    // if ($returnResult) == false (line 83)
    // if (!$success) == true (line 87)

    $actual = $this->logicalOr->evaluate($other, $description, $returnResult);
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
    // if ($constraint->evaluate($other, $description, true)) == true (line 76)
    // if ($returnResult) == true (line 83)

    $actual = $this->logicalOr->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->logicalOr->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key > 0) == false (line 102)

    $actual = $this->logicalOr->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key > 0) == true (line 102)

    $actual = $this->logicalOr->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->logicalOr->count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCount1()
{
    // TODO: Your mock expectations here

    $actual = $this->logicalOr->count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
