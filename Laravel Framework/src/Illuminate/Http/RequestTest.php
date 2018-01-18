<?php

namespace tests\Illuminate\Http;

use Illuminate\Http\Request;
use Mockery as m;

class RequestTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Http\Request
*/
protected $request;

public function setUp()
{
    parent::setUp();

    $this->request = new \Illuminate\Http\Request();
}

public function testCapture0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->capture();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInstance0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->instance();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethod0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->method();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRoot0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->root();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrl0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->url();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFullUrl0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->fullUrl();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFullUrlWithQuery0()
{
    $query = [];

    // TODO: Your mock expectations here

    $actual = $this->request->fullUrlWithQuery($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->path();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecodedPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->decodedPath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSegment0()
{
    $index = m::mock('UntypedParameter_index_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->request->segment($index, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSegments0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->segments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs0()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    $actual = $this->request->is($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs1()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::is($pattern, $this->decodedPath())) == false (line 188)

    $actual = $this->request->is($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs2()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::is($pattern, $this->decodedPath())) == true (line 188)

    $actual = $this->request->is($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRouteIs0()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    $actual = $this->request->routeIs($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFullUrlIs0()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    $actual = $this->request->fullUrlIs($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFullUrlIs1()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::is($pattern, $url)) == false (line 218)

    $actual = $this->request->fullUrlIs($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFullUrlIs2()
{
    $patterns = m::mock('UntypedParameter_patterns_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::is($pattern, $url)) == true (line 218)

    $actual = $this->request->fullUrlIs($patterns);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAjax0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->ajax();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPjax0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->pjax();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSecure0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->secure();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->ip();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIps0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->ips();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUserAgent0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->userAgent();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMerge0()
{
    $input = [];

    // TODO: Your mock expectations here

    $actual = $this->request->merge($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplace0()
{
    $input = [];

    // TODO: Your mock expectations here

    $actual = $this->request->replace($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->json)) == false (line 321)
    // if (is_null($key)) == false (line 325)

    $actual = $this->request->json($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson1()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->json)) == false (line 321)
    // if (is_null($key)) == true (line 325)

    $actual = $this->request->json($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson2()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->json)) == true (line 321)
    // if (is_null($key)) == false (line 325)

    $actual = $this->request->json($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson3()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->json)) == true (line 321)
    // if (is_null($key)) == true (line 325)

    $actual = $this->request->json($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateFromBase0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request instanceof static) == false (line 354)

    $actual = $this->request->createFromBase($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateFromBase1()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request instanceof static) == true (line 354)

    $actual = $this->request->createFromBase($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDuplicate0()
{
    $query = [];
    $request = [];
    $attributes = [];
    $cookies = [];
    $files = [];
    $server = [];

    // TODO: Your mock expectations here

    $actual = $this->request->duplicate($query, $request, $attributes, $cookies, $files, $server);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSession0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasSession()) == false (line 414)

    $actual = $this->request->session();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testSession1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasSession()) == true (line 414)
    // throw new \RuntimeException('Session store not set on request.') -> exception (line 415)

    $actual = $this->request->session();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLaravelSession0()
{
    $session = m::mock('UntypedParameter_session_');

    // TODO: Your mock expectations here

    $actual = $this->request->setLaravelSession($session);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser0()
{
    $guard = m::mock('UntypedParameter_guard_');

    // TODO: Your mock expectations here

    $actual = $this->request->user($guard);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRoute0()
{
    $param = m::mock('UntypedParameter_param_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($route) || is_null($param)) == false (line 454)

    $actual = $this->request->route($param);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRoute1()
{
    $param = m::mock('UntypedParameter_param_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($route) || is_null($param)) == true (line 454)

    $actual = $this->request->route($param);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFingerprint0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($route = $this->route())) == false (line 470)

    $actual = $this->request->fingerprint();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testFingerprint1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($route = $this->route())) == true (line 470)
    // throw new \RuntimeException('Unable to generate fingerprint. Route unavailable.') -> exception (line 471)

    $actual = $this->request->fingerprint();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetJson0()
{
    $json = m::mock('UntypedParameter_json_');

    // TODO: Your mock expectations here

    $actual = $this->request->setJson($json);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUserResolver0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->getUserResolver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetUserResolver0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->request->setUserResolver($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRouteResolver0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->getRouteResolver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRouteResolver0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->request->setRouteResolver($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToArray0()
{
    // TODO: Your mock expectations here

    $actual = $this->request->toArray();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetExists0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->request->offsetExists($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->request->offsetGet($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet0()
{
    $offset = m::mock('UntypedParameter_offset_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->request->offsetSet($offset, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetUnset0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->request->offsetUnset($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->request->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_key_exists($key, $this->all())) == false (line 618)

    $actual = $this->request->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_key_exists($key, $this->all())) == true (line 618)

    $actual = $this->request->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
