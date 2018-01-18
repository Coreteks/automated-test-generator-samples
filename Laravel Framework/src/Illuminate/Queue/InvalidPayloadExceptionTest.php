<?php

namespace tests\Illuminate\Queue;

use Illuminate\Queue\InvalidPayloadException;
use Mockery as m;

class InvalidPayloadExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var \Illuminate\Queue\InvalidPayloadException
*/
protected $invalidPayloadException;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->invalidPayloadException = new \Illuminate\Queue\InvalidPayloadException($this->_message);
}
}
