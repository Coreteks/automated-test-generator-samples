<?php

namespace tests\Psy;

use Mockery as m;
use Psy\Context;

class ContextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Context
*/
protected $context;

public function setUp()
{
    parent::setUp();

    $this->context = new \Psy\Context();
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGet0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == false (line 71)
    // Case '__class' == false (line 72)
    // Case '__namespace' == false (line 73)
    // Case '__file' == false (line 74)
    // Case '__line' == false (line 75)
    // Case '__dir' == false (line 76)
    // Default (line 82)
    // if (array_key_exists($name, $this->scopeVariables)) == false (line 83)
    // throw new \InvalidArgumentException('Unknown variable: $' . $name) -> exception (line 89)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == false (line 71)
    // Case '__class' == false (line 72)
    // Case '__namespace' == false (line 73)
    // Case '__file' == false (line 74)
    // Case '__line' == false (line 75)
    // Case '__dir' == false (line 76)
    // Default (line 82)
    // if (array_key_exists($name, $this->scopeVariables)) == true (line 83)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGet2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == false (line 71)
    // Case '__class' == false (line 72)
    // Case '__namespace' == false (line 73)
    // Case '__file' == false (line 74)
    // Case '__line' == false (line 75)
    // Case '__dir' == true (line 76)
    // if (array_key_exists($name, $this->commandScopeVariables)) == false (line 77)
    // throw new \InvalidArgumentException('Unknown variable: $' . $name) -> exception (line 89)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet3()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == false (line 71)
    // Case '__class' == false (line 72)
    // Case '__namespace' == false (line 73)
    // Case '__file' == false (line 74)
    // Case '__line' == false (line 75)
    // Case '__dir' == true (line 76)
    // if (array_key_exists($name, $this->commandScopeVariables)) == true (line 77)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGet4()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == false (line 71)
    // Case '__class' == false (line 72)
    // Case '__namespace' == false (line 73)
    // Case '__file' == false (line 74)
    // Case '__line' == true (line 75)
    // if (array_key_exists($name, $this->commandScopeVariables)) == false (line 77)
    // throw new \InvalidArgumentException('Unknown variable: $' . $name) -> exception (line 89)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet5()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == false (line 71)
    // Case '__class' == false (line 72)
    // Case '__namespace' == false (line 73)
    // Case '__file' == false (line 74)
    // Case '__line' == true (line 75)
    // if (array_key_exists($name, $this->commandScopeVariables)) == true (line 77)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGet6()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == false (line 71)
    // Case '__class' == false (line 72)
    // Case '__namespace' == false (line 73)
    // Case '__file' == true (line 74)
    // if (array_key_exists($name, $this->commandScopeVariables)) == false (line 77)
    // throw new \InvalidArgumentException('Unknown variable: $' . $name) -> exception (line 89)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet7()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == false (line 71)
    // Case '__class' == false (line 72)
    // Case '__namespace' == false (line 73)
    // Case '__file' == true (line 74)
    // if (array_key_exists($name, $this->commandScopeVariables)) == true (line 77)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGet8()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == false (line 71)
    // Case '__class' == false (line 72)
    // Case '__namespace' == true (line 73)
    // if (array_key_exists($name, $this->commandScopeVariables)) == false (line 77)
    // throw new \InvalidArgumentException('Unknown variable: $' . $name) -> exception (line 89)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet9()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == false (line 71)
    // Case '__class' == false (line 72)
    // Case '__namespace' == true (line 73)
    // if (array_key_exists($name, $this->commandScopeVariables)) == true (line 77)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGet10()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == false (line 71)
    // Case '__class' == true (line 72)
    // if (array_key_exists($name, $this->commandScopeVariables)) == false (line 77)
    // throw new \InvalidArgumentException('Unknown variable: $' . $name) -> exception (line 89)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet11()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == false (line 71)
    // Case '__class' == true (line 72)
    // if (array_key_exists($name, $this->commandScopeVariables)) == true (line 77)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGet12()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == true (line 71)
    // if (array_key_exists($name, $this->commandScopeVariables)) == false (line 77)
    // throw new \InvalidArgumentException('Unknown variable: $' . $name) -> exception (line 89)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet13()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == false (line 70)
    // Case '__method' == true (line 71)
    // if (array_key_exists($name, $this->commandScopeVariables)) == true (line 77)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGet14()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == true (line 70)
    // if (array_key_exists($name, $this->commandScopeVariables)) == false (line 77)
    // throw new \InvalidArgumentException('Unknown variable: $' . $name) -> exception (line 89)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet15()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == false (line 64)
    // Case '__function' == true (line 70)
    // if (array_key_exists($name, $this->commandScopeVariables)) == true (line 77)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGet16()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == true (line 64)
    // if (isset($this->boundObject)) == false (line 65)
    // throw new \InvalidArgumentException('Unknown variable: $' . $name) -> exception (line 89)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet17()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == false (line 58)
    // Case 'this' == true (line 64)
    // if (isset($this->boundObject)) == true (line 65)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGet18()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == true (line 58)
    // if (isset($this->lastStdout)) == false (line 59)
    // throw new \InvalidArgumentException('Unknown variable: $' . $name) -> exception (line 89)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet19()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == false (line 52)
    // Case '__out' == true (line 58)
    // if (isset($this->lastStdout)) == true (line 59)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGet20()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == true (line 52)
    // if (isset($this->lastException)) == false (line 53)
    // throw new \InvalidArgumentException('Unknown variable: $' . $name) -> exception (line 89)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet21()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == false (line 49)
    // Case '_e' == true (line 52)
    // if (isset($this->lastException)) == true (line 53)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet22()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 48)
    // Case '_' == true (line 49)

    $actual = $this->context->get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAll0()
{
    // TODO: Your mock expectations here

    $actual = $this->context->getAll();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSpecialVariables0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->lastException)) == false (line 113)
    // if (isset($this->lastStdout)) == false (line 117)
    // if (isset($this->boundObject)) == false (line 121)

    $actual = $this->context->getSpecialVariables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSpecialVariables1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->lastException)) == false (line 113)
    // if (isset($this->lastStdout)) == false (line 117)
    // if (isset($this->boundObject)) == true (line 121)

    $actual = $this->context->getSpecialVariables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSpecialVariables2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->lastException)) == false (line 113)
    // if (isset($this->lastStdout)) == true (line 117)
    // if (isset($this->boundObject)) == false (line 121)

    $actual = $this->context->getSpecialVariables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSpecialVariables3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->lastException)) == false (line 113)
    // if (isset($this->lastStdout)) == true (line 117)
    // if (isset($this->boundObject)) == true (line 121)

    $actual = $this->context->getSpecialVariables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSpecialVariables4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->lastException)) == true (line 113)
    // if (isset($this->lastStdout)) == false (line 117)
    // if (isset($this->boundObject)) == false (line 121)

    $actual = $this->context->getSpecialVariables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSpecialVariables5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->lastException)) == true (line 113)
    // if (isset($this->lastStdout)) == false (line 117)
    // if (isset($this->boundObject)) == true (line 121)

    $actual = $this->context->getSpecialVariables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSpecialVariables6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->lastException)) == true (line 113)
    // if (isset($this->lastStdout)) == true (line 117)
    // if (isset($this->boundObject)) == false (line 121)

    $actual = $this->context->getSpecialVariables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSpecialVariables7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->lastException)) == true (line 113)
    // if (isset($this->lastStdout)) == true (line 117)
    // if (isset($this->boundObject)) == true (line 121)

    $actual = $this->context->getSpecialVariables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetAll0()
{
    $vars = [];

    // TODO: Your mock expectations here

    $actual = $this->context->setAll($vars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetAll1()
{
    $vars = [];

    // TODO: Your mock expectations here

    $actual = $this->context->setAll($vars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetAll2()
{
    $vars = [];

    // TODO: Your mock expectations here

    $actual = $this->context->setAll($vars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetAll3()
{
    $vars = [];

    // TODO: Your mock expectations here

    $actual = $this->context->setAll($vars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetReturnValue0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->context->setReturnValue($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReturnValue0()
{
    // TODO: Your mock expectations here

    $actual = $this->context->getReturnValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLastException0()
{
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    $actual = $this->context->setLastException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastException0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->lastException)) == false (line 188)

    $actual = $this->context->getLastException();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGetLastException1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->lastException)) == true (line 188)
    // throw new \InvalidArgumentException('No most-recent exception') -> exception (line 189)

    $actual = $this->context->getLastException();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLastStdout0()
{
    $lastStdout = m::mock('UntypedParameter_lastStdout_');

    // TODO: Your mock expectations here

    $actual = $this->context->setLastStdout($lastStdout);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastStdout0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->lastStdout)) == false (line 214)

    $actual = $this->context->getLastStdout();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testGetLastStdout1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->lastStdout)) == true (line 214)
    // throw new \InvalidArgumentException('No most-recent output') -> exception (line 215)

    $actual = $this->context->getLastStdout();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetBoundObject0()
{
    $boundObject = m::mock('UntypedParameter_boundObject_');

    // TODO: Your mock expectations here

    $actual = $this->context->setBoundObject($boundObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBoundObject0()
{
    // TODO: Your mock expectations here

    $actual = $this->context->getBoundObject();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCommandScopeVariables0()
{
    $commandScopeVariables = [];

    // TODO: Your mock expectations here

    $actual = $this->context->setCommandScopeVariables($commandScopeVariables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCommandScopeVariables1()
{
    $commandScopeVariables = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_scalar($value) && in_array($key, self::$commandScopeNames)) == false (line 251)

    $actual = $this->context->setCommandScopeVariables($commandScopeVariables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCommandScopeVariables2()
{
    $commandScopeVariables = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_scalar($value) && in_array($key, self::$commandScopeNames)) == true (line 251)

    $actual = $this->context->setCommandScopeVariables($commandScopeVariables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCommandScopeVariables0()
{
    // TODO: Your mock expectations here

    $actual = $this->context->getCommandScopeVariables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUnusedCommandScopeVariableNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->context->getUnusedCommandScopeVariableNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsSpecialVariableName0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->context->isSpecialVariableName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
