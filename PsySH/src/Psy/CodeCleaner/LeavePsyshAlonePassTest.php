<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\LeavePsyshAlonePass;

class LeavePsyshAlonePassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\LeavePsyshAlonePass
*/
protected $leavePsyshAlonePass;

public function setUp()
{
    parent::setUp();

    $this->leavePsyshAlonePass = new \Psy\CodeCleaner\LeavePsyshAlonePass();
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Variable && $node->name === '__psysh__') == false (line 32)

    $actual = $this->leavePsyshAlonePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\RuntimeException
 */
public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Variable && $node->name === '__psysh__') == true (line 32)
    // throw new \Psy\Exception\RuntimeException('Don\'t mess with $__psysh__. Bad things will happen.') -> exception (line 33)

    $actual = $this->leavePsyshAlonePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
