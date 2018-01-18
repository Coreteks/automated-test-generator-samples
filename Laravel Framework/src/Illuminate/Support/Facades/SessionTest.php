<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Session;
use Mockery as m;

class SessionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Session
*/
protected $session;

public function setUp()
{
    parent::setUp();

    $this->session = new \Illuminate\Support\Facades\Session();
}
}
