<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_416;

class Requests_Exception_HTTP_416Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_416
*/
protected $requests_Exception_HTTP_416;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_416 = new \Requests_Exception_HTTP_416();
}
}
