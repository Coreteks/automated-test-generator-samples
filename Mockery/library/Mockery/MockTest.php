<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\Mock;

class MockTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Mock
*/
protected $mock;

public function setUp()
{
    parent::setUp();

    $this->mock = new \Mockery\Mock();
}

public function testMockery_init0()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == false (line 168)
    // if (!is_null($partialObject)) == false (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == false (line 176)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init1()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == false (line 168)
    // if (!is_null($partialObject)) == false (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == true (line 176)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init2()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == false (line 168)
    // if (!is_null($partialObject)) == false (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == true (line 176)
    // if ($method->isPublic() && !$method->isStatic()) == false (line 178)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init3()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == false (line 168)
    // if (!is_null($partialObject)) == false (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == true (line 176)
    // if ($method->isPublic() && !$method->isStatic()) == true (line 178)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init4()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == false (line 168)
    // if (!is_null($partialObject)) == true (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == false (line 176)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init5()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == false (line 168)
    // if (!is_null($partialObject)) == true (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == true (line 176)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init6()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == false (line 168)
    // if (!is_null($partialObject)) == true (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == true (line 176)
    // if ($method->isPublic() && !$method->isStatic()) == false (line 178)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init7()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == false (line 168)
    // if (!is_null($partialObject)) == true (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == true (line 176)
    // if ($method->isPublic() && !$method->isStatic()) == true (line 178)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init8()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == true (line 168)
    // if (!is_null($partialObject)) == false (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == false (line 176)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init9()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == true (line 168)
    // if (!is_null($partialObject)) == false (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == true (line 176)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init10()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == true (line 168)
    // if (!is_null($partialObject)) == false (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == true (line 176)
    // if ($method->isPublic() && !$method->isStatic()) == false (line 178)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init11()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == true (line 168)
    // if (!is_null($partialObject)) == false (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == true (line 176)
    // if ($method->isPublic() && !$method->isStatic()) == true (line 178)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init12()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == true (line 168)
    // if (!is_null($partialObject)) == true (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == false (line 176)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init13()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == true (line 168)
    // if (!is_null($partialObject)) == true (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == true (line 176)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init14()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == true (line 168)
    // if (!is_null($partialObject)) == true (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == true (line 176)
    // if ($method->isPublic() && !$method->isStatic()) == false (line 178)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_init15()
{
    $container = m::mock(\Mockery\Container::class);
    $partialObject = m::mock('UntypedParameter_partialObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($container)) == true (line 168)
    // if (!is_null($partialObject)) == true (line 172)
    // if (!\Mockery::getConfiguration()->mockingNonExistentMethodsAllowed()) == true (line 176)
    // if ($method->isPublic() && !$method->isStatic()) == true (line 178)

    $actual = $this->mock->mockery_init($container, $partialObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldReceive0()
{
    $methodNames = m::mock('UntypedParameter_methodNames_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($methodNames) === 0) == false (line 194)

    $actual = $this->mock->shouldReceive($methodNames);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldReceive1()
{
    $methodNames = m::mock('UntypedParameter_methodNames_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($methodNames) === 0) == false (line 194)
    // if ("" == $method) == false (line 199)

    $actual = $this->mock->shouldReceive($methodNames);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testShouldReceive2()
{
    $methodNames = m::mock('UntypedParameter_methodNames_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($methodNames) === 0) == false (line 194)
    // if ("" == $method) == true (line 199)
    // throw new \InvalidArgumentException("Received empty method name") -> exception (line 200)

    $actual = $this->mock->shouldReceive($methodNames);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldReceive3()
{
    $methodNames = m::mock('UntypedParameter_methodNames_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($methodNames) === 0) == true (line 194)

    $actual = $this->mock->shouldReceive($methodNames);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllows0()
{
    $something = m::mock('UntypedParameter_something_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($something)) == false (line 241)
    // if (empty($something)) == false (line 245)

    $actual = $this->mock->allows($something);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllows1()
{
    $something = m::mock('UntypedParameter_something_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($something)) == false (line 241)
    // if (empty($something)) == false (line 245)

    $actual = $this->mock->allows($something);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllows2()
{
    $something = m::mock('UntypedParameter_something_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($something)) == false (line 241)
    // if (empty($something)) == true (line 245)

    $actual = $this->mock->allows($something);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllows3()
{
    $something = m::mock('UntypedParameter_something_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($something)) == true (line 241)

    $actual = $this->mock->allows($something);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExpects0()
{
    $something = m::mock('UntypedParameter_something_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($something)) == false (line 262)

    $actual = $this->mock->expects($something);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExpects1()
{
    $something = m::mock('UntypedParameter_something_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($something)) == true (line 262)

    $actual = $this->mock->expects($something);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldNotReceive0()
{
    $methodNames = m::mock('UntypedParameter_methodNames_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($methodNames) === 0) == false (line 277)

    $actual = $this->mock->shouldNotReceive($methodNames);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldNotReceive1()
{
    $methodNames = m::mock('UntypedParameter_methodNames_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($methodNames) === 0) == true (line 277)

    $actual = $this->mock->shouldNotReceive($methodNames);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldAllowMockingMethod0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    $actual = $this->mock->shouldAllowMockingMethod($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldIgnoreMissing0()
{
    $returnValue = m::mock('UntypedParameter_returnValue_');

    // TODO: Your mock expectations here

    $actual = $this->mock->shouldIgnoreMissing($returnValue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAsUndefined0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->asUndefined();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldAllowMockingProtectedMethods0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->shouldAllowMockingProtectedMethods();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldDeferMissing0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->shouldDeferMissing();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakePartial0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->makePartial();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testByDefault0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->byDefault();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testByDefault1()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->byDefault();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testByDefault2()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->byDefault();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = [];

    // TODO: Your mock expectations here

    $actual = $this->mock->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = [];

    // TODO: Your mock expectations here

    $actual = $this->mock->__callStatic($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_verify0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_mockery_verified) == false (line 397)
    // if (isset($this->_mockery_ignoreVerification) && $this->_mockery_ignoreVerification == true) == false (line 400)

    $actual = $this->mock->mockery_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_verify1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_mockery_verified) == false (line 397)
    // if (isset($this->_mockery_ignoreVerification) && $this->_mockery_ignoreVerification == true) == false (line 400)

    $actual = $this->mock->mockery_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_verify2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_mockery_verified) == false (line 397)
    // if (isset($this->_mockery_ignoreVerification) && $this->_mockery_ignoreVerification == true) == true (line 400)

    $actual = $this->mock->mockery_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_verify3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_mockery_verified) == true (line 397)

    $actual = $this->mock->mockery_verify();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_thrownExceptions0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_thrownExceptions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_teardown0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_teardown();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_allocateOrder0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_allocateOrder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_setGroup0()
{
    $group = m::mock('UntypedParameter_group_');
    $order = m::mock('UntypedParameter_order_');

    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_setGroup($group, $order);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getGroups0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_getGroups();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_setCurrentOrder0()
{
    $order = m::mock('UntypedParameter_order_');

    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_setCurrentOrder($order);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getCurrentOrder0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_getCurrentOrder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_validateOrder0()
{
    $method = m::mock('UntypedParameter_method_');
    $order = m::mock('UntypedParameter_order_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($order < $this->_mockery_currentOrder) == false (line 492)

    $actual = $this->mock->mockery_validateOrder($method, $order);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testMockery_validateOrder1()
{
    $method = m::mock('UntypedParameter_method_');
    $order = m::mock('UntypedParameter_order_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($order < $this->_mockery_currentOrder) == true (line 492)
    // throw $exception -> exception (line 502)

    $actual = $this->mock->mockery_validateOrder($method, $order);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getExpectationCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_getExpectationCount();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getExpectationCount1()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_getExpectationCount();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_setExpectationsFor0()
{
    $method = m::mock('UntypedParameter_method_');
    $director = m::mock(\Mockery\ExpectationDirector::class);

    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_setExpectationsFor($method, $director);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getExpectationsFor0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_mockery_expectations[$method])) == false (line 540)

    $actual = $this->mock->mockery_getExpectationsFor($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getExpectationsFor1()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_mockery_expectations[$method])) == true (line 540)

    $actual = $this->mock->mockery_getExpectationsFor($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_findExpectation0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_mockery_expectations[$method])) == false (line 554)

    $actual = $this->mock->mockery_findExpectation($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_findExpectation1()
{
    $method = m::mock('UntypedParameter_method_');
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_mockery_expectations[$method])) == true (line 554)

    $actual = $this->mock->mockery_findExpectation($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getContainer0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_getContainer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getName0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getMockableProperties0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_getMockableProperties();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === stripos($name, '_mockery_') && method_exists(get_parent_class($this), '__isset')) == false (line 592)

    $actual = $this->mock->__isset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === stripos($name, '_mockery_') && method_exists(get_parent_class($this), '__isset')) == true (line 592)

    $actual = $this->mock->__isset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getExpectations0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_getExpectations();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_callSubjectMethod0()
{
    $name = m::mock('UntypedParameter_name_');
    $args = [];

    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_callSubjectMethod($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getMockableMethods0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_getMockableMethods();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_isAnonymous0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_isAnonymous();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__wakeup0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->__wakeup();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    $actual = $this->mock->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getMethod0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mock->mockery_getMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getMethod1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->getName() == $name) == false (line 662)

    $actual = $this->mock->mockery_getMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_getMethod2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->getName() == $name) == true (line 662)

    $actual = $this->mock->mockery_getMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == false (line 696)
    // Case 'int' == false (line 697)
    // Case 'float' == false (line 698)
    // Case 'bool' == false (line 699)
    // Case 'array' == false (line 700)
    // Case 'callable' == false (line 702)
    // Case 'Closure' == false (line 703)
    // Case 'Traversable' == false (line 707)
    // Case 'Generator' == false (line 708)
    // Case 'self' == false (line 713)
    // Case 'void' == false (line 716)
    // Case 'object' == false (line 719)
    // Default (line 724)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == false (line 696)
    // Case 'int' == false (line 697)
    // Case 'float' == false (line 698)
    // Case 'bool' == false (line 699)
    // Case 'array' == false (line 700)
    // Case 'callable' == false (line 702)
    // Case 'Closure' == false (line 703)
    // Case 'Traversable' == false (line 707)
    // Case 'Generator' == false (line 708)
    // Case 'self' == false (line 713)
    // Case 'void' == false (line 716)
    // Case 'object' == true (line 719)
    // if (version_compare(PHP_VERSION, '7.2.0-dev') >= 0) == false (line 720)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == false (line 696)
    // Case 'int' == false (line 697)
    // Case 'float' == false (line 698)
    // Case 'bool' == false (line 699)
    // Case 'array' == false (line 700)
    // Case 'callable' == false (line 702)
    // Case 'Closure' == false (line 703)
    // Case 'Traversable' == false (line 707)
    // Case 'Generator' == false (line 708)
    // Case 'self' == false (line 713)
    // Case 'void' == false (line 716)
    // Case 'object' == true (line 719)
    // if (version_compare(PHP_VERSION, '7.2.0-dev') >= 0) == true (line 720)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod3()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == false (line 696)
    // Case 'int' == false (line 697)
    // Case 'float' == false (line 698)
    // Case 'bool' == false (line 699)
    // Case 'array' == false (line 700)
    // Case 'callable' == false (line 702)
    // Case 'Closure' == false (line 703)
    // Case 'Traversable' == false (line 707)
    // Case 'Generator' == false (line 708)
    // Case 'self' == false (line 713)
    // Case 'void' == true (line 716)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod4()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == false (line 696)
    // Case 'int' == false (line 697)
    // Case 'float' == false (line 698)
    // Case 'bool' == false (line 699)
    // Case 'array' == false (line 700)
    // Case 'callable' == false (line 702)
    // Case 'Closure' == false (line 703)
    // Case 'Traversable' == false (line 707)
    // Case 'Generator' == false (line 708)
    // Case 'self' == true (line 713)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod5()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == false (line 696)
    // Case 'int' == false (line 697)
    // Case 'float' == false (line 698)
    // Case 'bool' == false (line 699)
    // Case 'array' == false (line 700)
    // Case 'callable' == false (line 702)
    // Case 'Closure' == false (line 703)
    // Case 'Traversable' == false (line 707)
    // Case 'Generator' == true (line 708)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod6()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == false (line 696)
    // Case 'int' == false (line 697)
    // Case 'float' == false (line 698)
    // Case 'bool' == false (line 699)
    // Case 'array' == false (line 700)
    // Case 'callable' == false (line 702)
    // Case 'Closure' == false (line 703)
    // Case 'Traversable' == true (line 707)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod7()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == false (line 696)
    // Case 'int' == false (line 697)
    // Case 'float' == false (line 698)
    // Case 'bool' == false (line 699)
    // Case 'array' == false (line 700)
    // Case 'callable' == false (line 702)
    // Case 'Closure' == true (line 703)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod8()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == false (line 696)
    // Case 'int' == false (line 697)
    // Case 'float' == false (line 698)
    // Case 'bool' == false (line 699)
    // Case 'array' == false (line 700)
    // Case 'callable' == true (line 702)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod9()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == false (line 696)
    // Case 'int' == false (line 697)
    // Case 'float' == false (line 698)
    // Case 'bool' == false (line 699)
    // Case 'array' == true (line 700)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod10()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == false (line 696)
    // Case 'int' == false (line 697)
    // Case 'float' == false (line 698)
    // Case 'bool' == true (line 699)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod11()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == false (line 696)
    // Case 'int' == false (line 697)
    // Case 'float' == true (line 698)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod12()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == false (line 696)
    // Case 'int' == true (line 697)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod13()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == false (line 695)
    // Case 'string' == true (line 696)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod14()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == false (line 689)
    // switch ($type) (line 694)
    // Case '' == true (line 695)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod15()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == false (line 682)
    // if ($returnType->allowsNull()) == true (line 689)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod16()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == false (line 677)
    // if (!$rm || !$rm->hasReturnType()) == true (line 682)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMockery_returnValueForMethod17()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0.0-dev') < 0) == true (line 677)

    $actual = $this->mock->mockery_returnValueForMethod($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldHaveReceived0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === null) == false (line 731)
    // if (null !== $args) == false (line 736)

    $actual = $this->mock->shouldHaveReceived($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldHaveReceived1()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === null) == false (line 731)
    // if (null !== $args) == true (line 736)

    $actual = $this->mock->shouldHaveReceived($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldHaveReceived2()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === null) == true (line 731)

    $actual = $this->mock->shouldHaveReceived($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldNotHaveReceived0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === null) == false (line 748)
    // if (null !== $args) == false (line 753)

    $actual = $this->mock->shouldNotHaveReceived($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldNotHaveReceived1()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === null) == false (line 748)
    // if (null !== $args) == true (line 753)

    $actual = $this->mock->shouldNotHaveReceived($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldNotHaveReceived2()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method === null) == true (line 748)

    $actual = $this->mock->shouldNotHaveReceived($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
