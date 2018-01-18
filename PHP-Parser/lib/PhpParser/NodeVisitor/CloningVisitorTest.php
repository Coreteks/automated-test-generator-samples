<?php

namespace tests\PhpParser\NodeVisitor;

use Mockery as m;
use PhpParser\NodeVisitor\CloningVisitor;

class CloningVisitorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\NodeVisitor\CloningVisitor
*/
protected $cloningVisitor;

public function setUp()
{
    parent::setUp();

    $this->cloningVisitor = new \PhpParser\NodeVisitor\CloningVisitor();
}

public function testEnterNode0()
{
    $origNode = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    $actual = $this->cloningVisitor->enterNode($origNode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
