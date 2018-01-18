<?php

namespace tests\PhpParser\Node\Expr\BinaryOp;

use Mockery as m;
use PhpParser\Node\Expr\BinaryOp\Spaceship;

class SpaceshipTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Expr\BinaryOp\Spaceship
*/
protected $spaceship;

public function setUp()
{
    parent::setUp();

    $this->spaceship = new \PhpParser\Node\Expr\BinaryOp\Spaceship();
}

public function testGetOperatorSigil0()
{
    // TODO: Your mock expectations here

    $actual = $this->spaceship->getOperatorSigil();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->spaceship->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
