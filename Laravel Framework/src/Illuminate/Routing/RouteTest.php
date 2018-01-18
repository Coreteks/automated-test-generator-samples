<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\Route;
use Mockery as m;

class RouteTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_methods = null;
/**
* @var mixed
*/
protected $_uri = null;
/**
* @var mixed
*/
protected $_action = null;
/**
* @var \Illuminate\Routing\Route
*/
protected $route;

public function setUp()
{
    parent::setUp();

    $this->_methods = null;
    $this->_uri = null;
    $this->_action = null;
    $this->route = new \Illuminate\Routing\Route($this->_methods, $this->_uri, $this->_action);
}

/**
 * @expectedException \Exception
 */
public function testRun0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isControllerAction()) -> exception (line 168)

    $actual = $this->route->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isControllerAction()) -> exception (line 168)

    $actual = $this->route->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRun2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isControllerAction()) == false (line 168)

    $actual = $this->route->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isControllerAction()) == false (line 168)

    $actual = $this->route->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isControllerAction()) == false (line 168)

    $actual = $this->route->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRun5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isControllerAction()) == true (line 168)

    $actual = $this->route->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isControllerAction()) == true (line 168)

    $actual = $this->route->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isControllerAction()) == true (line 168)

    $actual = $this->route->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetController0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->controller) == false (line 223)

    $actual = $this->route->getController();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetController1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->controller) == true (line 223)

    $actual = $this->route->getController();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatches0()
{
    $request = m::mock(\Illuminate\Http\Request::class);
    $includingMethod = m::mock('UntypedParameter_includingMethod_');

    // TODO: Your mock expectations here

    $actual = $this->route->matches($request, $includingMethod);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatches1()
{
    $request = m::mock(\Illuminate\Http\Request::class);
    $includingMethod = m::mock('UntypedParameter_includingMethod_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$includingMethod && $validator instanceof \Illuminate\Routing\Matching\MethodValidator) == false (line 264)
    // if (!$validator->matches($this, $request)) == false (line 268)

    $actual = $this->route->matches($request, $includingMethod);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatches2()
{
    $request = m::mock(\Illuminate\Http\Request::class);
    $includingMethod = m::mock('UntypedParameter_includingMethod_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$includingMethod && $validator instanceof \Illuminate\Routing\Matching\MethodValidator) == false (line 264)
    // if (!$validator->matches($this, $request)) == true (line 268)

    $actual = $this->route->matches($request, $includingMethod);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatches3()
{
    $request = m::mock(\Illuminate\Http\Request::class);
    $includingMethod = m::mock('UntypedParameter_includingMethod_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$includingMethod && $validator instanceof \Illuminate\Routing\Matching\MethodValidator) == true (line 264)

    $actual = $this->route->matches($request, $includingMethod);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind0()
{
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->route->bind($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasParameters0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->hasParameters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasParameter0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasParameters()) == false (line 324)

    $actual = $this->route->hasParameter($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasParameter1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasParameters()) == true (line 324)

    $actual = $this->route->hasParameter($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParameter0()
{
    $name = m::mock('UntypedParameter_name_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->route->parameter($name, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetParameter0()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->route->setParameter($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForgetParameter0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->route->forgetParameter($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testParameters0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->parameters)) == false (line 379)
    // throw new \LogicException('Route is not bound.') -> exception (line 383)

    $actual = $this->route->parameters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParameters1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->parameters)) == true (line 379)

    $actual = $this->route->parameters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParametersWithoutNulls0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->parametersWithoutNulls();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParameterNames0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->parameterNames)) == false (line 405)

    $actual = $this->route->parameterNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParameterNames1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->parameterNames)) == true (line 405)

    $actual = $this->route->parameterNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSignatureParameters0()
{
    $subClass = m::mock('UntypedParameter_subClass_');

    // TODO: Your mock expectations here

    $actual = $this->route->signatureParameters($subClass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDefaults0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->route->defaults($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere0()
{
    $name = m::mock('UntypedParameter_name_');
    $expression = m::mock('UntypedParameter_expression_');

    // TODO: Your mock expectations here

    $actual = $this->route->where($name, $expression);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhere1()
{
    $name = m::mock('UntypedParameter_name_');
    $expression = m::mock('UntypedParameter_expression_');

    // TODO: Your mock expectations here

    $actual = $this->route->where($name, $expression);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFallback0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->fallback();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethods0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->methods();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHttpOnly0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->httpOnly();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHttpsOnly0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->httpsOnly();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSecure0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->secure();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDomain0()
{
    $domain = m::mock('UntypedParameter_domain_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($domain)) == false (line 554)

    $actual = $this->route->domain($domain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDomain1()
{
    $domain = m::mock('UntypedParameter_domain_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($domain)) == true (line 554)

    $actual = $this->route->domain($domain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDomain0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->getDomain();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->getPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrefix0()
{
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    $actual = $this->route->prefix($prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUri0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->uri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetUri0()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    $actual = $this->route->setUri($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testName0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->route->name($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNamed0()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($routeName = $this->getName())) == false (line 653)

    $actual = $this->route->named($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNamed1()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($routeName = $this->getName())) == false (line 653)
    // if (\Illuminate\Support\Str::is($pattern, $routeName)) == false (line 658)

    $actual = $this->route->named($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNamed2()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($routeName = $this->getName())) == false (line 653)
    // if (\Illuminate\Support\Str::is($pattern, $routeName)) == true (line 658)

    $actual = $this->route->named($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNamed3()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($routeName = $this->getName())) == true (line 653)

    $actual = $this->route->named($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUses0()
{
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    $actual = $this->route->uses($action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetActionName0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->getActionName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetActionMethod0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->getActionMethod();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAction0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->route->getAction($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetAction0()
{
    $action = [];

    // TODO: Your mock expectations here

    $actual = $this->route->setAction($action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGatherMiddleware0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->computedMiddleware)) == false (line 750)

    $actual = $this->route->gatherMiddleware();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGatherMiddleware1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->computedMiddleware)) == true (line 750)

    $actual = $this->route->gatherMiddleware();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMiddleware0()
{
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($middleware)) == false (line 769)
    // if (is_string($middleware)) == false (line 773)

    $actual = $this->route->middleware($middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMiddleware1()
{
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($middleware)) == false (line 769)
    // if (is_string($middleware)) == true (line 773)

    $actual = $this->route->middleware($middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMiddleware2()
{
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($middleware)) == true (line 769)

    $actual = $this->route->middleware($middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testControllerMiddleware0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isControllerAction()) == false (line 791)

    $actual = $this->route->controllerMiddleware();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testControllerMiddleware1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isControllerAction()) == true (line 791)

    $actual = $this->route->controllerMiddleware();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testControllerDispatcher0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container->bound(\Illuminate\Routing\Contracts\ControllerDispatcher::class)) == false (line 807)

    $actual = $this->route->controllerDispatcher();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testControllerDispatcher1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container->bound(\Illuminate\Routing\Contracts\ControllerDispatcher::class)) == true (line 807)

    $actual = $this->route->controllerDispatcher();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetValidators0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset(static::$validators)) == false (line 821)

    $actual = $this->route->getValidators();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetValidators1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset(static::$validators)) == true (line 821)

    $actual = $this->route->getValidators();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCompiled0()
{
    // TODO: Your mock expectations here

    $actual = $this->route->getCompiled();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRouter0()
{
    $router = m::mock(\Illuminate\Routing\Router::class);

    // TODO: Your mock expectations here

    $actual = $this->route->setRouter($router);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetContainer0()
{
    $container = m::mock(\Illuminate\Container\Container::class);

    // TODO: Your mock expectations here

    $actual = $this->route->setContainer($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareForSerialization0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->action['uses'] instanceof \Closure) == false (line 879)

    $actual = $this->route->prepareForSerialization();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testPrepareForSerialization1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->action['uses'] instanceof \Closure) == true (line 879)
    // throw new \LogicException("Unable to prepare route [{$this->uri}] for serialization. Uses Closure.") -> exception (line 880)

    $actual = $this->route->prepareForSerialization();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->route->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
