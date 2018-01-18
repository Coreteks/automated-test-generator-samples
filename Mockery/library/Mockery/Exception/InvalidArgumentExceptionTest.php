<?php

namespace tests\Mockery\Exception;

use Mockery as m;
use Mockery\Exception\InvalidArgumentException;

class InvalidArgumentExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Exception\InvalidArgumentException
*/
protected $invalidArgumentException;

public function setUp()
{
    parent::setUp();

    $this->invalidArgumentException = new \Mockery\Exception\InvalidArgumentException();
}
}
