<?php

namespace tests\Monolog\Handler;

use Doctrine\CouchDB\CouchDBClient;
use Mockery as m;
use Monolog\Handler\DoctrineCouchDBHandler;

class DoctrineCouchDBHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_client;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\DoctrineCouchDBHandler
*/
protected $doctrineCouchDBHandler;

public function setUp()
{
    parent::setUp();

    $this->_client = m::mock(\Doctrine\CouchDB\CouchDBClient::class);
    $this->_level = null;
    $this->_bubble = null;
    $this->doctrineCouchDBHandler = new \Monolog\Handler\DoctrineCouchDBHandler($this->_client, $this->_level, $this->_bubble);
}
}
