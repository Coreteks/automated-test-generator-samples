<?php

namespace tests;

use Mockery as m;
use getid3_exception;

class getid3_exceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \getid3_exception
*/
protected $getid3_exception;

public function setUp()
{
    parent::setUp();

    $this->getid3_exception = new \getid3_exception();
}
}
