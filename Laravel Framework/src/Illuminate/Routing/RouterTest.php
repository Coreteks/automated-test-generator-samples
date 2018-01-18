<?php

namespace tests\Illuminate\Routing;

use Illuminate\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Routing\Router;
use Mockery as m;

class RouterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_events;
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Illuminate\Routing\Router
*/
protected $router;

public function setUp()
{
    parent::setUp();

    $this->_events = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);
    $this->_container = m::mock(\Illuminate\Container\Container::class);
    $this->router = new \Illuminate\Routing\Router($this->_events, $this->_container);
}

public function testGet0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    $actual = $this->router->get($uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPost0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    $actual = $this->router->post($uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    $actual = $this->router->put($uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPatch0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    $actual = $this->router->patch($uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    $actual = $this->router->delete($uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOptions0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    $actual = $this->router->options($uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAny0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    $actual = $this->router->any($uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFallback0()
{
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    $actual = $this->router->fallback($action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRedirect0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $destination = m::mock('UntypedParameter_destination_');
    $status = m::mock('UntypedParameter_status_');

    // TODO: Your mock expectations here

    $actual = $this->router->redirect($uri, $destination, $status);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testView0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $view = m::mock('UntypedParameter_view_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->router->view($uri, $view, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch0()
{
    $methods = m::mock('UntypedParameter_methods_');
    $uri = m::mock('UntypedParameter_uri_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    $actual = $this->router->match($methods, $uri, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResources0()
{
    $resources = [];

    // TODO: Your mock expectations here

    $actual = $this->router->resources($resources);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResources1()
{
    $resources = [];

    // TODO: Your mock expectations here

    $actual = $this->router->resources($resources);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResource0()
{
    $name = m::mock('UntypedParameter_name_');
    $controller = m::mock('UntypedParameter_controller_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container && $this->container->bound(\Illuminate\Routing\ResourceRegistrar::class)) == false (line 296)

    $actual = $this->router->resource($name, $controller, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResource1()
{
    $name = m::mock('UntypedParameter_name_');
    $controller = m::mock('UntypedParameter_controller_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->container && $this->container->bound(\Illuminate\Routing\ResourceRegistrar::class)) == true (line 296)

    $actual = $this->router->resource($name, $controller, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApiResources0()
{
    $resources = [];

    // TODO: Your mock expectations here

    $actual = $this->router->apiResources($resources);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApiResources1()
{
    $resources = [];

    // TODO: Your mock expectations here

    $actual = $this->router->apiResources($resources);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApiResource0()
{
    $name = m::mock('UntypedParameter_name_');
    $controller = m::mock('UntypedParameter_controller_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->router->apiResource($name, $controller, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGroup0()
{
    $attributes = [];
    $routes = m::mock('UntypedParameter_routes_');

    // TODO: Your mock expectations here

    $actual = $this->router->group($attributes, $routes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMergeWithLastGroup0()
{
    $new = m::mock('UntypedParameter_new_');

    // TODO: Your mock expectations here

    $actual = $this->router->mergeWithLastGroup($new);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastGroupPrefix0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->groupStack)) == false (line 404)

    $actual = $this->router->getLastGroupPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastGroupPrefix1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->groupStack)) == true (line 404)

    $actual = $this->router->getLastGroupPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRespondWithRoute0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->router->respondWithRoute($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch0()
{
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->router->dispatch($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatchToRoute0()
{
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->router->dispatchToRoute($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGatherRouteMiddleware0()
{
    $route = m::mock(\Illuminate\Routing\Route::class);

    // TODO: Your mock expectations here

    $actual = $this->router->gatherRouteMiddleware($route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareResponse0()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    $actual = $this->router->prepareResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse0()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == false (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == false (line 714)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response && ($response instanceof \Illuminate\Contracts\Support\Arrayable || $response instanceof \Illuminate\Contracts\Support\Jsonable || $response instanceof \ArrayObject || $response instanceof \JsonSerializable || is_array($response))) == false (line 716)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response) == false (line 723)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == false (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse1()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == false (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == false (line 714)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response && ($response instanceof \Illuminate\Contracts\Support\Arrayable || $response instanceof \Illuminate\Contracts\Support\Jsonable || $response instanceof \ArrayObject || $response instanceof \JsonSerializable || is_array($response))) == false (line 716)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response) == false (line 723)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == true (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse2()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == false (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == false (line 714)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response && ($response instanceof \Illuminate\Contracts\Support\Arrayable || $response instanceof \Illuminate\Contracts\Support\Jsonable || $response instanceof \ArrayObject || $response instanceof \JsonSerializable || is_array($response))) == false (line 716)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response) == true (line 723)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == false (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse3()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == false (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == false (line 714)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response && ($response instanceof \Illuminate\Contracts\Support\Arrayable || $response instanceof \Illuminate\Contracts\Support\Jsonable || $response instanceof \ArrayObject || $response instanceof \JsonSerializable || is_array($response))) == false (line 716)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response) == true (line 723)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == true (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse4()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == false (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == false (line 714)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response && ($response instanceof \Illuminate\Contracts\Support\Arrayable || $response instanceof \Illuminate\Contracts\Support\Jsonable || $response instanceof \ArrayObject || $response instanceof \JsonSerializable || is_array($response))) == true (line 716)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == false (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse5()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == false (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == false (line 714)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response && ($response instanceof \Illuminate\Contracts\Support\Arrayable || $response instanceof \Illuminate\Contracts\Support\Jsonable || $response instanceof \ArrayObject || $response instanceof \JsonSerializable || is_array($response))) == true (line 716)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == true (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse6()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == false (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == true (line 714)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == false (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse7()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == false (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == true (line 714)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == true (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse8()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == true (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == false (line 714)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response && ($response instanceof \Illuminate\Contracts\Support\Arrayable || $response instanceof \Illuminate\Contracts\Support\Jsonable || $response instanceof \ArrayObject || $response instanceof \JsonSerializable || is_array($response))) == false (line 716)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response) == false (line 723)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == false (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse9()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == true (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == false (line 714)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response && ($response instanceof \Illuminate\Contracts\Support\Arrayable || $response instanceof \Illuminate\Contracts\Support\Jsonable || $response instanceof \ArrayObject || $response instanceof \JsonSerializable || is_array($response))) == false (line 716)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response) == false (line 723)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == true (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse10()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == true (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == false (line 714)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response && ($response instanceof \Illuminate\Contracts\Support\Arrayable || $response instanceof \Illuminate\Contracts\Support\Jsonable || $response instanceof \ArrayObject || $response instanceof \JsonSerializable || is_array($response))) == false (line 716)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response) == true (line 723)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == false (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse11()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == true (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == false (line 714)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response && ($response instanceof \Illuminate\Contracts\Support\Arrayable || $response instanceof \Illuminate\Contracts\Support\Jsonable || $response instanceof \ArrayObject || $response instanceof \JsonSerializable || is_array($response))) == false (line 716)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response) == true (line 723)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == true (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse12()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == true (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == false (line 714)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response && ($response instanceof \Illuminate\Contracts\Support\Arrayable || $response instanceof \Illuminate\Contracts\Support\Jsonable || $response instanceof \ArrayObject || $response instanceof \JsonSerializable || is_array($response))) == true (line 716)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == false (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse13()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == true (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == false (line 714)
    // if (!$response instanceof \Symfony\Component\HttpFoundation\Response && ($response instanceof \Illuminate\Contracts\Support\Arrayable || $response instanceof \Illuminate\Contracts\Support\Jsonable || $response instanceof \ArrayObject || $response instanceof \JsonSerializable || is_array($response))) == true (line 716)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == true (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse14()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == true (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == true (line 714)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == false (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToResponse15()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($response instanceof \Illuminate\Contracts\Support\Responsable) == true (line 710)
    // if ($response instanceof \Psr\Http\Message\ResponseInterface) == true (line 714)
    // if ($response->getStatusCode() === \Illuminate\Http\Response::HTTP_NOT_MODIFIED) == true (line 727)

    $actual = $this->router->toResponse($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubstituteBindings0()
{
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    $actual = $this->router->substituteBindings($route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubstituteBindings1()
{
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->binders[$key])) == false (line 743)

    $actual = $this->router->substituteBindings($route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubstituteBindings2()
{
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->binders[$key])) == true (line 743)

    $actual = $this->router->substituteBindings($route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubstituteImplicitBindings0()
{
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    $actual = $this->router->substituteImplicitBindings($route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatched0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->router->matched($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMiddleware0()
{
    // TODO: Your mock expectations here

    $actual = $this->router->getMiddleware();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAliasMiddleware0()
{
    $name = m::mock('UntypedParameter_name_');
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    $actual = $this->router->aliasMiddleware($name, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMiddlewareGroup0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->router->hasMiddlewareGroup($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMiddlewareGroups0()
{
    // TODO: Your mock expectations here

    $actual = $this->router->getMiddlewareGroups();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMiddlewareGroup0()
{
    $name = m::mock('UntypedParameter_name_');
    $middleware = [];

    // TODO: Your mock expectations here

    $actual = $this->router->middlewareGroup($name, $middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrependMiddlewareToGroup0()
{
    $group = m::mock('UntypedParameter_group_');
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->middlewareGroups[$group]) && !in_array($middleware, $this->middlewareGroups[$group])) == false (line 856)

    $actual = $this->router->prependMiddlewareToGroup($group, $middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrependMiddlewareToGroup1()
{
    $group = m::mock('UntypedParameter_group_');
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->middlewareGroups[$group]) && !in_array($middleware, $this->middlewareGroups[$group])) == true (line 856)

    $actual = $this->router->prependMiddlewareToGroup($group, $middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushMiddlewareToGroup0()
{
    $group = m::mock('UntypedParameter_group_');
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_key_exists($group, $this->middlewareGroups)) == false (line 874)
    // if (!in_array($middleware, $this->middlewareGroups[$group])) == false (line 878)

    $actual = $this->router->pushMiddlewareToGroup($group, $middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushMiddlewareToGroup1()
{
    $group = m::mock('UntypedParameter_group_');
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_key_exists($group, $this->middlewareGroups)) == false (line 874)
    // if (!in_array($middleware, $this->middlewareGroups[$group])) == true (line 878)

    $actual = $this->router->pushMiddlewareToGroup($group, $middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushMiddlewareToGroup2()
{
    $group = m::mock('UntypedParameter_group_');
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_key_exists($group, $this->middlewareGroups)) == true (line 874)
    // if (!in_array($middleware, $this->middlewareGroups[$group])) == false (line 878)

    $actual = $this->router->pushMiddlewareToGroup($group, $middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushMiddlewareToGroup3()
{
    $group = m::mock('UntypedParameter_group_');
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_key_exists($group, $this->middlewareGroups)) == true (line 874)
    // if (!in_array($middleware, $this->middlewareGroups[$group])) == true (line 878)

    $actual = $this->router->pushMiddlewareToGroup($group, $middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind0()
{
    $key = m::mock('UntypedParameter_key_');
    $binder = m::mock('UntypedParameter_binder_');

    // TODO: Your mock expectations here

    $actual = $this->router->bind($key, $binder);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testModel0()
{
    $key = m::mock('UntypedParameter_key_');
    $class = m::mock('UntypedParameter_class_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->router->model($key, $class, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBindingCallback0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->binders[$key = str_replace('-', '_', $key)])) == false (line 922)

    $actual = $this->router->getBindingCallback($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBindingCallback1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->binders[$key = str_replace('-', '_', $key)])) == true (line 922)

    $actual = $this->router->getBindingCallback($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPatterns0()
{
    // TODO: Your mock expectations here

    $actual = $this->router->getPatterns();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPattern0()
{
    $key = m::mock('UntypedParameter_key_');
    $pattern = m::mock('UntypedParameter_pattern_');

    // TODO: Your mock expectations here

    $actual = $this->router->pattern($key, $pattern);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPatterns0()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    $actual = $this->router->patterns($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPatterns1()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    $actual = $this->router->patterns($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasGroupStack0()
{
    // TODO: Your mock expectations here

    $actual = $this->router->hasGroupStack();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetGroupStack0()
{
    // TODO: Your mock expectations here

    $actual = $this->router->getGroupStack();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInput0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->router->input($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCurrentRequest0()
{
    // TODO: Your mock expectations here

    $actual = $this->router->getCurrentRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCurrentRoute0()
{
    // TODO: Your mock expectations here

    $actual = $this->router->getCurrentRoute();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrent0()
{
    // TODO: Your mock expectations here

    $actual = $this->router->current();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->router->has($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->routes->hasNamedRoute($value)) == false (line 1035)

    $actual = $this->router->has($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->routes->hasNamedRoute($value)) == true (line 1035)

    $actual = $this->router->has($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrentRouteName0()
{
    // TODO: Your mock expectations here

    $actual = $this->router->currentRouteName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs0()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    $actual = $this->router->is($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrentRouteNamed0()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    $actual = $this->router->currentRouteNamed($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrentRouteAction0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->current()) == false (line 1082)

    $actual = $this->router->currentRouteAction();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrentRouteAction1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->current()) == true (line 1082)

    $actual = $this->router->currentRouteAction();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUses0()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    $actual = $this->router->uses($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUses1()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::is($pattern, $this->currentRouteAction())) == false (line 1096)

    $actual = $this->router->uses($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUses2()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::is($pattern, $this->currentRouteAction())) == true (line 1096)

    $actual = $this->router->uses($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrentRouteUses0()
{
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    $actual = $this->router->currentRouteUses($action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuth0()
{
    // TODO: Your mock expectations here

    $actual = $this->router->auth();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSingularResourceParameters0()
{
    $singular = m::mock('UntypedParameter_singular_');

    // TODO: Your mock expectations here

    $actual = $this->router->singularResourceParameters($singular);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResourceParameters0()
{
    $parameters = [];

    // TODO: Your mock expectations here

    $actual = $this->router->resourceParameters($parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResourceVerbs0()
{
    $verbs = [];

    // TODO: Your mock expectations here

    $actual = $this->router->resourceVerbs($verbs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRoutes0()
{
    // TODO: Your mock expectations here

    $actual = $this->router->getRoutes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRoutes0()
{
    $routes = m::mock(\Illuminate\Routing\RouteCollection::class);

    // TODO: Your mock expectations here

    $actual = $this->router->setRoutes($routes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRoutes1()
{
    $routes = m::mock(\Illuminate\Routing\RouteCollection::class);

    // TODO: Your mock expectations here

    $actual = $this->router->setRoutes($routes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($method)) == false (line 1207)
    // if ($method == 'middleware') == false (line 1211)

    $actual = $this->router->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($method)) == false (line 1207)
    // if ($method == 'middleware') == true (line 1211)

    $actual = $this->router->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call2()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($method)) == true (line 1207)

    $actual = $this->router->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
