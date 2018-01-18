<?php

namespace tests\Mockery\Exception;

use Mockery as m;
use Mockery\Exception\RuntimeException;

class RuntimeExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Exception\RuntimeException
*/
protected $runtimeException;

public function setUp()
{
    parent::setUp();

    $this->runtimeException = new \Mockery\Exception\RuntimeException();
}
}
