<?php

namespace tests\GuzzleHttp\Cookie;

use GuzzleHttp\Cookie\CookieJar;
use Mockery as m;

class CookieJarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_strictMode = null;
/**
* @var mixed
*/
protected $_cookieArray = null;
/**
* @var \GuzzleHttp\Cookie\CookieJar
*/
protected $cookieJar;

public function setUp()
{
    parent::setUp();

    $this->_strictMode = null;
    $this->_cookieArray = null;
    $this->cookieJar = new \GuzzleHttp\Cookie\CookieJar($this->_strictMode, $this->_cookieArray);
}

public function testFromArray0()
{
    $cookies = [];
    $domain = m::mock('UntypedParameter_domain_');

    // TODO: Your mock expectations here

    $actual = $this->cookieJar->fromArray($cookies, $domain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromArray1()
{
    $cookies = [];
    $domain = m::mock('UntypedParameter_domain_');

    // TODO: Your mock expectations here

    $actual = $this->cookieJar->fromArray($cookies, $domain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCookieValue0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->cookieJar->getCookieValue($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldPersist0()
{
    $cookie = m::mock(\GuzzleHttp\Cookie\SetCookie::class);
    $allowSessionCookies = m::mock('UntypedParameter_allowSessionCookies_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookie->getExpires() || $allowSessionCookies) == false (line 80)

    $actual = $this->cookieJar->shouldPersist($cookie, $allowSessionCookies);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldPersist1()
{
    $cookie = m::mock(\GuzzleHttp\Cookie\SetCookie::class);
    $allowSessionCookies = m::mock('UntypedParameter_allowSessionCookies_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookie->getExpires() || $allowSessionCookies) == true (line 80)
    // if (!$cookie->getDiscard()) == false (line 81)

    $actual = $this->cookieJar->shouldPersist($cookie, $allowSessionCookies);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldPersist2()
{
    $cookie = m::mock(\GuzzleHttp\Cookie\SetCookie::class);
    $allowSessionCookies = m::mock('UntypedParameter_allowSessionCookies_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookie->getExpires() || $allowSessionCookies) == true (line 80)
    // if (!$cookie->getDiscard()) == true (line 81)

    $actual = $this->cookieJar->shouldPersist($cookie, $allowSessionCookies);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCookieByName0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === null) == false (line 98)

    $actual = $this->cookieJar->getCookieByName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCookieByName1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === null) == false (line 98)
    // if ($cookie->getName() !== null && strcasecmp($cookie->getName(), $name) === 0) == false (line 102)

    $actual = $this->cookieJar->getCookieByName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCookieByName2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === null) == false (line 98)
    // if ($cookie->getName() !== null && strcasecmp($cookie->getName(), $name) === 0) == true (line 102)

    $actual = $this->cookieJar->getCookieByName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCookieByName3()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === null) == true (line 98)

    $actual = $this->cookieJar->getCookieByName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToArray0()
{
    // TODO: Your mock expectations here

    $actual = $this->cookieJar->toArray();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear0()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$domain) == false (line 117)
    // if (!$path) == false (line 120)
    // if (!$name) == false (line 127)

    $actual = $this->cookieJar->clear($domain, $path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear1()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$domain) == false (line 117)
    // if (!$path) == false (line 120)
    // if (!$name) == true (line 127)

    $actual = $this->cookieJar->clear($domain, $path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear2()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$domain) == false (line 117)
    // if (!$path) == true (line 120)

    $actual = $this->cookieJar->clear($domain, $path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear3()
{
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$domain) == true (line 117)

    $actual = $this->cookieJar->clear($domain, $path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClearSessionCookies0()
{
    // TODO: Your mock expectations here

    $actual = $this->cookieJar->clearSessionCookies();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCookie0()
{
    $cookie = m::mock(\GuzzleHttp\Cookie\SetCookie::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$name && $name !== '0') == false (line 162)
    // if ($result !== true) == false (line 168)

    $actual = $this->cookieJar->setCookie($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCookie1()
{
    $cookie = m::mock(\GuzzleHttp\Cookie\SetCookie::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$name && $name !== '0') == false (line 162)
    // if ($result !== true) == false (line 168)
    // if ($c->getPath() != $cookie->getPath() || $c->getDomain() != $cookie->getDomain() || $c->getName() != $cookie->getName()) == false (line 182)
    // if (!$cookie->getDiscard() && $c->getDiscard()) == false (line 191)
    // if ($cookie->getExpires() > $c->getExpires()) == false (line 198)
    // if ($cookie->getValue() !== $c->getValue()) == false (line 204)

    $actual = $this->cookieJar->setCookie($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCookie2()
{
    $cookie = m::mock(\GuzzleHttp\Cookie\SetCookie::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$name && $name !== '0') == false (line 162)
    // if ($result !== true) == false (line 168)
    // if ($c->getPath() != $cookie->getPath() || $c->getDomain() != $cookie->getDomain() || $c->getName() != $cookie->getName()) == false (line 182)
    // if (!$cookie->getDiscard() && $c->getDiscard()) == false (line 191)
    // if ($cookie->getExpires() > $c->getExpires()) == false (line 198)
    // if ($cookie->getValue() !== $c->getValue()) == true (line 204)

    $actual = $this->cookieJar->setCookie($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCookie3()
{
    $cookie = m::mock(\GuzzleHttp\Cookie\SetCookie::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$name && $name !== '0') == false (line 162)
    // if ($result !== true) == false (line 168)
    // if ($c->getPath() != $cookie->getPath() || $c->getDomain() != $cookie->getDomain() || $c->getName() != $cookie->getName()) == false (line 182)
    // if (!$cookie->getDiscard() && $c->getDiscard()) == false (line 191)
    // if ($cookie->getExpires() > $c->getExpires()) == true (line 198)

    $actual = $this->cookieJar->setCookie($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCookie4()
{
    $cookie = m::mock(\GuzzleHttp\Cookie\SetCookie::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$name && $name !== '0') == false (line 162)
    // if ($result !== true) == false (line 168)
    // if ($c->getPath() != $cookie->getPath() || $c->getDomain() != $cookie->getDomain() || $c->getName() != $cookie->getName()) == false (line 182)
    // if (!$cookie->getDiscard() && $c->getDiscard()) == true (line 191)

    $actual = $this->cookieJar->setCookie($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCookie5()
{
    $cookie = m::mock(\GuzzleHttp\Cookie\SetCookie::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$name && $name !== '0') == false (line 162)
    // if ($result !== true) == false (line 168)
    // if ($c->getPath() != $cookie->getPath() || $c->getDomain() != $cookie->getDomain() || $c->getName() != $cookie->getName()) == true (line 182)

    $actual = $this->cookieJar->setCookie($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCookie6()
{
    $cookie = m::mock(\GuzzleHttp\Cookie\SetCookie::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$name && $name !== '0') == false (line 162)
    // if ($result !== true) == true (line 168)
    // if ($this->strictMode) == false (line 169)

    $actual = $this->cookieJar->setCookie($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testSetCookie7()
{
    $cookie = m::mock(\GuzzleHttp\Cookie\SetCookie::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$name && $name !== '0') == false (line 162)
    // if ($result !== true) == true (line 168)
    // if ($this->strictMode) == true (line 169)
    // throw new \RuntimeException('Invalid cookie: ' . $result) -> exception (line 170)

    $actual = $this->cookieJar->setCookie($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCookie8()
{
    $cookie = m::mock(\GuzzleHttp\Cookie\SetCookie::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$name && $name !== '0') == true (line 162)

    $actual = $this->cookieJar->setCookie($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->cookieJar->count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIterator0()
{
    // TODO: Your mock expectations here

    $actual = $this->cookieJar->getIterator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtractCookies0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookieHeader = $response->getHeader('Set-Cookie')) == false (line 232)

    $actual = $this->cookieJar->extractCookies($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtractCookies1()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookieHeader = $response->getHeader('Set-Cookie')) == true (line 232)

    $actual = $this->cookieJar->extractCookies($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtractCookies2()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookieHeader = $response->getHeader('Set-Cookie')) == true (line 232)
    // if (!$sc->getDomain()) == false (line 235)
    // if (0 !== strpos($sc->getPath(), '/')) == false (line 238)

    $actual = $this->cookieJar->extractCookies($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtractCookies3()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookieHeader = $response->getHeader('Set-Cookie')) == true (line 232)
    // if (!$sc->getDomain()) == false (line 235)
    // if (0 !== strpos($sc->getPath(), '/')) == true (line 238)

    $actual = $this->cookieJar->extractCookies($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtractCookies4()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookieHeader = $response->getHeader('Set-Cookie')) == true (line 232)
    // if (!$sc->getDomain()) == true (line 235)
    // if (0 !== strpos($sc->getPath(), '/')) == false (line 238)

    $actual = $this->cookieJar->extractCookies($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtractCookies5()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookieHeader = $response->getHeader('Set-Cookie')) == true (line 232)
    // if (!$sc->getDomain()) == true (line 235)
    // if (0 !== strpos($sc->getPath(), '/')) == true (line 238)

    $actual = $this->cookieJar->extractCookies($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithCookieHeader0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->cookieJar->withCookieHeader($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithCookieHeader1()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookie->matchesPath($path) && $cookie->matchesDomain($host) && !$cookie->isExpired() && (!$cookie->getSecure() || $scheme === 'https')) == false (line 282)

    $actual = $this->cookieJar->withCookieHeader($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithCookieHeader2()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookie->matchesPath($path) && $cookie->matchesDomain($host) && !$cookie->isExpired() && (!$cookie->getSecure() || $scheme === 'https')) == true (line 282)

    $actual = $this->cookieJar->withCookieHeader($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
