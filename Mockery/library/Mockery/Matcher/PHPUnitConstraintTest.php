<?php

namespace tests\Mockery\Matcher;

use Mockery as m;
use Mockery\Matcher\PHPUnitConstraint;

class PHPUnitConstraintTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_constraint = null;
/**
* @var mixed
*/
protected $_rethrow = null;
/**
* @var \Mockery\Matcher\PHPUnitConstraint
*/
protected $pHPUnitConstraint;

public function setUp()
{
    parent::setUp();

    $this->_constraint = null;
    $this->_rethrow = null;
    $this->pHPUnitConstraint = new \Mockery\Matcher\PHPUnitConstraint($this->_constraint, $this->_rethrow);
}

/**
 * @expectedException \Exception
 */
public function testMatch0()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->pHPUnitConstraint->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch1()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->rethrow) == false (line 62)

    $actual = $this->pHPUnitConstraint->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testMatch2()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->rethrow) == true (line 62)
    // throw $e -> exception (line 63)

    $actual = $this->pHPUnitConstraint->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch3()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->rethrow) == false (line 57)

    $actual = $this->pHPUnitConstraint->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testMatch4()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->rethrow) == true (line 57)
    // throw $e -> exception (line 58)

    $actual = $this->pHPUnitConstraint->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch5()
{
    $actual = m::mock('UntypedParameter_actual_');

    // TODO: Your mock expectations here

    $actual = $this->pHPUnitConstraint->match($actual);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->pHPUnitConstraint->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
