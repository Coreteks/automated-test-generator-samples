<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\InstanceOfPass;

class InstanceOfPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\InstanceOfPass
*/
protected $instanceOfPass;

public function setUp()
{
    parent::setUp();

    $this->instanceOfPass = new \Psy\CodeCleaner\InstanceOfPass();
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 39)
    // if ($node->expr instanceof \PhpParser\Node\Scalar && !$node->expr instanceof \PhpParser\Node\Scalar\Encapsed || $node->expr instanceof \PhpParser\Node\Expr\ConstFetch) == false (line 43)

    $actual = $this->instanceOfPass->enterNode($node);
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
    // if (!$node instanceof \PhpParser\Node\Expr\Instanceof_) == false (line 39)
    // if ($node->expr instanceof \PhpParser\Node\Scalar && !$node->expr instanceof \PhpParser\Node\Scalar\Encapsed || $node->expr instanceof \PhpParser\Node\Expr\ConstFetch) == true (line 43)
    // throw new \Psy\Exception\FatalErrorException(self::EXCEPTION_MSG, 0, E_ERROR, null, $node->getLine()) -> exception (line 44)

    $actual = $this->instanceOfPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$node instanceof \PhpParser\Node\Expr\Instanceof_) == true (line 39)

    $actual = $this->instanceOfPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
