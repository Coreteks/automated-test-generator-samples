<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_504;

class Requests_Exception_HTTP_504Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_504
*/
protected $requests_Exception_HTTP_504;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_504 = new \Requests_Exception_HTTP_504();
}
}
