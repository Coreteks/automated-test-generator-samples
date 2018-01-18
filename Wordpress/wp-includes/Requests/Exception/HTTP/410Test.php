<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_410;

class Requests_Exception_HTTP_410Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_410
*/
protected $requests_Exception_HTTP_410;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_410 = new \Requests_Exception_HTTP_410();
}
}
