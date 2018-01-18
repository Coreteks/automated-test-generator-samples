<?php

namespace tests\Illuminate\Session;

use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Session\EncryptedStore;
use Mockery as m;
use SessionHandlerInterface;

class EncryptedStoreTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Mockery\MockInterface
*/
protected $_handler;
/**
* @var \Mockery\MockInterface
*/
protected $_encrypter;
/**
* @var mixed
*/
protected $_id = null;
/**
* @var \Illuminate\Session\EncryptedStore
*/
protected $encryptedStore;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_handler = m::mock(\SessionHandlerInterface::class);
    $this->_encrypter = m::mock(\Illuminate\Contracts\Encryption\Encrypter::class);
    $this->_id = null;
    $this->encryptedStore = new \Illuminate\Session\EncryptedStore($this->_name, $this->_handler, $this->_encrypter, $this->_id);
}

public function testGetEncrypter0()
{
    // TODO: Your mock expectations here

    $actual = $this->encryptedStore->getEncrypter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
