<?php

namespace tests\PhpParser\Node\Scalar\MagicConst;

use Mockery as m;
use PhpParser\Node\Scalar\MagicConst\Line;

class LineTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Scalar\MagicConst\Line
*/
protected $line;

public function setUp()
{
    parent::setUp();

    $this->line = new \PhpParser\Node\Scalar\MagicConst\Line();
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->line->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->line->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
