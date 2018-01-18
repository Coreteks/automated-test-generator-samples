<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\FileExists;

class FileExistsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\FileExists
*/
protected $fileExists;

public function setUp()
{
    parent::setUp();

    $this->fileExists = new \PHPUnit\Framework\Constraint\FileExists();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->fileExists->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
