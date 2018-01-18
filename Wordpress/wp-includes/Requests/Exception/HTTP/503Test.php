<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_503;

class Requests_Exception_HTTP_503Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_503
*/
protected $requests_Exception_HTTP_503;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_503 = new \Requests_Exception_HTTP_503();
}
}
