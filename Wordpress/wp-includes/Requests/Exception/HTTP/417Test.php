<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_417;

class Requests_Exception_HTTP_417Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_417
*/
protected $requests_Exception_HTTP_417;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_417 = new \Requests_Exception_HTTP_417();
}
}
