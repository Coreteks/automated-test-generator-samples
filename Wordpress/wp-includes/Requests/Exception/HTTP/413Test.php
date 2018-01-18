<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_413;

class Requests_Exception_HTTP_413Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_413
*/
protected $requests_Exception_HTTP_413;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_413 = new \Requests_Exception_HTTP_413();
}
}
