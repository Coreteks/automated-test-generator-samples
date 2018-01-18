<?php

namespace tests\PhpParser\Internal;

use Mockery as m;
use PhpParser\Internal\Differ;

class DifferTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_isEqual = null;
/**
* @var \PhpParser\Internal\Differ
*/
protected $differ;

public function setUp()
{
    parent::setUp();

    $this->_isEqual = null;
    $this->differ = new \PhpParser\Internal\Differ($this->_isEqual);
}

public function testDiff0()
{
    $old = [];
    $new = [];

    // TODO: Your mock expectations here

    $actual = $this->differ->diff($old, $new);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiffWithReplacements0()
{
    $old = [];
    $new = [];

    // TODO: Your mock expectations here

    $actual = $this->differ->diffWithReplacements($old, $new);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
