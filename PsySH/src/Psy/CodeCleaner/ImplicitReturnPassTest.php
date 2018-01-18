<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\ImplicitReturnPass;

class ImplicitReturnPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\ImplicitReturnPass
*/
protected $implicitReturnPass;

public function setUp()
{
    parent::setUp();

    $this->implicitReturnPass = new \Psy\CodeCleaner\ImplicitReturnPass();
}

public function testBeforeTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    $actual = $this->implicitReturnPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
