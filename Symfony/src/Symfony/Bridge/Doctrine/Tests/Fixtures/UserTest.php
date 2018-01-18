<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_id1 = null;
/**
* @var mixed
*/
protected $_id2 = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\User
*/
protected $user;

public function setUp()
{
    parent::setUp();

    $this->_id1 = null;
    $this->_id2 = null;
    $this->_name = null;
    $this->user = new \Symfony\Bridge\Doctrine\Tests\Fixtures\User($this->_id1, $this->_id2, $this->_name);
}

public function testGetRoles0()
{
    // TODO: Your mock expectations here

    $actual = $this->user->getRoles();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPassword0()
{
    // TODO: Your mock expectations here

    $actual = $this->user->getPassword();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSalt0()
{
    // TODO: Your mock expectations here

    $actual = $this->user->getSalt();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUsername0()
{
    // TODO: Your mock expectations here

    $actual = $this->user->getUsername();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEraseCredentials0()
{
    // TODO: Your mock expectations here

    $actual = $this->user->eraseCredentials();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEquals0()
{
    $user = m::mock(\Symfony\Component\Security\Core\User\UserInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->user->equals($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
