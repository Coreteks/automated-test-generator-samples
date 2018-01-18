<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_412;

class Requests_Exception_HTTP_412Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_412
*/
protected $requests_Exception_HTTP_412;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_412 = new \Requests_Exception_HTTP_412();
}
}
