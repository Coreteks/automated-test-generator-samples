<?php

namespace tests\Illuminate\Auth;

use Illuminate\Auth\DatabaseUserProvider;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Database\ConnectionInterface;
use Mockery as m;

class DatabaseUserProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_conn;
/**
* @var \Mockery\MockInterface
*/
protected $_hasher;
/**
* @var mixed
*/
protected $_table = null;
/**
* @var \Illuminate\Auth\DatabaseUserProvider
*/
protected $databaseUserProvider;

public function setUp()
{
    parent::setUp();

    $this->_conn = m::mock(\Illuminate\Database\ConnectionInterface::class);
    $this->_hasher = m::mock(\Illuminate\Contracts\Hashing\Hasher::class);
    $this->_table = null;
    $this->databaseUserProvider = new \Illuminate\Auth\DatabaseUserProvider($this->_conn, $this->_hasher, $this->_table);
}

public function testRetrieveById0()
{
    $identifier = m::mock('UntypedParameter_identifier_');

    // TODO: Your mock expectations here

    $actual = $this->databaseUserProvider->retrieveById($identifier);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRetrieveByToken0()
{
    $identifier = m::mock('UntypedParameter_identifier_');
    $token = m::mock('UntypedParameter_token_');

    // TODO: Your mock expectations here

    $actual = $this->databaseUserProvider->retrieveByToken($identifier, $token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdateRememberToken0()
{
    $user = m::mock(\Illuminate\Contracts\Auth\Authenticatable::class);
    $token = m::mock('UntypedParameter_token_');

    // TODO: Your mock expectations here

    $actual = $this->databaseUserProvider->updateRememberToken($user, $token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRetrieveByCredentials0()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($credentials) || count($credentials) === 1 && array_key_exists('password', $credentials)) == false (line 101)

    $actual = $this->databaseUserProvider->retrieveByCredentials($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRetrieveByCredentials1()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($credentials) || count($credentials) === 1 && array_key_exists('password', $credentials)) == false (line 101)
    // if (!\Illuminate\Support\Str::contains($key, 'password')) == false (line 113)

    $actual = $this->databaseUserProvider->retrieveByCredentials($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRetrieveByCredentials2()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($credentials) || count($credentials) === 1 && array_key_exists('password', $credentials)) == false (line 101)
    // if (!\Illuminate\Support\Str::contains($key, 'password')) == true (line 113)

    $actual = $this->databaseUserProvider->retrieveByCredentials($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRetrieveByCredentials3()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($credentials) || count($credentials) === 1 && array_key_exists('password', $credentials)) == true (line 101)

    $actual = $this->databaseUserProvider->retrieveByCredentials($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidateCredentials0()
{
    $user = m::mock(\Illuminate\Contracts\Auth\Authenticatable::class);
    $credentials = [];

    // TODO: Your mock expectations here

    $actual = $this->databaseUserProvider->validateCredentials($user, $credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
