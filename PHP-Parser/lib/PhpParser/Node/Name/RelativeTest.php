<?php

namespace tests\PhpParser\Node\Name;

use Mockery as m;
use PhpParser\Node\Name\Relative;

class RelativeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\Name\Relative
*/
protected $relative;

public function setUp()
{
    parent::setUp();

    $this->relative = new \PhpParser\Node\Name\Relative();
}

public function testIsUnqualified0()
{
    // TODO: Your mock expectations here

    $actual = $this->relative->isUnqualified();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsQualified0()
{
    // TODO: Your mock expectations here

    $actual = $this->relative->isQualified();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFullyQualified0()
{
    // TODO: Your mock expectations here

    $actual = $this->relative->isFullyQualified();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsRelative0()
{
    // TODO: Your mock expectations here

    $actual = $this->relative->isRelative();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToCodeString0()
{
    // TODO: Your mock expectations here

    $actual = $this->relative->toCodeString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->relative->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
