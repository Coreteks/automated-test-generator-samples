<?php

namespace tests\GuzzleHttp;

use GuzzleHttp\RedirectMiddleware;
use Mockery as m;

class RedirectMiddlewareTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_nextHandler = null;
/**
* @var \GuzzleHttp\RedirectMiddleware
*/
protected $redirectMiddleware;

public function setUp()
{
    parent::setUp();

    $this->_nextHandler = null;
    $this->redirectMiddleware = new \GuzzleHttp\RedirectMiddleware($this->_nextHandler);
}

public function test__invoke0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($options['allow_redirects'])) == false (line 53)
    // if ($options['allow_redirects'] === true) == false (line 57)
    // if (!is_array($options['allow_redirects'])) == false (line 59)
    // if (empty($options['allow_redirects']['max'])) == false (line 66)

    $actual = $this->redirectMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke1()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($options['allow_redirects'])) == false (line 53)
    // if ($options['allow_redirects'] === true) == false (line 57)
    // if (!is_array($options['allow_redirects'])) == false (line 59)
    // if (empty($options['allow_redirects']['max'])) == true (line 66)

    $actual = $this->redirectMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function test__invoke2()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($options['allow_redirects'])) == false (line 53)
    // if ($options['allow_redirects'] === true) == false (line 57)
    // if (!is_array($options['allow_redirects'])) == true (line 59)
    // throw new \InvalidArgumentException('allow_redirects must be true, false, or array') -> exception (line 60)

    $actual = $this->redirectMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke3()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($options['allow_redirects'])) == false (line 53)
    // if ($options['allow_redirects'] === true) == true (line 57)
    // if (empty($options['allow_redirects']['max'])) == false (line 66)

    $actual = $this->redirectMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke4()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($options['allow_redirects'])) == false (line 53)
    // if ($options['allow_redirects'] === true) == true (line 57)
    // if (empty($options['allow_redirects']['max'])) == true (line 66)

    $actual = $this->redirectMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke5()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($options['allow_redirects'])) == true (line 53)

    $actual = $this->redirectMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckRedirect0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr($response->getStatusCode(), 0, 1) != '3' || !$response->hasHeader('Location')) == false (line 88)
    // if (isset($options['allow_redirects']['on_redirect'])) == false (line 97)
    // if (!empty($options['allow_redirects']['track_redirects'])) == false (line 110)

    $actual = $this->redirectMiddleware->checkRedirect($request, $options, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckRedirect1()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr($response->getStatusCode(), 0, 1) != '3' || !$response->hasHeader('Location')) == false (line 88)
    // if (isset($options['allow_redirects']['on_redirect'])) == false (line 97)
    // if (!empty($options['allow_redirects']['track_redirects'])) == true (line 110)

    $actual = $this->redirectMiddleware->checkRedirect($request, $options, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckRedirect2()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr($response->getStatusCode(), 0, 1) != '3' || !$response->hasHeader('Location')) == false (line 88)
    // if (isset($options['allow_redirects']['on_redirect'])) == true (line 97)
    // if (!empty($options['allow_redirects']['track_redirects'])) == false (line 110)

    $actual = $this->redirectMiddleware->checkRedirect($request, $options, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckRedirect3()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr($response->getStatusCode(), 0, 1) != '3' || !$response->hasHeader('Location')) == false (line 88)
    // if (isset($options['allow_redirects']['on_redirect'])) == true (line 97)
    // if (!empty($options['allow_redirects']['track_redirects'])) == true (line 110)

    $actual = $this->redirectMiddleware->checkRedirect($request, $options, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckRedirect4()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr($response->getStatusCode(), 0, 1) != '3' || !$response->hasHeader('Location')) == true (line 88)

    $actual = $this->redirectMiddleware->checkRedirect($request, $options, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testModifyRequest0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($statusCode == 303 || $statusCode <= 302 && $request->getBody() && !$options['allow_redirects']['strict']) == false (line 174)
    // if ($options['allow_redirects']['referer'] && $modify['uri']->getScheme() === $request->getUri()->getScheme()) == false (line 186)
    // if ($request->getUri()->getHost() !== $modify['uri']->getHost()) == false (line 196)

    $actual = $this->redirectMiddleware->modifyRequest($request, $options, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testModifyRequest1()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($statusCode == 303 || $statusCode <= 302 && $request->getBody() && !$options['allow_redirects']['strict']) == false (line 174)
    // if ($options['allow_redirects']['referer'] && $modify['uri']->getScheme() === $request->getUri()->getScheme()) == false (line 186)
    // if ($request->getUri()->getHost() !== $modify['uri']->getHost()) == true (line 196)

    $actual = $this->redirectMiddleware->modifyRequest($request, $options, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testModifyRequest2()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($statusCode == 303 || $statusCode <= 302 && $request->getBody() && !$options['allow_redirects']['strict']) == false (line 174)
    // if ($options['allow_redirects']['referer'] && $modify['uri']->getScheme() === $request->getUri()->getScheme()) == true (line 186)
    // if ($request->getUri()->getHost() !== $modify['uri']->getHost()) == false (line 196)

    $actual = $this->redirectMiddleware->modifyRequest($request, $options, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testModifyRequest3()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($statusCode == 303 || $statusCode <= 302 && $request->getBody() && !$options['allow_redirects']['strict']) == false (line 174)
    // if ($options['allow_redirects']['referer'] && $modify['uri']->getScheme() === $request->getUri()->getScheme()) == true (line 186)
    // if ($request->getUri()->getHost() !== $modify['uri']->getHost()) == true (line 196)

    $actual = $this->redirectMiddleware->modifyRequest($request, $options, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testModifyRequest4()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($statusCode == 303 || $statusCode <= 302 && $request->getBody() && !$options['allow_redirects']['strict']) == true (line 174)
    // if ($options['allow_redirects']['referer'] && $modify['uri']->getScheme() === $request->getUri()->getScheme()) == false (line 186)
    // if ($request->getUri()->getHost() !== $modify['uri']->getHost()) == false (line 196)

    $actual = $this->redirectMiddleware->modifyRequest($request, $options, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testModifyRequest5()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($statusCode == 303 || $statusCode <= 302 && $request->getBody() && !$options['allow_redirects']['strict']) == true (line 174)
    // if ($options['allow_redirects']['referer'] && $modify['uri']->getScheme() === $request->getUri()->getScheme()) == false (line 186)
    // if ($request->getUri()->getHost() !== $modify['uri']->getHost()) == true (line 196)

    $actual = $this->redirectMiddleware->modifyRequest($request, $options, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testModifyRequest6()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($statusCode == 303 || $statusCode <= 302 && $request->getBody() && !$options['allow_redirects']['strict']) == true (line 174)
    // if ($options['allow_redirects']['referer'] && $modify['uri']->getScheme() === $request->getUri()->getScheme()) == true (line 186)
    // if ($request->getUri()->getHost() !== $modify['uri']->getHost()) == false (line 196)

    $actual = $this->redirectMiddleware->modifyRequest($request, $options, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testModifyRequest7()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($statusCode == 303 || $statusCode <= 302 && $request->getBody() && !$options['allow_redirects']['strict']) == true (line 174)
    // if ($options['allow_redirects']['referer'] && $modify['uri']->getScheme() === $request->getUri()->getScheme()) == true (line 186)
    // if ($request->getUri()->getHost() !== $modify['uri']->getHost()) == true (line 196)

    $actual = $this->redirectMiddleware->modifyRequest($request, $options, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
