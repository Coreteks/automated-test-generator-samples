<?php

namespace tests\PhpParser\Node\Scalar\MagicConst;

use Mockery as m;
use PhpParser\Node\Scalar\MagicConst\Dir;

class DirTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Scalar\MagicConst\Dir
*/
protected $dir;

public function setUp()
{
    parent::setUp();

    $this->dir = new \PhpParser\Node\Scalar\MagicConst\Dir();
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->dir->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->dir->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
