<?php

namespace tests;

use Mockery as m;
use SimplePie_Exception;

class SimplePie_ExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \SimplePie_Exception
*/
protected $simplePie_Exception;

public function setUp()
{
    parent::setUp();

    $this->simplePie_Exception = new \SimplePie_Exception();
}
}
