<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\MagicConstantsPass;

class MagicConstantsPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\MagicConstantsPass
*/
protected $magicConstantsPass;

public function setUp()
{
    parent::setUp();

    $this->magicConstantsPass = new \Psy\CodeCleaner\MagicConstantsPass();
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Scalar\MagicConst\Dir) == false (line 36)
    // if ($node instanceof \PhpParser\Node\Scalar\MagicConst\File) == false (line 38)

    $actual = $this->magicConstantsPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Scalar\MagicConst\Dir) == false (line 36)
    // if ($node instanceof \PhpParser\Node\Scalar\MagicConst\File) == true (line 38)

    $actual = $this->magicConstantsPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Scalar\MagicConst\Dir) == true (line 36)

    $actual = $this->magicConstantsPass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
