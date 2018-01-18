<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\CallTimePassByReferencePass;

class CallTimePassByReferencePassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\CallTimePassByReferencePass
*/
protected $callTimePassByReferencePass;

public function setUp()
{
    parent::setUp();

    $this->callTimePassByReferencePass = new \Psy\CodeCleaner\CallTimePassByReferencePass();
}

public function testEnterNode0()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '<')) == false (line 40)
    // if (!$node instanceof \PhpParser\Node\Expr\FuncCall && !$node instanceof \PhpParser\Node\Expr\MethodCall && !$node instanceof \PhpParser\Node\Expr\StaticCall) == false (line 44)

    $actual = $this->callTimePassByReferencePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '<')) == false (line 40)
    // if (!$node instanceof \PhpParser\Node\Expr\FuncCall && !$node instanceof \PhpParser\Node\Expr\MethodCall && !$node instanceof \PhpParser\Node\Expr\StaticCall) == false (line 44)
    // if ($arg->byRef) == false (line 49)

    $actual = $this->callTimePassByReferencePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testEnterNode2()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '<')) == false (line 40)
    // if (!$node instanceof \PhpParser\Node\Expr\FuncCall && !$node instanceof \PhpParser\Node\Expr\MethodCall && !$node instanceof \PhpParser\Node\Expr\StaticCall) == false (line 44)
    // if ($arg->byRef) == true (line 49)
    // throw new \Psy\Exception\FatalErrorException(self::EXCEPTION_MESSAGE, 0, E_ERROR, null, $node->getLine()) -> exception (line 50)

    $actual = $this->callTimePassByReferencePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode3()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '<')) == false (line 40)
    // if (!$node instanceof \PhpParser\Node\Expr\FuncCall && !$node instanceof \PhpParser\Node\Expr\MethodCall && !$node instanceof \PhpParser\Node\Expr\StaticCall) == true (line 44)

    $actual = $this->callTimePassByReferencePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode4()
{
    $node = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '<')) == true (line 40)

    $actual = $this->callTimePassByReferencePass->enterNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
