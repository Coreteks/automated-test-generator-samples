<?php

namespace tests\Illuminate\Auth;

use Illuminate\Auth\Recaller;
use Mockery as m;

class RecallerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_recaller = null;
/**
* @var \Illuminate\Auth\Recaller
*/
protected $recaller;

public function setUp()
{
    parent::setUp();

    $this->_recaller = null;
    $this->recaller = new \Illuminate\Auth\Recaller($this->_recaller);
}

public function testId0()
{
    // TODO: Your mock expectations here

    $actual = $this->recaller->id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToken0()
{
    // TODO: Your mock expectations here

    $actual = $this->recaller->token();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHash0()
{
    // TODO: Your mock expectations here

    $actual = $this->recaller->hash();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid0()
{
    // TODO: Your mock expectations here

    $actual = $this->recaller->valid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
