<?php

namespace tests\GuzzleHttp;

use GuzzleHttp\TransferStats;
use Mockery as m;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class TransferStatsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_request;
/**
* @var \Mockery\MockInterface
*/
protected $_response;
/**
* @var mixed
*/
protected $_transferTime = null;
/**
* @var mixed
*/
protected $_handlerErrorData = null;
/**
* @var mixed
*/
protected $_handlerStats = null;
/**
* @var \GuzzleHttp\TransferStats
*/
protected $transferStats;

public function setUp()
{
    parent::setUp();

    $this->_request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $this->_response = m::mock(\Psr\Http\Message\ResponseInterface::class);
    $this->_transferTime = null;
    $this->_handlerErrorData = null;
    $this->_handlerStats = null;
    $this->transferStats = new \GuzzleHttp\TransferStats($this->_request, $this->_response, $this->_transferTime, $this->_handlerErrorData, $this->_handlerStats);
}

public function testGetRequest0()
{
    // TODO: Your mock expectations here

    $actual = $this->transferStats->getRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResponse0()
{
    // TODO: Your mock expectations here

    $actual = $this->transferStats->getResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasResponse0()
{
    // TODO: Your mock expectations here

    $actual = $this->transferStats->hasResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHandlerErrorData0()
{
    // TODO: Your mock expectations here

    $actual = $this->transferStats->getHandlerErrorData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEffectiveUri0()
{
    // TODO: Your mock expectations here

    $actual = $this->transferStats->getEffectiveUri();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTransferTime0()
{
    // TODO: Your mock expectations here

    $actual = $this->transferStats->getTransferTime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHandlerStats0()
{
    // TODO: Your mock expectations here

    $actual = $this->transferStats->getHandlerStats();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHandlerStat0()
{
    $stat = m::mock('UntypedParameter_stat_');

    // TODO: Your mock expectations here

    $actual = $this->transferStats->getHandlerStat($stat);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
