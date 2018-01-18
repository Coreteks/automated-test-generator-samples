<?php

namespace tests\Illuminate\Auth;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Hashing\Hasher;
use Mockery as m;

class EloquentUserProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_hasher;
/**
* @var mixed
*/
protected $_model = null;
/**
* @var \Illuminate\Auth\EloquentUserProvider
*/
protected $eloquentUserProvider;

public function setUp()
{
    parent::setUp();

    $this->_hasher = m::mock(\Illuminate\Contracts\Hashing\Hasher::class);
    $this->_model = null;
    $this->eloquentUserProvider = new \Illuminate\Auth\EloquentUserProvider($this->_hasher, $this->_model);
}

public function testRetrieveById0()
{
    $identifier = m::mock('UntypedParameter_identifier_');

    // TODO: Your mock expectations here

    $actual = $this->eloquentUserProvider->retrieveById($identifier);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRetrieveByToken0()
{
    $identifier = m::mock('UntypedParameter_identifier_');
    $token = m::mock('UntypedParameter_token_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$model) == false (line 67)

    $actual = $this->eloquentUserProvider->retrieveByToken($identifier, $token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRetrieveByToken1()
{
    $identifier = m::mock('UntypedParameter_identifier_');
    $token = m::mock('UntypedParameter_token_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$model) == true (line 67)

    $actual = $this->eloquentUserProvider->retrieveByToken($identifier, $token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdateRememberToken0()
{
    $user = m::mock(\Illuminate\Contracts\Auth\Authenticatable::class);
    $token = m::mock('UntypedParameter_token_');

    // TODO: Your mock expectations here

    $actual = $this->eloquentUserProvider->updateRememberToken($user, $token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRetrieveByCredentials0()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($credentials) || count($credentials) === 1 && array_key_exists('password', $credentials)) == false (line 104)

    $actual = $this->eloquentUserProvider->retrieveByCredentials($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRetrieveByCredentials1()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($credentials) || count($credentials) === 1 && array_key_exists('password', $credentials)) == false (line 104)
    // if (!\Illuminate\Support\Str::contains($key, 'password')) == false (line 116)

    $actual = $this->eloquentUserProvider->retrieveByCredentials($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRetrieveByCredentials2()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($credentials) || count($credentials) === 1 && array_key_exists('password', $credentials)) == false (line 104)
    // if (!\Illuminate\Support\Str::contains($key, 'password')) == true (line 116)

    $actual = $this->eloquentUserProvider->retrieveByCredentials($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRetrieveByCredentials3()
{
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($credentials) || count($credentials) === 1 && array_key_exists('password', $credentials)) == true (line 104)

    $actual = $this->eloquentUserProvider->retrieveByCredentials($credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidateCredentials0()
{
    $user = m::mock(\Illuminate\Contracts\Auth\Authenticatable::class);
    $credentials = [];

    // TODO: Your mock expectations here

    $actual = $this->eloquentUserProvider->validateCredentials($user, $credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateModel0()
{
    // TODO: Your mock expectations here

    $actual = $this->eloquentUserProvider->createModel();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHasher0()
{
    // TODO: Your mock expectations here

    $actual = $this->eloquentUserProvider->getHasher();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetHasher0()
{
    $hasher = m::mock(\Illuminate\Contracts\Hashing\Hasher::class);

    // TODO: Your mock expectations here

    $actual = $this->eloquentUserProvider->setHasher($hasher);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetModel0()
{
    // TODO: Your mock expectations here

    $actual = $this->eloquentUserProvider->getModel();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetModel0()
{
    $model = m::mock('UntypedParameter_model_');

    // TODO: Your mock expectations here

    $actual = $this->eloquentUserProvider->setModel($model);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
