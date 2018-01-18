<?php

namespace tests;

use Mockery as m;
use phpmailerException;

class phpmailerExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \phpmailerException
*/
protected $phpmailerException;

public function setUp()
{
    parent::setUp();

    $this->phpmailerException = new \phpmailerException();
}

public function testErrorMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->phpmailerException->errorMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
