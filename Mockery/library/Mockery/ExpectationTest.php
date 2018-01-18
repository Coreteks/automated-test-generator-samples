<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\Expectation;
use Mockery\MockInterface;

class ExpectationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_mock;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Mockery\Expectation
*/
protected $expectation;

public function setUp()
{
    parent::setUp();

    $this->_mock = m::mock(\Mockery\MockInterface::class);
    $this->_name = null;
    $this->expectation = new \Mockery\Expectation($this->_mock, $this->_name);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerifyCall0()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (true === $this->_passthru) == false (line 182)

    $actual = $this->expectation->verifyCall($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerifyCall1()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (true === $this->_passthru) == true (line 182)

    $actual = $this->expectation->verifyCall($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsEligible0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->isEligible();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsEligible1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$validator->isEligible($this->_actualCount)) == false (line 268)

    $actual = $this->expectation->isEligible();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsEligible2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$validator->isEligible($this->_actualCount)) == true (line 268)

    $actual = $this->expectation->isEligible();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsCallCountConstrained0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->isCallCountConstrained();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidateOrder0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_orderNumber) == false (line 292)
    // if ($this->_globalOrderNumber) == false (line 295)

    $actual = $this->expectation->validateOrder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidateOrder1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_orderNumber) == false (line 292)
    // if ($this->_globalOrderNumber) == true (line 295)

    $actual = $this->expectation->validateOrder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidateOrder2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_orderNumber) == true (line 292)
    // if ($this->_globalOrderNumber) == false (line 295)

    $actual = $this->expectation->validateOrder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidateOrder3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_orderNumber) == true (line 292)
    // if ($this->_globalOrderNumber) == true (line 295)

    $actual = $this->expectation->validateOrder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify1()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatchArgs0()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isArgumentListMatcher()) == false (line 330)
    // if ($argCount !== count((array) $this->_expectedArgs)) == false (line 334)
    // for (...) == false (line 337)

    $actual = $this->expectation->matchArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatchArgs1()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isArgumentListMatcher()) == false (line 330)
    // if ($argCount !== count((array) $this->_expectedArgs)) == false (line 334)
    // for (...) == true (line 337)
    // if (!$this->_matchArg($this->_expectedArgs[$i], $param)) == false (line 339)
    // for (...) == false (line 337)

    $actual = $this->expectation->matchArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatchArgs2()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isArgumentListMatcher()) == false (line 330)
    // if ($argCount !== count((array) $this->_expectedArgs)) == false (line 334)
    // for (...) == true (line 337)
    // if (!$this->_matchArg($this->_expectedArgs[$i], $param)) == true (line 339)

    $actual = $this->expectation->matchArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatchArgs3()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isArgumentListMatcher()) == false (line 330)
    // if ($argCount !== count((array) $this->_expectedArgs)) == true (line 334)

    $actual = $this->expectation->matchArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatchArgs4()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isArgumentListMatcher()) == true (line 330)

    $actual = $this->expectation->matchArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWith0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->expectation->with($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testWithArgs0()
{
    $argsOrClosure = m::mock('UntypedParameter_argsOrClosure_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($argsOrClosure)) == false (line 424)
    // if ($argsOrClosure instanceof \Closure) == false (line 426)
    // throw new \InvalidArgumentException(sprintf('Call to %s with an invalid argument (%s), only array and ' . 'closure are allowed', __METHOD__, $argsOrClosure)) -> exception (line 429)

    $actual = $this->expectation->withArgs($argsOrClosure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithArgs1()
{
    $argsOrClosure = m::mock('UntypedParameter_argsOrClosure_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($argsOrClosure)) == false (line 424)
    // if ($argsOrClosure instanceof \Closure) == true (line 426)

    $actual = $this->expectation->withArgs($argsOrClosure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithArgs2()
{
    $argsOrClosure = m::mock('UntypedParameter_argsOrClosure_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($argsOrClosure)) == true (line 424)

    $actual = $this->expectation->withArgs($argsOrClosure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithNoArgs0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->withNoArgs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithAnyArgs0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->withAnyArgs();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndReturn0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->expectation->andReturn($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndReturns0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->expectation->andReturns($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndReturnSelf0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->andReturnSelf();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndReturnValues0()
{
    $values = [];

    // TODO: Your mock expectations here

    $actual = $this->expectation->andReturnValues($values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndReturnUsing0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->expectation->andReturnUsing($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndReturnUndefined0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->andReturnUndefined();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndReturnNull0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->andReturnNull();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndReturnFalse0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->andReturnFalse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndReturnTrue0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->andReturnTrue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndThrow0()
{
    $exception = m::mock('UntypedParameter_exception_');
    $message = m::mock('UntypedParameter_message_');
    $code = m::mock('UntypedParameter_code_');
    $previous = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($exception)) == false (line 559)

    $actual = $this->expectation->andThrow($exception, $message, $code, $previous);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndThrow1()
{
    $exception = m::mock('UntypedParameter_exception_');
    $message = m::mock('UntypedParameter_message_');
    $code = m::mock('UntypedParameter_code_');
    $previous = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($exception)) == true (line 559)

    $actual = $this->expectation->andThrow($exception, $message, $code, $previous);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndThrows0()
{
    $exception = m::mock('UntypedParameter_exception_');
    $message = m::mock('UntypedParameter_message_');
    $code = m::mock('UntypedParameter_code_');
    $previous = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    $actual = $this->expectation->andThrows($exception, $message, $code, $previous);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndThrowExceptions0()
{
    $exceptions = [];

    // TODO: Your mock expectations here

    $actual = $this->expectation->andThrowExceptions($exceptions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndThrowExceptions1()
{
    $exceptions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_object($exception)) == false (line 582)

    $actual = $this->expectation->andThrowExceptions($exceptions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Mockery\Exception
 */
public function testAndThrowExceptions2()
{
    $exceptions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_object($exception)) == true (line 582)
    // throw new \Mockery\Exception('You must pass an array of exception objects to andThrowExceptions') -> exception (line 583)

    $actual = $this->expectation->andThrowExceptions($exceptions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAndSet0()
{
    $name = m::mock('UntypedParameter_name_');
    $values = m::mock('UntypedParameter_values_');

    // TODO: Your mock expectations here

    $actual = $this->expectation->andSet($name, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet0()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->expectation->set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testZeroOrMoreTimes0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->zeroOrMoreTimes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimes0()
{
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($limit)) == false (line 634)
    // if (!is_int($limit)) == false (line 637)

    $actual = $this->expectation->times($limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testTimes1()
{
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($limit)) == false (line 634)
    // if (!is_int($limit)) == true (line 637)
    // throw new \InvalidArgumentException('The passed Times limit should be an integer value') -> exception (line 638)

    $actual = $this->expectation->times($limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTimes2()
{
    $limit = m::mock('UntypedParameter_limit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($limit)) == true (line 634)

    $actual = $this->expectation->times($limit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNever0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->never();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnce0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->once();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTwice0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->twice();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAtLeast0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->atLeast();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAtMost0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->atMost();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBetween0()
{
    $minimum = m::mock('UntypedParameter_minimum_');
    $maximum = m::mock('UntypedParameter_maximum_');

    // TODO: Your mock expectations here

    $actual = $this->expectation->between($minimum, $maximum);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBecause0()
{
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    $actual = $this->expectation->because($message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrdered0()
{
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_globally) == false (line 729)

    $actual = $this->expectation->ordered($group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOrdered1()
{
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_globally) == true (line 729)

    $actual = $this->expectation->ordered($group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGlobally0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->globally();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOrderNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->getOrderNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testByDefault0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($director)) == false (line 788)

    $actual = $this->expectation->byDefault();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testByDefault1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($director)) == true (line 788)

    $actual = $this->expectation->byDefault();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMock0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->getMock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPassthru0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_mock instanceof \Mockery\Mock) == false (line 812)

    $actual = $this->expectation->passthru();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Mockery\Exception
 */
public function testPassthru1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_mock instanceof \Mockery\Mock) == true (line 812)
    // throw new \Mockery\Exception('Mock Objects not created from a loaded/existing class are ' . 'incapable of passing method calls through to a parent class') -> exception (line 813)

    $actual = $this->expectation->passthru();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__clone0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->__clone();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__clone1()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->__clone();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExceptionMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectation->getExceptionMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
