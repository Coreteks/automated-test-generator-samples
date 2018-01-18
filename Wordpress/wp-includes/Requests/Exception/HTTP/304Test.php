<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_304;

class Requests_Exception_HTTP_304Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_304
*/
protected $requests_Exception_HTTP_304;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_304 = new \Requests_Exception_HTTP_304();
}
}
