<?php

namespace tests\Illuminate\Auth\Passwords;

use Illuminate\Auth\Passwords\PasswordBroker;
use Illuminate\Auth\Passwords\TokenRepositoryInterface;
use Illuminate\Contracts\Auth\UserProvider;
use Mockery as m;

class PasswordBrokerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_tokens;
/**
* @var \Mockery\MockInterface
*/
protected $_users;
/**
* @var \Illuminate\Auth\Passwords\PasswordBroker
*/
protected $passwordBroker;

public function setUp()
{
    parent::setUp();

    $this->_tokens = m::mock(\Illuminate\Auth\Passwords\TokenRepositoryInterface::class);
    $this->_users = m::mock(\Illuminate\Contracts\Auth\UserProvider::class);
    $this->passwordBroker = new \Illuminate\Auth\Passwords\PasswordBroker($this->_tokens, $this->_users);
}

public function testSendResetLink0()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($user)) == false (line 62)

    $actual = $this->passwordBroker->sendResetLink($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendResetLink1()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($user)) == true (line 62)

    $actual = $this->passwordBroker->sendResetLink($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset0()
{
    $credentials = [];
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$user instanceof \Illuminate\Contracts\Auth\CanResetPassword) == false (line 90)

    $actual = $this->passwordBroker->reset($credentials, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset1()
{
    $credentials = [];
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$user instanceof \Illuminate\Contracts\Auth\CanResetPassword) == true (line 90)

    $actual = $this->passwordBroker->reset($credentials, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidator0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->passwordBroker->validator($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidateNewPassword0()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->passwordValidator)) == false (line 148)

    $actual = $this->passwordBroker->validateNewPassword($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidateNewPassword1()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->passwordValidator)) == true (line 148)

    $actual = $this->passwordBroker->validateNewPassword($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUser0()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($user && !$user instanceof \Illuminate\Contracts\Auth\CanResetPassword) == false (line 192)

    $actual = $this->passwordBroker->getUser($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \UnexpectedValueException
 */
public function testGetUser1()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($user && !$user instanceof \Illuminate\Contracts\Auth\CanResetPassword) == true (line 192)
    // throw new \UnexpectedValueException('User must implement CanResetPassword interface.') -> exception (line 193)

    $actual = $this->passwordBroker->getUser($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateToken0()
{
    $user = m::mock(\Illuminate\Contracts\Auth\CanResetPassword::class);

    // TODO: Your mock expectations here

    $actual = $this->passwordBroker->createToken($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteToken0()
{
    $user = m::mock(\Illuminate\Contracts\Auth\CanResetPassword::class);

    // TODO: Your mock expectations here

    $actual = $this->passwordBroker->deleteToken($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTokenExists0()
{
    $user = m::mock(\Illuminate\Contracts\Auth\CanResetPassword::class);
    $token = m::mock('UntypedParameter_token_');

    // TODO: Your mock expectations here

    $actual = $this->passwordBroker->tokenExists($user, $token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRepository0()
{
    // TODO: Your mock expectations here

    $actual = $this->passwordBroker->getRepository();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
