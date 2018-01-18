<?php

namespace tests\PhpParser\Node\Scalar\MagicConst;

use Mockery as m;
use PhpParser\Node\Scalar\MagicConst\File;

class FileTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Scalar\MagicConst\File
*/
protected $file;

public function setUp()
{
    parent::setUp();

    $this->file = new \PhpParser\Node\Scalar\MagicConst\File();
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->file->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->file->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
