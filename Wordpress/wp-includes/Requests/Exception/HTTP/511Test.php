<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_511;

class Requests_Exception_HTTP_511Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_511
*/
protected $requests_Exception_HTTP_511;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_511 = new \Requests_Exception_HTTP_511();
}
}
