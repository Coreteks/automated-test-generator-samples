<?php

namespace tests\PhpParser\Node;

use Mockery as m;
use PhpParser\Node\VarLikeIdentifier;

class VarLikeIdentifierTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Node\VarLikeIdentifier
*/
protected $varLikeIdentifier;

public function setUp()
{
    parent::setUp();

    $this->varLikeIdentifier = new \PhpParser\Node\VarLikeIdentifier();
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->varLikeIdentifier->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
