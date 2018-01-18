<?php

namespace tests\Illuminate\Auth\Passwords;

use Illuminate\Auth\Passwords\DatabaseTokenRepository;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Database\ConnectionInterface;
use Mockery as m;

class DatabaseTokenRepositoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_connection;
/**
* @var \Mockery\MockInterface
*/
protected $_hasher;
/**
* @var mixed
*/
protected $_table = null;
/**
* @var mixed
*/
protected $_hashKey = null;
/**
* @var mixed
*/
protected $_expires = null;
/**
* @var \Illuminate\Auth\Passwords\DatabaseTokenRepository
*/
protected $databaseTokenRepository;

public function setUp()
{
    parent::setUp();

    $this->_connection = m::mock(\Illuminate\Database\ConnectionInterface::class);
    $this->_hasher = m::mock(\Illuminate\Contracts\Hashing\Hasher::class);
    $this->_table = null;
    $this->_hashKey = null;
    $this->_expires = null;
    $this->databaseTokenRepository = new \Illuminate\Auth\Passwords\DatabaseTokenRepository($this->_connection, $this->_hasher, $this->_table, $this->_hashKey, $this->_expires);
}

public function testCreate0()
{
    $user = m::mock(\Illuminate\Contracts\Auth\CanResetPassword::class);

    // TODO: Your mock expectations here

    $actual = $this->databaseTokenRepository->create($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists0()
{
    $user = m::mock(\Illuminate\Contracts\Auth\CanResetPassword::class);
    $token = m::mock('UntypedParameter_token_');

    // TODO: Your mock expectations here

    $actual = $this->databaseTokenRepository->exists($user, $token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $user = m::mock(\Illuminate\Contracts\Auth\CanResetPassword::class);

    // TODO: Your mock expectations here

    $actual = $this->databaseTokenRepository->delete($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteExpired0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseTokenRepository->deleteExpired();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateNewToken0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseTokenRepository->createNewToken();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConnection0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseTokenRepository->getConnection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHasher0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseTokenRepository->getHasher();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
