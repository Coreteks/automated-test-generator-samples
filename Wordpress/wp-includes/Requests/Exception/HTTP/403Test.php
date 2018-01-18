<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_403;

class Requests_Exception_HTTP_403Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_403
*/
protected $requests_Exception_HTTP_403;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_403 = new \Requests_Exception_HTTP_403();
}
}
