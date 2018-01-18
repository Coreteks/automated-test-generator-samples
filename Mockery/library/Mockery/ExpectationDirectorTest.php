<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\ExpectationDirector;
use Mockery\MockInterface;

class ExpectationDirectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Mockery\MockInterface
*/
protected $_mock;
/**
* @var \Mockery\ExpectationDirector
*/
protected $expectationDirector;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_mock = m::mock(\Mockery\MockInterface::class);
    $this->expectationDirector = new \Mockery\ExpectationDirector($this->_name, $this->_mock);
}

public function testAddExpectation0()
{
    $expectation = m::mock(\Mockery\Expectation::class);

    // TODO: Your mock expectations here

    $actual = $this->expectationDirector->addExpectation($expectation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall0()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($expectation)) == false (line 91)

    $actual = $this->expectationDirector->call($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testCall1()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($expectation)) == true (line 91)
    // throw $exception -> exception (line 104)

    $actual = $this->expectationDirector->call($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->_expectations)) == false (line 117)

    $actual = $this->expectationDirector->verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->_expectations)) == false (line 117)

    $actual = $this->expectationDirector->verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->_expectations)) == true (line 117)

    $actual = $this->expectationDirector->verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->_expectations)) == true (line 117)

    $actual = $this->expectationDirector->verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindExpectation0()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->_expectations)) == false (line 138)
    // if ($expectation === null && !empty($this->_defaults)) == false (line 142)

    $actual = $this->expectationDirector->findExpectation($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindExpectation1()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->_expectations)) == false (line 138)
    // if ($expectation === null && !empty($this->_defaults)) == true (line 142)

    $actual = $this->expectationDirector->findExpectation($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindExpectation2()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->_expectations)) == true (line 138)
    // if ($expectation === null && !empty($this->_defaults)) == false (line 142)

    $actual = $this->expectationDirector->findExpectation($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindExpectation3()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->_expectations)) == true (line 138)
    // if ($expectation === null && !empty($this->_defaults)) == true (line 142)

    $actual = $this->expectationDirector->findExpectation($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Mockery\Exception
 */
public function testMakeExpectationDefault0()
{
    $expectation = m::mock(\Mockery\Expectation::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($last === $expectation) == false (line 158)
    // throw new \Mockery\Exception('Cannot turn a previously defined expectation into a default') -> exception (line 162)

    $actual = $this->expectationDirector->makeExpectationDefault($expectation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeExpectationDefault1()
{
    $expectation = m::mock(\Mockery\Expectation::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($last === $expectation) == true (line 158)

    $actual = $this->expectationDirector->makeExpectationDefault($expectation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExpectations0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectationDirector->getExpectations();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultExpectations0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectationDirector->getDefaultExpectations();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExpectationCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectationDirector->getExpectationCount();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
