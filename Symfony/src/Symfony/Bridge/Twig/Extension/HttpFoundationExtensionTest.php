<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\HttpFoundationExtension;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RequestContext;

class HttpFoundationExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_requestStack;
/**
* @var \Mockery\MockInterface
*/
protected $_requestContext;
/**
* @var \Symfony\Bridge\Twig\Extension\HttpFoundationExtension
*/
protected $httpFoundationExtension;

public function setUp()
{
    parent::setUp();

    $this->_requestStack = m::mock(\Symfony\Component\HttpFoundation\RequestStack::class);
    $this->_requestContext = m::mock(\Symfony\Component\Routing\RequestContext::class);
    $this->httpFoundationExtension = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($this->_requestStack, $this->_requestContext);
}

public function testGetFunctions0()
{
    // TODO: Your mock expectations here

    $actual = $this->httpFoundationExtension->getFunctions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == false (line 64)
    // if ('#' === $path[0]) == false (line 92)
    // if ('?' === $path[0]) == false (line 94)
    // if (!$path || '/' !== $path[0]) == false (line 98)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl1()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == false (line 64)
    // if ('#' === $path[0]) == false (line 92)
    // if ('?' === $path[0]) == false (line 94)
    // if (!$path || '/' !== $path[0]) == true (line 98)
    // if ($last !== ($pos = strrpos($prefix, '/'))) == false (line 101)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl2()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == false (line 64)
    // if ('#' === $path[0]) == false (line 92)
    // if ('?' === $path[0]) == false (line 94)
    // if (!$path || '/' !== $path[0]) == true (line 98)
    // if ($last !== ($pos = strrpos($prefix, '/'))) == true (line 101)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl3()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == false (line 64)
    // if ('#' === $path[0]) == false (line 92)
    // if ('?' === $path[0]) == true (line 94)
    // if (!$path || '/' !== $path[0]) == false (line 98)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl4()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == false (line 64)
    // if ('#' === $path[0]) == false (line 92)
    // if ('?' === $path[0]) == true (line 94)
    // if (!$path || '/' !== $path[0]) == true (line 98)
    // if ($last !== ($pos = strrpos($prefix, '/'))) == false (line 101)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl5()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == false (line 64)
    // if ('#' === $path[0]) == false (line 92)
    // if ('?' === $path[0]) == true (line 94)
    // if (!$path || '/' !== $path[0]) == true (line 98)
    // if ($last !== ($pos = strrpos($prefix, '/'))) == true (line 101)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl6()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == false (line 64)
    // if ('#' === $path[0]) == true (line 92)
    // if (!$path || '/' !== $path[0]) == false (line 98)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl7()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == false (line 64)
    // if ('#' === $path[0]) == true (line 92)
    // if (!$path || '/' !== $path[0]) == true (line 98)
    // if ($last !== ($pos = strrpos($prefix, '/'))) == false (line 101)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl8()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == false (line 64)
    // if ('#' === $path[0]) == true (line 92)
    // if (!$path || '/' !== $path[0]) == true (line 98)
    // if ($last !== ($pos = strrpos($prefix, '/'))) == true (line 101)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl9()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == false (line 65)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl10()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == false (line 69)
    // if ('https' === $scheme && 443 != $this->requestContext->getHttpsPort()) == false (line 71)
    // if ('#' === $path[0]) == false (line 75)
    // if ('?' === $path[0]) == false (line 78)
    // if ('/' !== $path[0]) == false (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl11()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == false (line 69)
    // if ('https' === $scheme && 443 != $this->requestContext->getHttpsPort()) == false (line 71)
    // if ('#' === $path[0]) == false (line 75)
    // if ('?' === $path[0]) == false (line 78)
    // if ('/' !== $path[0]) == true (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl12()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == false (line 69)
    // if ('https' === $scheme && 443 != $this->requestContext->getHttpsPort()) == false (line 71)
    // if ('#' === $path[0]) == false (line 75)
    // if ('?' === $path[0]) == true (line 78)
    // if ('/' !== $path[0]) == false (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl13()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == false (line 69)
    // if ('https' === $scheme && 443 != $this->requestContext->getHttpsPort()) == false (line 71)
    // if ('#' === $path[0]) == false (line 75)
    // if ('?' === $path[0]) == true (line 78)
    // if ('/' !== $path[0]) == true (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl14()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == false (line 69)
    // if ('https' === $scheme && 443 != $this->requestContext->getHttpsPort()) == false (line 71)
    // if ('#' === $path[0]) == true (line 75)
    // if ('/' !== $path[0]) == false (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl15()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == false (line 69)
    // if ('https' === $scheme && 443 != $this->requestContext->getHttpsPort()) == false (line 71)
    // if ('#' === $path[0]) == true (line 75)
    // if ('/' !== $path[0]) == true (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl16()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == false (line 69)
    // if ('https' === $scheme && 443 != $this->requestContext->getHttpsPort()) == true (line 71)
    // if ('#' === $path[0]) == false (line 75)
    // if ('?' === $path[0]) == false (line 78)
    // if ('/' !== $path[0]) == false (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl17()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == false (line 69)
    // if ('https' === $scheme && 443 != $this->requestContext->getHttpsPort()) == true (line 71)
    // if ('#' === $path[0]) == false (line 75)
    // if ('?' === $path[0]) == false (line 78)
    // if ('/' !== $path[0]) == true (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl18()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == false (line 69)
    // if ('https' === $scheme && 443 != $this->requestContext->getHttpsPort()) == true (line 71)
    // if ('#' === $path[0]) == false (line 75)
    // if ('?' === $path[0]) == true (line 78)
    // if ('/' !== $path[0]) == false (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl19()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == false (line 69)
    // if ('https' === $scheme && 443 != $this->requestContext->getHttpsPort()) == true (line 71)
    // if ('#' === $path[0]) == false (line 75)
    // if ('?' === $path[0]) == true (line 78)
    // if ('/' !== $path[0]) == true (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl20()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == false (line 69)
    // if ('https' === $scheme && 443 != $this->requestContext->getHttpsPort()) == true (line 71)
    // if ('#' === $path[0]) == true (line 75)
    // if ('/' !== $path[0]) == false (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl21()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == false (line 69)
    // if ('https' === $scheme && 443 != $this->requestContext->getHttpsPort()) == true (line 71)
    // if ('#' === $path[0]) == true (line 75)
    // if ('/' !== $path[0]) == true (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl22()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == true (line 69)
    // if ('#' === $path[0]) == false (line 75)
    // if ('?' === $path[0]) == false (line 78)
    // if ('/' !== $path[0]) == false (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl23()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == true (line 69)
    // if ('#' === $path[0]) == false (line 75)
    // if ('?' === $path[0]) == false (line 78)
    // if ('/' !== $path[0]) == true (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl24()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == true (line 69)
    // if ('#' === $path[0]) == false (line 75)
    // if ('?' === $path[0]) == true (line 78)
    // if ('/' !== $path[0]) == false (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl25()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == true (line 69)
    // if ('#' === $path[0]) == false (line 75)
    // if ('?' === $path[0]) == true (line 78)
    // if ('/' !== $path[0]) == true (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl26()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == true (line 69)
    // if ('#' === $path[0]) == true (line 75)
    // if ('/' !== $path[0]) == false (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl27()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 60)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 64)
    // if (null !== $this->requestContext && '' !== ($host = $this->requestContext->getHost())) == true (line 65)
    // if ('http' === $scheme && 80 != $this->requestContext->getHttpPort()) == true (line 69)
    // if ('#' === $path[0]) == true (line 75)
    // if ('/' !== $path[0]) == true (line 82)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateAbsoluteUrl28()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == true (line 60)

    $actual = $this->httpFoundationExtension->generateAbsoluteUrl($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateRelativePath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 124)
    // if (!($request = $this->requestStack->getMasterRequest())) == false (line 128)

    $actual = $this->httpFoundationExtension->generateRelativePath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateRelativePath1()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == false (line 124)
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 128)

    $actual = $this->httpFoundationExtension->generateRelativePath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateRelativePath2()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($path, '://') || '//' === substr($path, 0, 2)) == true (line 124)

    $actual = $this->httpFoundationExtension->generateRelativePath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->httpFoundationExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
