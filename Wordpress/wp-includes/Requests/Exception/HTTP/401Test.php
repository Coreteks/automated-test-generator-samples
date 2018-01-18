<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_401;

class Requests_Exception_HTTP_401Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_401
*/
protected $requests_Exception_HTTP_401;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_401 = new \Requests_Exception_HTTP_401();
}
}
