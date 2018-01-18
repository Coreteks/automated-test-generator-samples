<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\RouteCollection;
use Mockery as m;

class RouteCollectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\RouteCollection
*/
protected $routeCollection;

public function setUp()
{
    parent::setUp();

    $this->routeCollection = new \Illuminate\Routing\RouteCollection();
}

public function testAdd0()
{
    $route = m::mock(\Illuminate\Routing\Route::class);

    // TODO: Your mock expectations here

    $actual = $this->routeCollection->add($route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRefreshNameLookups0()
{
    // TODO: Your mock expectations here

    $actual = $this->routeCollection->refreshNameLookups();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRefreshNameLookups1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($route->getName()) == false (line 125)

    $actual = $this->routeCollection->refreshNameLookups();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRefreshNameLookups2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($route->getName()) == true (line 125)

    $actual = $this->routeCollection->refreshNameLookups();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRefreshActionLookups0()
{
    // TODO: Your mock expectations here

    $actual = $this->routeCollection->refreshActionLookups();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRefreshActionLookups1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($route->getAction()['controller'])) == false (line 143)

    $actual = $this->routeCollection->refreshActionLookups();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRefreshActionLookups2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($route->getAction()['controller'])) == true (line 143)

    $actual = $this->routeCollection->refreshActionLookups();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
 */
public function testMatch0()
{
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($route)) == false (line 166)
    // if (count($others) > 0) == false (line 175)
    // throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException() -> exception (line 179)

    $actual = $this->routeCollection->match($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch1()
{
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($route)) == false (line 166)
    // if (count($others) > 0) == true (line 175)

    $actual = $this->routeCollection->match($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch2()
{
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($route)) == true (line 166)

    $actual = $this->routeCollection->match($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    $actual = $this->routeCollection->get($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasNamedRoute0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->routeCollection->hasNamedRoute($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetByName0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->routeCollection->getByName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetByAction0()
{
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    $actual = $this->routeCollection->getByAction($action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRoutes0()
{
    // TODO: Your mock expectations here

    $actual = $this->routeCollection->getRoutes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRoutesByMethod0()
{
    // TODO: Your mock expectations here

    $actual = $this->routeCollection->getRoutesByMethod();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRoutesByName0()
{
    // TODO: Your mock expectations here

    $actual = $this->routeCollection->getRoutesByName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIterator0()
{
    // TODO: Your mock expectations here

    $actual = $this->routeCollection->getIterator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->routeCollection->count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
