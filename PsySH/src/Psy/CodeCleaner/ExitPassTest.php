<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\ExitPass;

class ExitPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\ExitPass
*/
protected $exitPass;

public function setUp()
{
    parent::setUp();

    $this->exitPass = new \Psy\CodeCleaner\ExitPass();
}

public function testLeaveNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Exit_) == false (line 28)

    $actual = $this->exitPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Exit_) == true (line 28)

    $actual = $this->exitPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
