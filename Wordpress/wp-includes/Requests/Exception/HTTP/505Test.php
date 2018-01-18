<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_505;

class Requests_Exception_HTTP_505Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_505
*/
protected $requests_Exception_HTTP_505;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_505 = new \Requests_Exception_HTTP_505();
}
}
