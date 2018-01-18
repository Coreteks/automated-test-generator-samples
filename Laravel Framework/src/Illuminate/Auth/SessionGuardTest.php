<?php

namespace tests\Illuminate\Auth;

use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Session\Session;
use Mockery as m;
use Symfony\Component\HttpFoundation\Request;

class SessionGuardTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Mockery\MockInterface
*/
protected $_provider;
/**
* @var \Mockery\MockInterface
*/
protected $_session;
/**
* @var \Mockery\MockInterface
*/
protected $_request;
/**
* @var \Illuminate\Auth\SessionGuard
*/
protected $sessionGuard;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_provider = m::mock(\Illuminate\Contracts\Auth\UserProvider::class);
    $this->_session = m::mock(\Illuminate\Contracts\Session\Session::class);
    $this->_request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $this->sessionGuard = new \Illuminate\Auth\SessionGuard($this->_name, $this->_provider, $this->_session, $this->_request);
}

public function testUser0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggedOut) == false (line 114)
    // if (!is_null($this->user)) == false (line 121)
    // if (!is_null($id)) == false (line 130)
    // if (is_null($this->user) && !is_null($recaller)) == false (line 141)

    $actual = $this->sessionGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggedOut) == false (line 114)
    // if (!is_null($this->user)) == false (line 121)
    // if (!is_null($id)) == false (line 130)
    // if (is_null($this->user) && !is_null($recaller)) == true (line 141)
    // if ($this->user) == false (line 144)

    $actual = $this->sessionGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggedOut) == false (line 114)
    // if (!is_null($this->user)) == false (line 121)
    // if (!is_null($id)) == false (line 130)
    // if (is_null($this->user) && !is_null($recaller)) == true (line 141)
    // if ($this->user) == true (line 144)

    $actual = $this->sessionGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggedOut) == false (line 114)
    // if (!is_null($this->user)) == false (line 121)
    // if (!is_null($id)) == true (line 130)
    // if ($this->user = $this->provider->retrieveById($id)) == false (line 131)
    // if (is_null($this->user) && !is_null($recaller)) == false (line 141)

    $actual = $this->sessionGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggedOut) == false (line 114)
    // if (!is_null($this->user)) == false (line 121)
    // if (!is_null($id)) == true (line 130)
    // if ($this->user = $this->provider->retrieveById($id)) == false (line 131)
    // if (is_null($this->user) && !is_null($recaller)) == true (line 141)
    // if ($this->user) == false (line 144)

    $actual = $this->sessionGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggedOut) == false (line 114)
    // if (!is_null($this->user)) == false (line 121)
    // if (!is_null($id)) == true (line 130)
    // if ($this->user = $this->provider->retrieveById($id)) == false (line 131)
    // if (is_null($this->user) && !is_null($recaller)) == true (line 141)
    // if ($this->user) == true (line 144)

    $actual = $this->sessionGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggedOut) == false (line 114)
    // if (!is_null($this->user)) == false (line 121)
    // if (!is_null($id)) == true (line 130)
    // if ($this->user = $this->provider->retrieveById($id)) == true (line 131)
    // if (is_null($this->user) && !is_null($recaller)) == false (line 141)

    $actual = $this->sessionGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggedOut) == false (line 114)
    // if (!is_null($this->user)) == false (line 121)
    // if (!is_null($id)) == true (line 130)
    // if ($this->user = $this->provider->retrieveById($id)) == true (line 131)
    // if (is_null($this->user) && !is_null($recaller)) == true (line 141)
    // if ($this->user) == false (line 144)

    $actual = $this->sessionGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggedOut) == false (line 114)
    // if (!is_null($this->user)) == false (line 121)
    // if (!is_null($id)) == true (line 130)
    // if ($this->user = $this->provider->retrieveById($id)) == true (line 131)
    // if (is_null($this->user) && !is_null($recaller)) == true (line 141)
    // if ($this->user) == true (line 144)

    $actual = $this->sessionGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggedOut) == false (line 114)
    // if (!is_null($this->user)) == true (line 121)

    $actual = $this->sessionGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggedOut) == true (line 114)

    $actual = $this->sessionGuard->user();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testId0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggedOut) == false (line 201)

    $actual = $this->sessionGuard->id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testId1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggedOut) == true (line 201)

    $actual = $this->sessionGuard->id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnce0()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->validate($credentials)) == false (line 220)

    $actual = $this->sessionGuard->once($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnce1()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->validate($credentials)) == true (line 220)

    $actual = $this->sessionGuard->once($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnceUsingId0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($user = $this->provider->retrieveById($id))) == false (line 237)

    $actual = $this->sessionGuard->onceUsingId($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnceUsingId1()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($user = $this->provider->retrieveById($id))) == true (line 237)

    $actual = $this->sessionGuard->onceUsingId($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate0()
{
    $credentials = [];

    // TODO: Your mock expectations here

    $actual = $this->sessionGuard->validate($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBasic0()
{
    $field = m::mock('UntypedParameter_field_');
    $extraConditions = m::mock('UntypedParameter_extraConditions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->check()) == false (line 268)
    // if ($this->attemptBasic($this->getRequest(), $field, $extraConditions)) == false (line 275)

    $actual = $this->sessionGuard->basic($field, $extraConditions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBasic1()
{
    $field = m::mock('UntypedParameter_field_');
    $extraConditions = m::mock('UntypedParameter_extraConditions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->check()) == false (line 268)
    // if ($this->attemptBasic($this->getRequest(), $field, $extraConditions)) == true (line 275)

    $actual = $this->sessionGuard->basic($field, $extraConditions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBasic2()
{
    $field = m::mock('UntypedParameter_field_');
    $extraConditions = m::mock('UntypedParameter_extraConditions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->check()) == true (line 268)

    $actual = $this->sessionGuard->basic($field, $extraConditions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnceBasic0()
{
    $field = m::mock('UntypedParameter_field_');
    $extraConditions = m::mock('UntypedParameter_extraConditions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->once(array_merge($credentials, $extraConditions))) == false (line 293)

    $actual = $this->sessionGuard->onceBasic($field, $extraConditions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnceBasic1()
{
    $field = m::mock('UntypedParameter_field_');
    $extraConditions = m::mock('UntypedParameter_extraConditions_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->once(array_merge($credentials, $extraConditions))) == true (line 293)

    $actual = $this->sessionGuard->onceBasic($field, $extraConditions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttempt0()
{
    $credentials = [];
    $remember = m::mock('UntypedParameter_remember_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasValidCredentials($user, $credentials)) == false (line 356)

    $actual = $this->sessionGuard->attempt($credentials, $remember);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttempt1()
{
    $credentials = [];
    $remember = m::mock('UntypedParameter_remember_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasValidCredentials($user, $credentials)) == true (line 356)

    $actual = $this->sessionGuard->attempt($credentials, $remember);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoginUsingId0()
{
    $id = m::mock('UntypedParameter_id_');
    $remember = m::mock('UntypedParameter_remember_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($user = $this->provider->retrieveById($id))) == false (line 391)

    $actual = $this->sessionGuard->loginUsingId($id, $remember);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoginUsingId1()
{
    $id = m::mock('UntypedParameter_id_');
    $remember = m::mock('UntypedParameter_remember_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($user = $this->provider->retrieveById($id))) == true (line 391)

    $actual = $this->sessionGuard->loginUsingId($id, $remember);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogin0()
{
    $user = m::mock(\Illuminate\Contracts\Auth\Authenticatable::class);
    $remember = m::mock('UntypedParameter_remember_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($remember) == false (line 414)

    $actual = $this->sessionGuard->login($user, $remember);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogin1()
{
    $user = m::mock(\Illuminate\Contracts\Auth\Authenticatable::class);
    $remember = m::mock('UntypedParameter_remember_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($remember) == true (line 414)

    $actual = $this->sessionGuard->login($user, $remember);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogout0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->user)) == false (line 492)
    // if (isset($this->events)) == false (line 496)

    $actual = $this->sessionGuard->logout();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogout1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->user)) == false (line 492)
    // if (isset($this->events)) == true (line 496)

    $actual = $this->sessionGuard->logout();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogout2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->user)) == true (line 492)
    // if (isset($this->events)) == false (line 496)

    $actual = $this->sessionGuard->logout();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogout3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($this->user)) == true (line 492)
    // if (isset($this->events)) == true (line 496)

    $actual = $this->sessionGuard->logout();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttempting0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->events)) == false (line 544)

    $actual = $this->sessionGuard->attempting($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttempting1()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->events)) == true (line 544)

    $actual = $this->sessionGuard->attempting($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastAttempted0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionGuard->getLastAttempted();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionGuard->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRecallerName0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionGuard->getRecallerName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testViaRemember0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionGuard->viaRemember();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCookieJar0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->cookie)) == false (line 655)

    $actual = $this->sessionGuard->getCookieJar();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetCookieJar1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->cookie)) == true (line 655)
    // throw new \RuntimeException('Cookie jar has not been set.') -> exception (line 656)

    $actual = $this->sessionGuard->getCookieJar();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCookieJar0()
{
    $cookie = m::mock(\Illuminate\Contracts\Cookie\QueueingFactory::class);

    // TODO: Your mock expectations here

    $actual = $this->sessionGuard->setCookieJar($cookie);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDispatcher0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionGuard->getDispatcher();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDispatcher0()
{
    $events = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);

    // TODO: Your mock expectations here

    $actual = $this->sessionGuard->setDispatcher($events);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSession0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionGuard->getSession();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUser0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionGuard->getUser();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetUser0()
{
    $user = m::mock(\Illuminate\Contracts\Auth\Authenticatable::class);

    // TODO: Your mock expectations here

    $actual = $this->sessionGuard->setUser($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRequest0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionGuard->getRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRequest0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->sessionGuard->setRequest($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
