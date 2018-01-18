<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\LegacyEmptyPass;

class LegacyEmptyPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\LegacyEmptyPass
*/
protected $legacyEmptyPass;

public function setUp()
{
    parent::setUp();

    $this->legacyEmptyPass = new \Psy\CodeCleaner\LegacyEmptyPass();
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.5', '>=')) == false (line 34)
    // if (!$node instanceof \PhpParser\Node\Expr\Empty_) == false (line 38)
    // if (!$node->expr instanceof \PhpParser\Node\Expr\Variable) == false (line 42)

    $actual = $this->legacyEmptyPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\ParseErrorException
 */
public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.5', '>=')) == false (line 34)
    // if (!$node instanceof \PhpParser\Node\Expr\Empty_) == false (line 38)
    // if (!$node->expr instanceof \PhpParser\Node\Expr\Variable) == true (line 42)
    // throw new \Psy\Exception\ParseErrorException($msg, $node->expr->getLine()) -> exception (line 45)

    $actual = $this->legacyEmptyPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.5', '>=')) == false (line 34)
    // if (!$node instanceof \PhpParser\Node\Expr\Empty_) == true (line 38)

    $actual = $this->legacyEmptyPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.5', '>=')) == true (line 34)

    $actual = $this->legacyEmptyPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
