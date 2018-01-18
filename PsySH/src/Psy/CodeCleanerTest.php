<?php

namespace tests\Psy;

use Mockery as m;
use PhpParser\NodeTraverser;
use PhpParser\Parser;
use PhpParser\PrettyPrinter\Standard;
use Psy\CodeCleaner;

class CodeCleanerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_parser;
/**
* @var \Mockery\MockInterface
*/
protected $_printer;
/**
* @var \Mockery\MockInterface
*/
protected $_traverser;
/**
* @var \Psy\CodeCleaner
*/
protected $codeCleaner;

public function setUp()
{
    parent::setUp();

    $this->_parser = m::mock(\PhpParser\Parser::class);
    $this->_printer = m::mock(\PhpParser\PrettyPrinter\Standard::class);
    $this->_traverser = m::mock(\PhpParser\NodeTraverser::class);
    $this->codeCleaner = new \Psy\CodeCleaner($this->_parser, $this->_printer, $this->_traverser);
}

public function testClean0()
{
    $codeLines = [];
    $requireSemicolons = m::mock('UntypedParameter_requireSemicolons_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stmts === false) == false (line 128)

    $actual = $this->codeCleaner->clean($codeLines, $requireSemicolons);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClean1()
{
    $codeLines = [];
    $requireSemicolons = m::mock('UntypedParameter_requireSemicolons_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stmts === false) == true (line 128)

    $actual = $this->codeCleaner->clean($codeLines, $requireSemicolons);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetNamespace0()
{
    $namespace = [];

    // TODO: Your mock expectations here

    $actual = $this->codeCleaner->setNamespace($namespace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNamespace0()
{
    // TODO: Your mock expectations here

    $actual = $this->codeCleaner->getNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
