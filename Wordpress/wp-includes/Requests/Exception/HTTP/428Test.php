<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_428;

class Requests_Exception_HTTP_428Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_428
*/
protected $requests_Exception_HTTP_428;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_428 = new \Requests_Exception_HTTP_428();
}
}
