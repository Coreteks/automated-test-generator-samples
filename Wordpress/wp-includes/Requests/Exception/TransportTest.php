<?php

namespace tests;

use Mockery as m;
use Requests_Exception_Transport;

class Requests_Exception_TransportTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_Transport
*/
protected $requests_Exception_Transport;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_Transport = new \Requests_Exception_Transport();
}
}
