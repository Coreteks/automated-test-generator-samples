<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\DirectoryExists;

class DirectoryExistsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\DirectoryExists
*/
protected $directoryExists;

public function setUp()
{
    parent::setUp();

    $this->directoryExists = new \PHPUnit\Framework\Constraint\DirectoryExists();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->directoryExists->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
