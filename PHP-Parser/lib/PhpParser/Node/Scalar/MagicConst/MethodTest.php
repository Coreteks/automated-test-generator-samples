<?php

namespace tests\PhpParser\Node\Scalar\MagicConst;

use Mockery as m;
use PhpParser\Node\Scalar\MagicConst\Method;

class MethodTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Scalar\MagicConst\Method
*/
protected $method;

public function setUp()
{
    parent::setUp();

    $this->method = new \PhpParser\Node\Scalar\MagicConst\Method();
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->method->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->method->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
