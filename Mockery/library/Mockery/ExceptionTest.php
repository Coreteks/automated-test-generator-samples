<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\Exception;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Exception
*/
protected $exception;

public function setUp()
{
    parent::setUp();

    $this->exception = new \Mockery\Exception();
}
}
