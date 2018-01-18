<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_407;

class Requests_Exception_HTTP_407Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_407
*/
protected $requests_Exception_HTTP_407;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_407 = new \Requests_Exception_HTTP_407();
}
}
