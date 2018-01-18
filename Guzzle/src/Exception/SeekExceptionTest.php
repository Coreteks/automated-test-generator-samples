<?php

namespace tests\GuzzleHttp\Exception;

use GuzzleHttp\Exception\SeekException;
use Mockery as m;
use Psr\Http\Message\StreamInterface;

class SeekExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_stream;
/**
* @var mixed
*/
protected $_pos = null;
/**
* @var mixed
*/
protected $_msg = null;
/**
* @var \GuzzleHttp\Exception\SeekException
*/
protected $seekException;

public function setUp()
{
    parent::setUp();

    $this->_stream = m::mock(\Psr\Http\Message\StreamInterface::class);
    $this->_pos = null;
    $this->_msg = null;
    $this->seekException = new \GuzzleHttp\Exception\SeekException($this->_stream, $this->_pos, $this->_msg);
}

public function testGetStream0()
{
    // TODO: Your mock expectations here

    $actual = $this->seekException->getStream();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
