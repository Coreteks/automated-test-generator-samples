<?php

namespace tests\Illuminate\Foundation\Testing;

use Illuminate\Foundation\Testing\HttpException;
use Mockery as m;

class HttpExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Testing\HttpException
*/
protected $httpException;

public function setUp()
{
    parent::setUp();

    $this->httpException = new \Illuminate\Foundation\Testing\HttpException();
}
}
