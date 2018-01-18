<?php

namespace tests;

use Mockery as m;
use Text_Diff_Op_change;

class Text_Diff_Op_changeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_orig = null;
/**
* @var mixed
*/
protected $_final = null;
/**
* @var \Text_Diff_Op_change
*/
protected $text_Diff_Op_change;

public function setUp()
{
    parent::setUp();

    $this->_orig = null;
    $this->_final = null;
    $this->text_Diff_Op_change = new \Text_Diff_Op_change($this->_orig, $this->_final);
}

public function testText_Diff_Op_change0()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Op_change->Text_Diff_Op_change($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReverse0()
{
    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Op_change->reverse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
