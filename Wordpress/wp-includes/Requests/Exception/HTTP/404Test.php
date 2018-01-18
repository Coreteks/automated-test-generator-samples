<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_404;

class Requests_Exception_HTTP_404Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_404
*/
protected $requests_Exception_HTTP_404;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_404 = new \Requests_Exception_HTTP_404();
}
}
