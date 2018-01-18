<?php

namespace tests\Mockery\Exception;

use Mockery as m;
use Mockery\Exception\InvalidCountException;

class InvalidCountExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Exception\InvalidCountException
*/
protected $invalidCountException;

public function setUp()
{
    parent::setUp();

    $this->invalidCountException = new \Mockery\Exception\InvalidCountException();
}

public function testSetMock0()
{
    $mock = m::mock(\Mockery\MockInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->invalidCountException->setMock($mock);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetMethodName0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->invalidCountException->setMethodName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetActualCount0()
{
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    $actual = $this->invalidCountException->setActualCount($count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetExpectedCount0()
{
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    $actual = $this->invalidCountException->setExpectedCount($count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetExpectedCountComparative0()
{
    $comp = m::mock('UntypedParameter_comp_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array($comp, array('=', '>', '<', '>=', '<='))) == false (line 64)

    $actual = $this->invalidCountException->setExpectedCountComparative($comp);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Mockery\Exception\RuntimeException
 */
public function testSetExpectedCountComparative1()
{
    $comp = m::mock('UntypedParameter_comp_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!in_array($comp, array('=', '>', '<', '>=', '<='))) == true (line 64)
    // throw new \Mockery\Exception\RuntimeException('Illegal comparative for expected call counts set: ' . $comp) -> exception (line 65)

    $actual = $this->invalidCountException->setExpectedCountComparative($comp);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMock0()
{
    // TODO: Your mock expectations here

    $actual = $this->invalidCountException->getMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMethodName0()
{
    // TODO: Your mock expectations here

    $actual = $this->invalidCountException->getMethodName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetActualCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->invalidCountException->getActualCount();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExpectedCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->invalidCountException->getExpectedCount();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMockName0()
{
    // TODO: Your mock expectations here

    $actual = $this->invalidCountException->getMockName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExpectedCountComparative0()
{
    // TODO: Your mock expectations here

    $actual = $this->invalidCountException->getExpectedCountComparative();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
