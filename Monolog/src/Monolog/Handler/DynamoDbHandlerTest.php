<?php

namespace tests\Monolog\Handler;

use Aws\DynamoDb\DynamoDbClient;
use Mockery as m;
use Monolog\Handler\DynamoDbHandler;

class DynamoDbHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_client;
/**
* @var mixed
*/
protected $_table = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\DynamoDbHandler
*/
protected $dynamoDbHandler;

public function setUp()
{
    parent::setUp();

    $this->_client = m::mock(\Aws\DynamoDb\DynamoDbClient::class);
    $this->_table = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->dynamoDbHandler = new \Monolog\Handler\DynamoDbHandler($this->_client, $this->_table, $this->_level, $this->_bubble);
}
}
