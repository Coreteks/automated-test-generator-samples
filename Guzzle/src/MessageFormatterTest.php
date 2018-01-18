<?php

namespace tests\GuzzleHttp;

use GuzzleHttp\MessageFormatter;
use Mockery as m;

class MessageFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_template = null;
/**
* @var \GuzzleHttp\MessageFormatter
*/
protected $messageFormatter;

public function setUp()
{
    parent::setUp();

    $this->_template = null;
    $this->messageFormatter = new \GuzzleHttp\MessageFormatter($this->_template);
}

public function testFormat0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);
    $error = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    $actual = $this->messageFormatter->format($request, $response, $error);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
