<?php

namespace tests\GuzzleHttp\Cookie;

use GuzzleHttp\Cookie\SetCookie;
use Mockery as m;

class SetCookieTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_data = [];
/**
* @var \GuzzleHttp\Cookie\SetCookie
*/
protected $setCookie;

public function setUp()
{
    parent::setUp();

    $this->_data = [];
    $this->setCookie = new \GuzzleHttp\Cookie\SetCookie($this->_data);
}

public function testFromString0()
{
    $cookie = m::mock('UntypedParameter_cookie_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($pieces) || !strpos($pieces[0], '=')) == false (line 39)

    $actual = $this->setCookie->fromString($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromString1()
{
    $cookie = m::mock('UntypedParameter_cookie_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($pieces) || !strpos($pieces[0], '=')) == false (line 39)
    // if (empty($data['Name'])) == false (line 52)

    $actual = $this->setCookie->fromString($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromString2()
{
    $cookie = m::mock('UntypedParameter_cookie_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($pieces) || !strpos($pieces[0], '=')) == false (line 39)
    // if (empty($data['Name'])) == false (line 52)
    // if (!strcasecmp($search, $key)) == false (line 57)

    $actual = $this->setCookie->fromString($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromString3()
{
    $cookie = m::mock('UntypedParameter_cookie_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($pieces) || !strpos($pieces[0], '=')) == false (line 39)
    // if (empty($data['Name'])) == false (line 52)
    // if (!strcasecmp($search, $key)) == true (line 57)

    $actual = $this->setCookie->fromString($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromString4()
{
    $cookie = m::mock('UntypedParameter_cookie_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($pieces) || !strpos($pieces[0], '=')) == false (line 39)
    // if (empty($data['Name'])) == true (line 52)

    $actual = $this->setCookie->fromString($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromString5()
{
    $cookie = m::mock('UntypedParameter_cookie_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($pieces) || !strpos($pieces[0], '=')) == true (line 39)

    $actual = $this->setCookie->fromString($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->setCookie->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($k !== 'Name' && $k !== 'Value' && $v !== null && $v !== false) == false (line 88)

    $actual = $this->setCookie->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($k !== 'Name' && $k !== 'Value' && $v !== null && $v !== false) == true (line 88)
    // if ($k === 'Expires') == false (line 89)

    $actual = $this->setCookie->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($k !== 'Name' && $k !== 'Value' && $v !== null && $v !== false) == true (line 88)
    // if ($k === 'Expires') == true (line 89)

    $actual = $this->setCookie->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToArray0()
{
    // TODO: Your mock expectations here

    $actual = $this->setCookie->toArray();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->setCookie->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetName0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->setCookie->setName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetValue0()
{
    // TODO: Your mock expectations here

    $actual = $this->setCookie->getValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetValue0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->setCookie->setValue($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDomain0()
{
    // TODO: Your mock expectations here

    $actual = $this->setCookie->getDomain();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDomain0()
{
    $domain = m::mock('UntypedParameter_domain_');

    // TODO: Your mock expectations here

    $actual = $this->setCookie->setDomain($domain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->setCookie->getPath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->setCookie->setPath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMaxAge0()
{
    // TODO: Your mock expectations here

    $actual = $this->setCookie->getMaxAge();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetMaxAge0()
{
    $maxAge = m::mock('UntypedParameter_maxAge_');

    // TODO: Your mock expectations here

    $actual = $this->setCookie->setMaxAge($maxAge);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExpires0()
{
    // TODO: Your mock expectations here

    $actual = $this->setCookie->getExpires();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetExpires0()
{
    $timestamp = m::mock('UntypedParameter_timestamp_');

    // TODO: Your mock expectations here

    $actual = $this->setCookie->setExpires($timestamp);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSecure0()
{
    // TODO: Your mock expectations here

    $actual = $this->setCookie->getSecure();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetSecure0()
{
    $secure = m::mock('UntypedParameter_secure_');

    // TODO: Your mock expectations here

    $actual = $this->setCookie->setSecure($secure);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDiscard0()
{
    // TODO: Your mock expectations here

    $actual = $this->setCookie->getDiscard();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDiscard0()
{
    $discard = m::mock('UntypedParameter_discard_');

    // TODO: Your mock expectations here

    $actual = $this->setCookie->setDiscard($discard);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHttpOnly0()
{
    // TODO: Your mock expectations here

    $actual = $this->setCookie->getHttpOnly();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetHttpOnly0()
{
    $httpOnly = m::mock('UntypedParameter_httpOnly_');

    // TODO: Your mock expectations here

    $actual = $this->setCookie->setHttpOnly($httpOnly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatchesPath0()
{
    $requestPath = m::mock('UntypedParameter_requestPath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookiePath === '/' || $cookiePath == $requestPath) == false (line 309)
    // if (0 !== strpos($requestPath, $cookiePath)) == false (line 314)
    // if (substr($cookiePath, -1, 1) === '/') == false (line 319)

    $actual = $this->setCookie->matchesPath($requestPath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatchesPath1()
{
    $requestPath = m::mock('UntypedParameter_requestPath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookiePath === '/' || $cookiePath == $requestPath) == false (line 309)
    // if (0 !== strpos($requestPath, $cookiePath)) == false (line 314)
    // if (substr($cookiePath, -1, 1) === '/') == true (line 319)

    $actual = $this->setCookie->matchesPath($requestPath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatchesPath2()
{
    $requestPath = m::mock('UntypedParameter_requestPath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookiePath === '/' || $cookiePath == $requestPath) == false (line 309)
    // if (0 !== strpos($requestPath, $cookiePath)) == true (line 314)

    $actual = $this->setCookie->matchesPath($requestPath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatchesPath3()
{
    $requestPath = m::mock('UntypedParameter_requestPath_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookiePath === '/' || $cookiePath == $requestPath) == true (line 309)

    $actual = $this->setCookie->matchesPath($requestPath);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatchesDomain0()
{
    $domain = m::mock('UntypedParameter_domain_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cookieDomain || !strcasecmp($domain, $cookieDomain)) == false (line 341)
    // if (filter_var($domain, FILTER_VALIDATE_IP)) == false (line 347)

    $actual = $this->setCookie->matchesDomain($domain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatchesDomain1()
{
    $domain = m::mock('UntypedParameter_domain_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cookieDomain || !strcasecmp($domain, $cookieDomain)) == false (line 341)
    // if (filter_var($domain, FILTER_VALIDATE_IP)) == true (line 347)

    $actual = $this->setCookie->matchesDomain($domain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatchesDomain2()
{
    $domain = m::mock('UntypedParameter_domain_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cookieDomain || !strcasecmp($domain, $cookieDomain)) == true (line 341)

    $actual = $this->setCookie->matchesDomain($domain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsExpired0()
{
    // TODO: Your mock expectations here

    $actual = $this->setCookie->isExpired();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($name) && !is_numeric($name)) == false (line 373)
    // if (preg_match('/[\\x00-\\x20\\x22\\x28-\\x29\\x2c\\x2f\\x3a-\\x40\\x5c\\x7b\\x7d\\x7f]/', $name)) == false (line 378)
    // if (empty($value) && !is_numeric($value)) == false (line 389)
    // if (empty($domain) && !is_numeric($domain)) == false (line 397)

    $actual = $this->setCookie->validate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($name) && !is_numeric($name)) == false (line 373)
    // if (preg_match('/[\\x00-\\x20\\x22\\x28-\\x29\\x2c\\x2f\\x3a-\\x40\\x5c\\x7b\\x7d\\x7f]/', $name)) == false (line 378)
    // if (empty($value) && !is_numeric($value)) == false (line 389)
    // if (empty($domain) && !is_numeric($domain)) == true (line 397)

    $actual = $this->setCookie->validate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($name) && !is_numeric($name)) == false (line 373)
    // if (preg_match('/[\\x00-\\x20\\x22\\x28-\\x29\\x2c\\x2f\\x3a-\\x40\\x5c\\x7b\\x7d\\x7f]/', $name)) == false (line 378)
    // if (empty($value) && !is_numeric($value)) == true (line 389)

    $actual = $this->setCookie->validate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($name) && !is_numeric($name)) == false (line 373)
    // if (preg_match('/[\\x00-\\x20\\x22\\x28-\\x29\\x2c\\x2f\\x3a-\\x40\\x5c\\x7b\\x7d\\x7f]/', $name)) == true (line 378)

    $actual = $this->setCookie->validate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($name) && !is_numeric($name)) == true (line 373)

    $actual = $this->setCookie->validate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
