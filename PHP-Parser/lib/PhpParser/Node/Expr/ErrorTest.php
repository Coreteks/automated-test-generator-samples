<?php

namespace tests\PhpParser\Node\Expr;

use Mockery as m;
use PhpParser\Node\Expr\Error;

class ErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Expr\Error
*/
protected $error;

public function setUp()
{
    parent::setUp();

    $this->_attributes = [];
    $this->error = new \PhpParser\Node\Expr\Error($this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->error->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->error->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
