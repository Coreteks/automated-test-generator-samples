<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\NodeDumper;

class NodeDumperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_options = [];
/**
* @var \PhpParser\NodeDumper
*/
protected $nodeDumper;

public function setUp()
{
    parent::setUp();

    $this->_options = [];
    $this->nodeDumper = new \PhpParser\NodeDumper($this->_options);
}

public function testDump0()
{
    $node = m::mock('UntypedParameter_node_');
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    $actual = $this->nodeDumper->dump($node, $code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
