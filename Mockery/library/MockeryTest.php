<?php

namespace tests;

use Mockery as m;
use Mockery;

class MockeryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery
*/
protected $mockery;

public function setUp()
{
    parent::setUp();

    $this->mockery = new \Mockery();
}

public function testGlobalHelpers0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockery->globalHelpers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMock0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->mock($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSpy0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->spy($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInstanceMock0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->instanceMock($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNamedMock0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->namedMock($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSelf0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_container)) == false (line 138)

    $actual = $this->mockery->self();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testSelf1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_container)) == true (line 138)
    // throw new \LogicException('You have not declared any mocks yet') -> exception (line 139)

    $actual = $this->mockery->self();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_container)) == false (line 158)

    $actual = $this->mockery->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_container)) == true (line 158)

    $actual = $this->mockery->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_container)) == false (line 158)

    $actual = $this->mockery->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_container)) == true (line 158)

    $actual = $this->mockery->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFetchMock0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->fetchMock($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetContainer0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_container)) == false (line 189)

    $actual = $this->mockery->getContainer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetContainer1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_container)) == true (line 189)

    $actual = $this->mockery->getContainer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetGenerator0()
{
    $generator = m::mock(\Mockery\Generator\Generator::class);

    // TODO: Your mock expectations here

    $actual = $this->mockery->setGenerator($generator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGenerator0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_generator)) == false (line 214)

    $actual = $this->mockery->getGenerator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGenerator1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_generator)) == true (line 214)

    $actual = $this->mockery->getGenerator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultGenerator0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockery->getDefaultGenerator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLoader0()
{
    $loader = m::mock(\Mockery\Loader\Loader::class);

    // TODO: Your mock expectations here

    $actual = $this->mockery->setLoader($loader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLoader0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_loader)) == false (line 250)

    $actual = $this->mockery->getLoader();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLoader1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_loader)) == true (line 250)

    $actual = $this->mockery->getLoader();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultLoader0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockery->getDefaultLoader();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetContainer0()
{
    $container = m::mock(\Mockery\Container::class);

    // TODO: Your mock expectations here

    $actual = $this->mockery->setContainer($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResetContainer0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockery->resetContainer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAny0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockery->any();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testType0()
{
    $expected = m::mock('UntypedParameter_expected_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->type($expected);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDucktype0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->ducktype($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubset0()
{
    $part = [];
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->subset($part, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContains0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->contains($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasKey0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->hasKey($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasValue0()
{
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->hasValue($val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOn0()
{
    $closure = m::mock('UntypedParameter_closure_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->on($closure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMustBe0()
{
    $expected = m::mock('UntypedParameter_expected_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->mustBe($expected);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNot0()
{
    $expected = m::mock('UntypedParameter_expected_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->not($expected);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnyOf0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->anyOf($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNotAnyOf0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->notAnyOf($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPattern0()
{
    $expected = m::mock('UntypedParameter_expected_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->pattern($expected);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConfiguration0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_config)) == false (line 452)

    $actual = $this->mockery->getConfiguration();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConfiguration1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null(self::$_config)) == true (line 452)

    $actual = $this->mockery->getConfiguration();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs0()
{
    $method = m::mock('UntypedParameter_method_');
    $arguments = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($arguments)) == false (line 469)

    $actual = $this->mockery->formatArgs($method, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs1()
{
    $method = m::mock('UntypedParameter_method_');
    $arguments = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($arguments)) == false (line 469)

    $actual = $this->mockery->formatArgs($method, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs2()
{
    $method = m::mock('UntypedParameter_method_');
    $arguments = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($arguments)) == true (line 469)

    $actual = $this->mockery->formatArgs($method, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatObjects0()
{
    $objects = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatting) == false (line 547)
    // if (\is_null($objects)) == false (line 551)
    // if (empty($objects)) == false (line 556)

    $actual = $this->mockery->formatObjects($objects);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatObjects1()
{
    $objects = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatting) == false (line 547)
    // if (\is_null($objects)) == false (line 551)
    // if (empty($objects)) == false (line 556)

    $actual = $this->mockery->formatObjects($objects);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatObjects2()
{
    $objects = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatting) == false (line 547)
    // if (\is_null($objects)) == false (line 551)
    // if (empty($objects)) == true (line 556)

    $actual = $this->mockery->formatObjects($objects);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatObjects3()
{
    $objects = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatting) == false (line 547)
    // if (\is_null($objects)) == true (line 551)

    $actual = $this->mockery->formatObjects($objects);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatObjects4()
{
    $objects = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatting) == true (line 547)

    $actual = $this->mockery->formatObjects($objects);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseShouldReturnArgs0()
{
    $mock = m::mock(\Mockery\MockInterface::class);
    $args = m::mock('UntypedParameter_args_');
    $add = m::mock('UntypedParameter_add_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->parseShouldReturnArgs($mock, $args, $add);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseShouldReturnArgs1()
{
    $mock = m::mock(\Mockery\MockInterface::class);
    $args = m::mock('UntypedParameter_args_');
    $add = m::mock('UntypedParameter_add_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($arg)) == false (line 682)
    // if (\is_string($arg)) == false (line 687)

    $actual = $this->mockery->parseShouldReturnArgs($mock, $args, $add);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseShouldReturnArgs2()
{
    $mock = m::mock(\Mockery\MockInterface::class);
    $args = m::mock('UntypedParameter_args_');
    $add = m::mock('UntypedParameter_add_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($arg)) == false (line 682)
    // if (\is_string($arg)) == true (line 687)

    $actual = $this->mockery->parseShouldReturnArgs($mock, $args, $add);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseShouldReturnArgs3()
{
    $mock = m::mock(\Mockery\MockInterface::class);
    $args = m::mock('UntypedParameter_args_');
    $add = m::mock('UntypedParameter_add_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($arg)) == true (line 682)

    $actual = $this->mockery->parseShouldReturnArgs($mock, $args, $add);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseShouldReturnArgs4()
{
    $mock = m::mock(\Mockery\MockInterface::class);
    $args = m::mock('UntypedParameter_args_');
    $add = m::mock('UntypedParameter_add_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($arg)) == true (line 682)

    $actual = $this->mockery->parseShouldReturnArgs($mock, $args, $add);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeclareClass0()
{
    $fqn = m::mock('UntypedParameter_fqn_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->declareClass($fqn);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeclareInterface0()
{
    $fqn = m::mock('UntypedParameter_fqn_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->declareInterface($fqn);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterFileForCleanUp0()
{
    $fileName = m::mock('UntypedParameter_fileName_');

    // TODO: Your mock expectations here

    $actual = $this->mockery->registerFileForCleanUp($fileName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
