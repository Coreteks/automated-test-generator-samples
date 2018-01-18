<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Controller;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Controller\RedirectController;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class RedirectControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_router;
/**
* @var mixed
*/
protected $_httpPort = null;
/**
* @var mixed
*/
protected $_httpsPort = null;
/**
* @var \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
*/
protected $redirectController;

public function setUp()
{
    parent::setUp();

    $this->_router = m::mock(\Symfony\Component\Routing\Generator\UrlGeneratorInterface::class);
    $this->_httpPort = null;
    $this->_httpsPort = null;
    $this->redirectController = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController($this->_router, $this->_httpPort, $this->_httpsPort);
}

public function testRedirectAction0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $route = m::mock('UntypedParameter_route_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $ignoreAttributes = m::mock('UntypedParameter_ignoreAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $route) == false (line 58)
    // if (false === $ignoreAttributes || is_array($ignoreAttributes)) == false (line 63)

    $actual = $this->redirectController->redirectAction($request, $route, $permanent, $ignoreAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRedirectAction1()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $route = m::mock('UntypedParameter_route_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $ignoreAttributes = m::mock('UntypedParameter_ignoreAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $route) == false (line 58)
    // if (false === $ignoreAttributes || is_array($ignoreAttributes)) == true (line 63)
    // if ($ignoreAttributes) == false (line 66)

    $actual = $this->redirectController->redirectAction($request, $route, $permanent, $ignoreAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRedirectAction2()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $route = m::mock('UntypedParameter_route_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $ignoreAttributes = m::mock('UntypedParameter_ignoreAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $route) == false (line 58)
    // if (false === $ignoreAttributes || is_array($ignoreAttributes)) == true (line 63)
    // if ($ignoreAttributes) == true (line 66)

    $actual = $this->redirectController->redirectAction($request, $route, $permanent, $ignoreAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\HttpKernel\Exception\HttpException
 */
public function testRedirectAction3()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $route = m::mock('UntypedParameter_route_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $ignoreAttributes = m::mock('UntypedParameter_ignoreAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $route) == true (line 58)
    // throw new \Symfony\Component\HttpKernel\Exception\HttpException($permanent ? 410 : 404) -> exception (line 59)

    $actual = $this->redirectController->redirectAction($request, $route, $permanent, $ignoreAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == false (line 131)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction1()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == false (line 132)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction2()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == false (line 132)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction3()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == false (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction4()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == false (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction5()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == true (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction6()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == true (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction7()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == false (line 120)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction8()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == false (line 120)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction9()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == false (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction10()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == false (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction11()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == true (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction12()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == true (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction13()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == false (line 131)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction14()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == false (line 132)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction15()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == false (line 132)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction16()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == false (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction17()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == false (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction18()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == true (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction19()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == true (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction20()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == false (line 120)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction21()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == false (line 120)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction22()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == false (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction23()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == false (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction24()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == true (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction25()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == true (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction26()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == false (line 131)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction27()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == false (line 132)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction28()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == false (line 132)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction29()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == false (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction30()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == false (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction31()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == true (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction32()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == true (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction33()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == false (line 120)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction34()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == false (line 120)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction35()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == false (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction36()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == false (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction37()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == true (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction38()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == false (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == true (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction39()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == false (line 131)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction40()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == false (line 132)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction41()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == false (line 132)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction42()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == false (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction43()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == false (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction44()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == true (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction45()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == true (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction46()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == false (line 120)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction47()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == false (line 120)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction48()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == false (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction49()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == false (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction50()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == true (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction51()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == false (line 110)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == true (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction52()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == false (line 131)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction53()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == false (line 132)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction54()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == false (line 132)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction55()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == false (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction56()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == false (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction57()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == true (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction58()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == true (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction59()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == false (line 120)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction60()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == false (line 120)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction61()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == false (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction62()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == false (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction63()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == true (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction64()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == false (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == true (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction65()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == false (line 131)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction66()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == false (line 132)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction67()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == false (line 132)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction68()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == false (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction69()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == false (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction70()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == true (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == false (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction71()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == false (line 119)
    // if ('https' === $scheme) == true (line 131)
    // if (null === $httpsPort) == true (line 132)
    // if ('https' === $request->getScheme()) == true (line 133)
    // if (null !== $httpsPort && 443 != $httpsPort) == true (line 140)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction72()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == false (line 120)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction73()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == false (line 120)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction74()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == false (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction75()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == false (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction76()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == true (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == false (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction77()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == false (line 101)
    // if (null === $scheme) == true (line 105)
    // if ($qs) == true (line 110)
    // if (false === strpos($path, '?')) == true (line 111)
    // if ('http' === $scheme) == true (line 119)
    // if (null === $httpPort) == true (line 120)
    // if ('http' === $request->getScheme()) == true (line 121)
    // if (null !== $httpPort && 80 != $httpPort) == true (line 128)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrlRedirectAction78()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == false (line 94)
    // if (parse_url($path, PHP_URL_SCHEME)) == true (line 101)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\HttpKernel\Exception\HttpException
 */
public function testUrlRedirectAction79()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $path = m::mock('UntypedParameter_path_');
    $permanent = m::mock('UntypedParameter_permanent_');
    $scheme = m::mock('UntypedParameter_scheme_');
    $httpPort = m::mock('UntypedParameter_httpPort_');
    $httpsPort = m::mock('UntypedParameter_httpsPort_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' == $path) == true (line 94)
    // throw new \Symfony\Component\HttpKernel\Exception\HttpException($permanent ? 410 : 404) -> exception (line 95)

    $actual = $this->redirectController->urlRedirectAction($request, $path, $permanent, $scheme, $httpPort, $httpsPort);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
