<?php

namespace tests\Monolog\Handler;

use Aws\Sqs\SqsClient;
use Mockery as m;
use Monolog\Handler\SqsHandler;

class SqsHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_sqsClient;
/**
* @var mixed
*/
protected $_queueUrl = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\SqsHandler
*/
protected $sqsHandler;

public function setUp()
{
    parent::setUp();

    $this->_sqsClient = m::mock(\Aws\Sqs\SqsClient::class);
    $this->_queueUrl = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->sqsHandler = new \Monolog\Handler\SqsHandler($this->_sqsClient, $this->_queueUrl, $this->_level, $this->_bubble);
}
}
