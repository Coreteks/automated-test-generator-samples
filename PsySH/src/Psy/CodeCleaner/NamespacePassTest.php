<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner;
use Psy\CodeCleaner\NamespacePass;

class NamespacePassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cleaner;
/**
* @var \Psy\CodeCleaner\NamespacePass
*/
protected $namespacePass;

public function setUp()
{
    parent::setUp();

    $this->_cleaner = m::mock(\Psy\CodeCleaner::class);
    $this->namespacePass = new \Psy\CodeCleaner\NamespacePass($this->_cleaner);
}

public function testBeforeTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($nodes)) == false (line 52)
    // if (!$last instanceof \PhpParser\Node\Stmt\Namespace_) == false (line 57)

    $actual = $this->namespacePass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse1()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($nodes)) == false (line 52)
    // if (!$last instanceof \PhpParser\Node\Stmt\Namespace_) == true (line 57)

    $actual = $this->namespacePass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse2()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($nodes)) == true (line 52)

    $actual = $this->namespacePass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
