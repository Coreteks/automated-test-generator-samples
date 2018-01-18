<?php

namespace tests\Illuminate\Routing;

use Illuminate\Http\Request;
use Illuminate\Routing\RouteCollection;
use Illuminate\Routing\UrlGenerator;
use Mockery as m;

class UrlGeneratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_routes;
/**
* @var \Mockery\MockInterface
*/
protected $_request;
/**
* @var \Illuminate\Routing\UrlGenerator
*/
protected $urlGenerator;

public function setUp()
{
    parent::setUp();

    $this->_routes = m::mock(\Illuminate\Routing\RouteCollection::class);
    $this->_request = m::mock(\Illuminate\Http\Request::class);
    $this->urlGenerator = new \Illuminate\Routing\UrlGenerator($this->_routes, $this->_request);
}

public function testFull0()
{
    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->full();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrent0()
{
    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->current();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrevious0()
{
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($url) == false (line 141)
    // if ($fallback) == false (line 143)

    $actual = $this->urlGenerator->previous($fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrevious1()
{
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($url) == false (line 141)
    // if ($fallback) == true (line 143)

    $actual = $this->urlGenerator->previous($fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrevious2()
{
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($url) == true (line 141)

    $actual = $this->urlGenerator->previous($fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo0()
{
    $path = m::mock('UntypedParameter_path_');
    $extra = m::mock('UntypedParameter_extra_');
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isValidUrl($path)) == false (line 175)

    $actual = $this->urlGenerator->to($path, $extra, $secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo1()
{
    $path = m::mock('UntypedParameter_path_');
    $extra = m::mock('UntypedParameter_extra_');
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isValidUrl($path)) == true (line 175)

    $actual = $this->urlGenerator->to($path, $extra, $secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSecure0()
{
    $path = m::mock('UntypedParameter_path_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->secure($path, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAsset0()
{
    $path = m::mock('UntypedParameter_path_');
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isValidUrl($path)) == false (line 216)

    $actual = $this->urlGenerator->asset($path, $secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAsset1()
{
    $path = m::mock('UntypedParameter_path_');
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isValidUrl($path)) == true (line 216)

    $actual = $this->urlGenerator->asset($path, $secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSecureAsset0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->secureAsset($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssetFrom0()
{
    $root = m::mock('UntypedParameter_root_');
    $path = m::mock('UntypedParameter_path_');
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->assetFrom($root, $path, $secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatScheme0()
{
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($secure)) == false (line 278)
    // if (is_null($this->cachedSchema)) == false (line 282)

    $actual = $this->urlGenerator->formatScheme($secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatScheme1()
{
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($secure)) == false (line 278)
    // if (is_null($this->cachedSchema)) == true (line 282)

    $actual = $this->urlGenerator->formatScheme($secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatScheme2()
{
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($secure)) == true (line 278)

    $actual = $this->urlGenerator->formatScheme($secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testRoute0()
{
    $name = m::mock('UntypedParameter_name_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $absolute = m::mock('UntypedParameter_absolute_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($route = $this->routes->getByName($name))) == false (line 301)
    // throw new \InvalidArgumentException("Route [{$name}] not defined.") -> exception (line 305)

    $actual = $this->urlGenerator->route($name, $parameters, $absolute);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRoute1()
{
    $name = m::mock('UntypedParameter_name_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $absolute = m::mock('UntypedParameter_absolute_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($route = $this->routes->getByName($name))) == true (line 301)

    $actual = $this->urlGenerator->route($name, $parameters, $absolute);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAction0()
{
    $action = m::mock('UntypedParameter_action_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $absolute = m::mock('UntypedParameter_absolute_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($route = $this->routes->getByAction($action = $this->formatAction($action)))) == false (line 337)

    $actual = $this->urlGenerator->action($action, $parameters, $absolute);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testAction1()
{
    $action = m::mock('UntypedParameter_action_');
    $parameters = m::mock('UntypedParameter_parameters_');
    $absolute = m::mock('UntypedParameter_absolute_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($route = $this->routes->getByAction($action = $this->formatAction($action)))) == true (line 337)
    // throw new \InvalidArgumentException("Action {$action} not defined.") -> exception (line 338)

    $actual = $this->urlGenerator->action($action, $parameters, $absolute);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatParameters0()
{
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->formatParameters($parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatParameters1()
{
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($parameter instanceof \Illuminate\Contracts\Routing\UrlRoutable) == false (line 370)

    $actual = $this->urlGenerator->formatParameters($parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatParameters2()
{
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($parameter instanceof \Illuminate\Contracts\Routing\UrlRoutable) == true (line 370)

    $actual = $this->urlGenerator->formatParameters($parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatRoot0()
{
    $scheme = m::mock('UntypedParameter_scheme_');
    $root = m::mock('UntypedParameter_root_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($root)) == false (line 405)

    $actual = $this->urlGenerator->formatRoot($scheme, $root);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatRoot1()
{
    $scheme = m::mock('UntypedParameter_scheme_');
    $root = m::mock('UntypedParameter_root_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($root)) == true (line 405)
    // if (is_null($this->cachedRoot)) == false (line 406)

    $actual = $this->urlGenerator->formatRoot($scheme, $root);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatRoot2()
{
    $scheme = m::mock('UntypedParameter_scheme_');
    $root = m::mock('UntypedParameter_root_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($root)) == true (line 405)
    // if (is_null($this->cachedRoot)) == true (line 406)

    $actual = $this->urlGenerator->formatRoot($scheme, $root);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat0()
{
    $root = m::mock('UntypedParameter_root_');
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->formatHostUsing) == false (line 429)
    // if ($this->formatPathUsing) == false (line 433)

    $actual = $this->urlGenerator->format($root, $path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat1()
{
    $root = m::mock('UntypedParameter_root_');
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->formatHostUsing) == false (line 429)
    // if ($this->formatPathUsing) == true (line 433)

    $actual = $this->urlGenerator->format($root, $path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat2()
{
    $root = m::mock('UntypedParameter_root_');
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->formatHostUsing) == true (line 429)
    // if ($this->formatPathUsing) == false (line 433)

    $actual = $this->urlGenerator->format($root, $path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat3()
{
    $root = m::mock('UntypedParameter_root_');
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->formatHostUsing) == true (line 429)
    // if ($this->formatPathUsing) == true (line 433)

    $actual = $this->urlGenerator->format($root, $path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsValidUrl0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('~^(#|//|https?://|mailto:|tel:)~', $path)) == false (line 448)

    $actual = $this->urlGenerator->isValidUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsValidUrl1()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('~^(#|//|https?://|mailto:|tel:)~', $path)) == true (line 448)

    $actual = $this->urlGenerator->isValidUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDefaults0()
{
    $defaults = [];

    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->defaults($defaults);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultParameters0()
{
    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->getDefaultParameters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForceScheme0()
{
    $schema = m::mock('UntypedParameter_schema_');

    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->forceScheme($schema);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForceRootUrl0()
{
    $root = m::mock('UntypedParameter_root_');

    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->forceRootUrl($root);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatHostUsing0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->formatHostUsing($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatPathUsing0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->formatPathUsing($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPathFormatter0()
{
    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->pathFormatter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRequest0()
{
    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->getRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRequest0()
{
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->setRequest($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRoutes0()
{
    $routes = m::mock(\Illuminate\Routing\RouteCollection::class);

    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->setRoutes($routes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetSessionResolver0()
{
    $sessionResolver = m::mock('UntypedParameter_sessionResolver_');

    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->setSessionResolver($sessionResolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRootControllerNamespace0()
{
    $rootNamespace = m::mock('UntypedParameter_rootNamespace_');

    // TODO: Your mock expectations here

    $actual = $this->urlGenerator->setRootControllerNamespace($rootNamespace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
