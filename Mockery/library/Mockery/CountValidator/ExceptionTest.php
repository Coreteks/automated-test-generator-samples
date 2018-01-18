<?php

namespace tests\Mockery\CountValidator;

use Mockery as m;
use Mockery\CountValidator\Exception;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\CountValidator\Exception
*/
protected $exception;

public function setUp()
{
    parent::setUp();

    $this->exception = new \Mockery\CountValidator\Exception();
}
}
