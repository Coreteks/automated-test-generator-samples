<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\ValidConstantPass;

class ValidConstantPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\ValidConstantPass
*/
protected $validConstantPass;

public function setUp()
{
    parent::setUp();

    $this->validConstantPass = new \Psy\CodeCleaner\ValidConstantPass();
}

public function testLeaveNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch && count($node->name->parts) > 1) == false (line 45)
    // if ($node instanceof \PhpParser\Node\Expr\ClassConstFetch) == false (line 51)

    $actual = $this->validConstantPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch && count($node->name->parts) > 1) == false (line 45)
    // if ($node instanceof \PhpParser\Node\Expr\ClassConstFetch) == true (line 51)

    $actual = $this->validConstantPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeaveNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch && count($node->name->parts) > 1) == true (line 45)
    // if (!defined($name)) == false (line 47)

    $actual = $this->validConstantPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testLeaveNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Expr\ConstFetch && count($node->name->parts) > 1) == true (line 45)
    // if (!defined($name)) == true (line 47)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $node->getLine()) -> exception (line 49)

    $actual = $this->validConstantPass->leaveNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
