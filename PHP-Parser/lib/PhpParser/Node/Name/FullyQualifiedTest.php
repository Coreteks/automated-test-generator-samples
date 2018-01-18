<?php

namespace tests\PhpParser\Node\Name;

use Mockery as m;
use PhpParser\Node\Name\FullyQualified;

class FullyQualifiedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Name\FullyQualified
*/
protected $fullyQualified;

public function setUp()
{
    parent::setUp();

    $this->fullyQualified = new \PhpParser\Node\Name\FullyQualified();
}

public function testIsUnqualified0()
{
    // TODO: Your mock expectations here

    $actual = $this->fullyQualified->isUnqualified();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsQualified0()
{
    // TODO: Your mock expectations here

    $actual = $this->fullyQualified->isQualified();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFullyQualified0()
{
    // TODO: Your mock expectations here

    $actual = $this->fullyQualified->isFullyQualified();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsRelative0()
{
    // TODO: Your mock expectations here

    $actual = $this->fullyQualified->isRelative();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToCodeString0()
{
    // TODO: Your mock expectations here

    $actual = $this->fullyQualified->toCodeString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->fullyQualified->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
