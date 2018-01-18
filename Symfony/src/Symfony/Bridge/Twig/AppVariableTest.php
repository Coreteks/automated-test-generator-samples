<?php

namespace tests\Symfony\Bridge\Twig;

use Mockery as m;
use Symfony\Bridge\Twig\AppVariable;

class AppVariableTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\AppVariable
*/
protected $appVariable;

public function setUp()
{
    parent::setUp();

    $this->appVariable = new \Symfony\Bridge\Twig\AppVariable();
}

public function testSetTokenStorage0()
{
    $tokenStorage = m::mock(\Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->appVariable->setTokenStorage($tokenStorage);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRequestStack0()
{
    $requestStack = m::mock(\Symfony\Component\HttpFoundation\RequestStack::class);

    // TODO: Your mock expectations here

    $actual = $this->appVariable->setRequestStack($requestStack);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetEnvironment0()
{
    $environment = m::mock('UntypedParameter_environment_');

    // TODO: Your mock expectations here

    $actual = $this->appVariable->setEnvironment($environment);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDebug0()
{
    $debug = m::mock('UntypedParameter_debug_');

    // TODO: Your mock expectations here

    $actual = $this->appVariable->setDebug($debug);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetToken0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === ($tokenStorage = $this->tokenStorage)) == false (line 61)

    $actual = $this->appVariable->getToken();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetToken1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === ($tokenStorage = $this->tokenStorage)) == true (line 61)
    // throw new \RuntimeException('The "app.token" variable is not available.') -> exception (line 62)

    $actual = $this->appVariable->getToken();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUser0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === ($tokenStorage = $this->tokenStorage)) == false (line 77)
    // if (!($token = $tokenStorage->getToken())) == false (line 81)
    // if (is_object($user)) == false (line 86)

    $actual = $this->appVariable->getUser();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUser1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === ($tokenStorage = $this->tokenStorage)) == false (line 77)
    // if (!($token = $tokenStorage->getToken())) == false (line 81)
    // if (is_object($user)) == true (line 86)

    $actual = $this->appVariable->getUser();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUser2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === ($tokenStorage = $this->tokenStorage)) == false (line 77)
    // if (!($token = $tokenStorage->getToken())) == true (line 81)

    $actual = $this->appVariable->getUser();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetUser3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === ($tokenStorage = $this->tokenStorage)) == true (line 77)
    // throw new \RuntimeException('The "app.user" variable is not available.') -> exception (line 78)

    $actual = $this->appVariable->getUser();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRequest0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->requestStack) == false (line 98)

    $actual = $this->appVariable->getRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetRequest1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->requestStack) == true (line 98)
    // throw new \RuntimeException('The "app.request" variable is not available.') -> exception (line 99)

    $actual = $this->appVariable->getRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSession0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->requestStack) == false (line 112)
    // if ($request = $this->getRequest()) == false (line 116)

    $actual = $this->appVariable->getSession();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSession1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->requestStack) == false (line 112)
    // if ($request = $this->getRequest()) == true (line 116)

    $actual = $this->appVariable->getSession();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetSession2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->requestStack) == true (line 112)
    // throw new \RuntimeException('The "app.session" variable is not available.') -> exception (line 113)

    $actual = $this->appVariable->getSession();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEnvironment0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->environment) == false (line 128)

    $actual = $this->appVariable->getEnvironment();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetEnvironment1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->environment) == true (line 128)
    // throw new \RuntimeException('The "app.environment" variable is not available.') -> exception (line 129)

    $actual = $this->appVariable->getEnvironment();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDebug0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->debug) == false (line 142)

    $actual = $this->appVariable->getDebug();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetDebug1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->debug) == true (line 142)
    // throw new \RuntimeException('The "app.debug" variable is not available.') -> exception (line 143)

    $actual = $this->appVariable->getDebug();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGetFlashes0()
{
    $types = m::mock('UntypedParameter_types_');

    // TODO: Your mock expectations here

    $actual = $this->appVariable->getFlashes($types);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFlashes1()
{
    $types = m::mock('UntypedParameter_types_');

    // TODO: Your mock expectations here

    $actual = $this->appVariable->getFlashes($types);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFlashes2()
{
    $types = m::mock('UntypedParameter_types_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $session) == false (line 161)
    // if (null === $types || '' === $types || array() === $types) == false (line 168)
    // if (is_string($types)) == false (line 172)

    $actual = $this->appVariable->getFlashes($types);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFlashes3()
{
    $types = m::mock('UntypedParameter_types_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $session) == false (line 161)
    // if (null === $types || '' === $types || array() === $types) == false (line 168)
    // if (is_string($types)) == false (line 172)

    $actual = $this->appVariable->getFlashes($types);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFlashes4()
{
    $types = m::mock('UntypedParameter_types_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $session) == false (line 161)
    // if (null === $types || '' === $types || array() === $types) == false (line 168)
    // if (is_string($types)) == true (line 172)

    $actual = $this->appVariable->getFlashes($types);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFlashes5()
{
    $types = m::mock('UntypedParameter_types_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $session) == false (line 161)
    // if (null === $types || '' === $types || array() === $types) == true (line 168)

    $actual = $this->appVariable->getFlashes($types);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFlashes6()
{
    $types = m::mock('UntypedParameter_types_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $session) == true (line 161)

    $actual = $this->appVariable->getFlashes($types);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
