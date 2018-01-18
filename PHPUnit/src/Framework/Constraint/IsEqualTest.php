<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsEqual;

class IsEqualTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_value = null;
/**
* @var mixed
*/
protected $_delta = null;
/**
* @var mixed
*/
protected $_maxDepth = null;
/**
* @var mixed
*/
protected $_canonicalize = null;
/**
* @var mixed
*/
protected $_ignoreCase = null;
/**
* @var \PHPUnit\Framework\Constraint\IsEqual
*/
protected $isEqual;

public function setUp()
{
    parent::setUp();

    $this->_value = null;
    $this->_delta = null;
    $this->_maxDepth = null;
    $this->_canonicalize = null;
    $this->_ignoreCase = null;
    $this->isEqual = new \PHPUnit\Framework\Constraint\IsEqual($this->_value, $this->_delta, $this->_maxDepth, $this->_canonicalize, $this->_ignoreCase);
}

/**
 * @expectedException \Exception
 */
public function testEvaluate0()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->value === $other) == false (line 97)

    $actual = $this->isEqual->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\ExpectationFailedException
 */
public function testEvaluate1()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->value === $other) == false (line 97)
    // if ($returnResult) == false (line 117)
    // throw new \PHPUnit\Framework\ExpectationFailedException(\trim($description . "\n" . $f->getMessage()), $f) -> exception (line 121)

    $actual = $this->isEqual->evaluate($other, $description, $returnResult);
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
    // if ($this->value === $other) == false (line 97)
    // if ($returnResult) == true (line 117)

    $actual = $this->isEqual->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testEvaluate3()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->value === $other) == false (line 97)

    $actual = $this->isEqual->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\ExpectationFailedException
 */
public function testEvaluate4()
{
    $other = m::mock('UntypedParameter_other_');
    $description = m::mock('UntypedParameter_description_');
    $returnResult = m::mock('UntypedParameter_returnResult_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->value === $other) == false (line 97)
    // if ($returnResult) == false (line 117)
    // throw new \PHPUnit\Framework\ExpectationFailedException(\trim($description . "\n" . $f->getMessage()), $f) -> exception (line 121)

    $actual = $this->isEqual->evaluate($other, $description, $returnResult);
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
    // if ($this->value === $other) == false (line 97)
    // if ($returnResult) == true (line 117)

    $actual = $this->isEqual->evaluate($other, $description, $returnResult);
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
    // if ($this->value === $other) == false (line 97)

    $actual = $this->isEqual->evaluate($other, $description, $returnResult);
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
    // if ($this->value === $other) == true (line 97)

    $actual = $this->isEqual->evaluate($other, $description, $returnResult);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_string($this->value)) == false (line 142)
    // if ($this->delta != 0) == false (line 153)

    $actual = $this->isEqual->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_string($this->value)) == false (line 142)
    // if ($this->delta != 0) == true (line 153)

    $actual = $this->isEqual->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_string($this->value)) == true (line 142)
    // if (\strpos($this->value, "\n") !== false) == false (line 143)

    $actual = $this->isEqual->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_string($this->value)) == true (line 142)
    // if (\strpos($this->value, "\n") !== false) == true (line 143)

    $actual = $this->isEqual->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
