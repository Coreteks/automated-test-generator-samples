<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_429;

class Requests_Exception_HTTP_429Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_429
*/
protected $requests_Exception_HTTP_429;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_429 = new \Requests_Exception_HTTP_429();
}
}
