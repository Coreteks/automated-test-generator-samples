<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_502;

class Requests_Exception_HTTP_502Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_502
*/
protected $requests_Exception_HTTP_502;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_502 = new \Requests_Exception_HTTP_502();
}
}
