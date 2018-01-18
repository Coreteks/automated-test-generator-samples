<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_409;

class Requests_Exception_HTTP_409Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_409
*/
protected $requests_Exception_HTTP_409;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_409 = new \Requests_Exception_HTTP_409();
}
}
