<?php

namespace tests\Illuminate\Auth\Access;

use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Container\Container;
use Mockery as m;

class GateTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var mixed
*/
protected $_userResolver = null;
/**
* @var array
*/
protected $_abilities = [];
/**
* @var array
*/
protected $_policies = [];
/**
* @var array
*/
protected $_beforeCallbacks = [];
/**
* @var array
*/
protected $_afterCallbacks = [];
/**
* @var \Illuminate\Auth\Access\Gate
*/
protected $gate;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Contracts\Container\Container::class);
    $this->_userResolver = null;
    $this->_abilities = [];
    $this->_policies = [];
    $this->_beforeCallbacks = [];
    $this->_afterCallbacks = [];
    $this->gate = new \Illuminate\Auth\Access\Gate($this->_container, $this->_userResolver, $this->_abilities, $this->_policies, $this->_beforeCallbacks, $this->_afterCallbacks);
}

public function testHas0()
{
    $ability = m::mock('UntypedParameter_ability_');

    // TODO: Your mock expectations here

    $actual = $this->gate->has($ability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas1()
{
    $ability = m::mock('UntypedParameter_ability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->abilities[$ability])) == false (line 90)

    $actual = $this->gate->has($ability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas2()
{
    $ability = m::mock('UntypedParameter_ability_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->abilities[$ability])) == true (line 90)

    $actual = $this->gate->has($ability);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testDefine0()
{
    $ability = m::mock('UntypedParameter_ability_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_callable($callback)) == false (line 109)
    // if (is_string($callback) && \Illuminate\Support\Str::contains($callback, '@')) == false (line 111)
    // throw new \InvalidArgumentException("Callback must be a callable or a 'Class@method' string.") -> exception (line 114)

    $actual = $this->gate->define($ability, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDefine1()
{
    $ability = m::mock('UntypedParameter_ability_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_callable($callback)) == false (line 109)
    // if (is_string($callback) && \Illuminate\Support\Str::contains($callback, '@')) == true (line 111)

    $actual = $this->gate->define($ability, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDefine2()
{
    $ability = m::mock('UntypedParameter_ability_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_callable($callback)) == true (line 109)

    $actual = $this->gate->define($ability, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResource0()
{
    $name = m::mock('UntypedParameter_name_');
    $class = m::mock('UntypedParameter_class_');
    $abilities = [];

    // TODO: Your mock expectations here

    $actual = $this->gate->resource($name, $class, $abilities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResource1()
{
    $name = m::mock('UntypedParameter_name_');
    $class = m::mock('UntypedParameter_class_');
    $abilities = [];

    // TODO: Your mock expectations here

    $actual = $this->gate->resource($name, $class, $abilities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPolicy0()
{
    $class = m::mock('UntypedParameter_class_');
    $policy = m::mock('UntypedParameter_policy_');

    // TODO: Your mock expectations here

    $actual = $this->gate->policy($class, $policy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->gate->before($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfter0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->gate->after($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllows0()
{
    $ability = m::mock('UntypedParameter_ability_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    $actual = $this->gate->allows($ability, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDenies0()
{
    $ability = m::mock('UntypedParameter_ability_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    $actual = $this->gate->denies($ability, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck0()
{
    $abilities = m::mock('UntypedParameter_abilities_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    $actual = $this->gate->check($abilities, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAny0()
{
    $abilities = m::mock('UntypedParameter_abilities_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    $actual = $this->gate->any($abilities, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthorize0()
{
    $ability = m::mock('UntypedParameter_ability_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($result instanceof \Illuminate\Auth\Access\Response) == false (line 283)

    $actual = $this->gate->authorize($ability, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthorize1()
{
    $ability = m::mock('UntypedParameter_ability_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($result instanceof \Illuminate\Auth\Access\Response) == true (line 283)

    $actual = $this->gate->authorize($ability, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPolicyFor0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($class)) == false (line 411)
    // if (!is_string($class)) == false (line 415)
    // if (isset($this->policies[$class])) == false (line 419)

    $actual = $this->gate->getPolicyFor($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPolicyFor1()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($class)) == false (line 411)
    // if (!is_string($class)) == false (line 415)
    // if (isset($this->policies[$class])) == false (line 419)
    // if (is_subclass_of($class, $expected)) == false (line 424)

    $actual = $this->gate->getPolicyFor($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPolicyFor2()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($class)) == false (line 411)
    // if (!is_string($class)) == false (line 415)
    // if (isset($this->policies[$class])) == false (line 419)
    // if (is_subclass_of($class, $expected)) == true (line 424)

    $actual = $this->gate->getPolicyFor($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPolicyFor3()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($class)) == false (line 411)
    // if (!is_string($class)) == false (line 415)
    // if (isset($this->policies[$class])) == true (line 419)

    $actual = $this->gate->getPolicyFor($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPolicyFor4()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($class)) == false (line 411)
    // if (!is_string($class)) == true (line 415)

    $actual = $this->gate->getPolicyFor($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPolicyFor5()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($class)) == true (line 411)
    // if (!is_string($class)) == false (line 415)
    // if (isset($this->policies[$class])) == false (line 419)

    $actual = $this->gate->getPolicyFor($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPolicyFor6()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($class)) == true (line 411)
    // if (!is_string($class)) == false (line 415)
    // if (isset($this->policies[$class])) == false (line 419)
    // if (is_subclass_of($class, $expected)) == false (line 424)

    $actual = $this->gate->getPolicyFor($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPolicyFor7()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($class)) == true (line 411)
    // if (!is_string($class)) == false (line 415)
    // if (isset($this->policies[$class])) == false (line 419)
    // if (is_subclass_of($class, $expected)) == true (line 424)

    $actual = $this->gate->getPolicyFor($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPolicyFor8()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($class)) == true (line 411)
    // if (!is_string($class)) == false (line 415)
    // if (isset($this->policies[$class])) == true (line 419)

    $actual = $this->gate->getPolicyFor($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPolicyFor9()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_object($class)) == true (line 411)
    // if (!is_string($class)) == true (line 415)

    $actual = $this->gate->getPolicyFor($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolvePolicy0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    $actual = $this->gate->resolvePolicy($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForUser0()
{
    $user = m::mock('UntypedParameter_user_');

    // TODO: Your mock expectations here

    $actual = $this->gate->forUser($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbilities0()
{
    // TODO: Your mock expectations here

    $actual = $this->gate->abilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPolicies0()
{
    // TODO: Your mock expectations here

    $actual = $this->gate->policies();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
