<?php

namespace tests\PHPUnit\Runner;

use Mockery as m;
use PHPUnit\Runner\Exception;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Runner\Exception
*/
protected $exception;

public function setUp()
{
    parent::setUp();

    $this->exception = new \PHPUnit\Runner\Exception();
}
}
