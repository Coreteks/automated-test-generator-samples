<?php

namespace tests\Illuminate\Http;

use Illuminate\Http\RedirectResponse;
use Mockery as m;

class RedirectResponseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Http\RedirectResponse
*/
protected $redirectResponse;

public function setUp()
{
    parent::setUp();

    $this->redirectResponse = new \Illuminate\Http\RedirectResponse();
}

public function testWith0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->redirectResponse->with($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWith1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->redirectResponse->with($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithCookies0()
{
    $cookies = [];

    // TODO: Your mock expectations here

    $actual = $this->redirectResponse->withCookies($cookies);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithCookies1()
{
    $cookies = [];

    // TODO: Your mock expectations here

    $actual = $this->redirectResponse->withCookies($cookies);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithInput0()
{
    $input = [];

    // TODO: Your mock expectations here

    $actual = $this->redirectResponse->withInput($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnlyInput0()
{
    // TODO: Your mock expectations here

    $actual = $this->redirectResponse->onlyInput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExceptInput0()
{
    // TODO: Your mock expectations here

    $actual = $this->redirectResponse->exceptInput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithErrors0()
{
    $provider = m::mock('UntypedParameter_provider_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$errors instanceof \Illuminate\Support\ViewErrorBag) == false (line 137)

    $actual = $this->redirectResponse->withErrors($provider, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithErrors1()
{
    $provider = m::mock('UntypedParameter_provider_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$errors instanceof \Illuminate\Support\ViewErrorBag) == true (line 137)

    $actual = $this->redirectResponse->withErrors($provider, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOriginalContent0()
{
    // TODO: Your mock expectations here

    $actual = $this->redirectResponse->getOriginalContent();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRequest0()
{
    // TODO: Your mock expectations here

    $actual = $this->redirectResponse->getRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRequest0()
{
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->redirectResponse->setRequest($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSession0()
{
    // TODO: Your mock expectations here

    $actual = $this->redirectResponse->getSession();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetSession0()
{
    $session = m::mock(\Illuminate\Session\Store::class);

    // TODO: Your mock expectations here

    $actual = $this->redirectResponse->setSession($session);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($method)) == false (line 226)
    // if (\Illuminate\Support\Str::startsWith($method, 'with')) == false (line 230)
    // throw new \BadMethodCallException("Method [{$method}] does not exist on Redirect.") -> exception (line 234)

    $actual = $this->redirectResponse->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($method)) == false (line 226)
    // if (\Illuminate\Support\Str::startsWith($method, 'with')) == true (line 230)

    $actual = $this->redirectResponse->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call2()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($method)) == true (line 226)

    $actual = $this->redirectResponse->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
