<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\AssignThisVariablePass;

class AssignThisVariablePassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\AssignThisVariablePass
*/
protected $assignThisVariablePass;

public function setUp()
{
    parent::setUp();

    $this->assignThisVariablePass = new \Psy\CodeCleaner\AssignThisVariablePass();
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $node->var instanceof \PhpParser\Node\Expr\Variable && $node->var->name === 'this') == false (line 35)

    $actual = $this->assignThisVariablePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\Assign && $node->var instanceof \PhpParser\Node\Expr\Variable && $node->var->name === 'this') == true (line 35)
    // throw new \Psy\Exception\FatalErrorException('Cannot re-assign $this', 0, E_ERROR, null, $node->getLine()) -> exception (line 36)

    $actual = $this->assignThisVariablePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
