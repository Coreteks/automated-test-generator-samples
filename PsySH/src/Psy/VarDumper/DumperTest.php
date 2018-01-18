<?php

namespace tests\Psy\VarDumper;

use Mockery as m;
use Psy\VarDumper\Dumper;
use Symfony\Component\Console\Formatter\OutputFormatter;

class DumperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_formatter;
/**
* @var mixed
*/
protected $_forceArrayIndexes = null;
/**
* @var \Psy\VarDumper\Dumper
*/
protected $dumper;

public function setUp()
{
    parent::setUp();

    $this->_formatter = m::mock(\Symfony\Component\Console\Formatter\OutputFormatter::class);
    $this->_forceArrayIndexes = null;
    $this->dumper = new \Psy\VarDumper\Dumper($this->_formatter, $this->_forceArrayIndexes);
}

public function testEnterHash0()
{
    $cursor = m::mock(\Symfony\Component\VarDumper\Cloner\Cursor::class);
    $type = m::mock('UntypedParameter_type_');
    $class = m::mock('UntypedParameter_class_');
    $hasChild = m::mock('UntypedParameter_hasChild_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Symfony\Component\VarDumper\Cloner\Cursor::HASH_INDEXED === $type || \Symfony\Component\VarDumper\Cloner\Cursor::HASH_ASSOC === $type) == false (line 51)

    $actual = $this->dumper->enterHash($cursor, $type, $class, $hasChild);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterHash1()
{
    $cursor = m::mock(\Symfony\Component\VarDumper\Cloner\Cursor::class);
    $type = m::mock('UntypedParameter_type_');
    $class = m::mock('UntypedParameter_class_');
    $hasChild = m::mock('UntypedParameter_hasChild_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Symfony\Component\VarDumper\Cloner\Cursor::HASH_INDEXED === $type || \Symfony\Component\VarDumper\Cloner\Cursor::HASH_ASSOC === $type) == true (line 51)

    $actual = $this->dumper->enterHash($cursor, $type, $class, $hasChild);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
