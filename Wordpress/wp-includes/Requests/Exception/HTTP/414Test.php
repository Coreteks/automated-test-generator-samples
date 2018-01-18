<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_414;

class Requests_Exception_HTTP_414Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_414
*/
protected $requests_Exception_HTTP_414;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_414 = new \Requests_Exception_HTTP_414();
}
}
