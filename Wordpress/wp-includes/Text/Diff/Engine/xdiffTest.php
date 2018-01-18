<?php

namespace tests;

use Mockery as m;
use Text_Diff_Engine_xdiff;

class Text_Diff_Engine_xdiffTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Text_Diff_Engine_xdiff
*/
protected $text_Diff_Engine_xdiff;

public function setUp()
{
    parent::setUp();

    $this->text_Diff_Engine_xdiff = new \Text_Diff_Engine_xdiff();
}

public function testDiff0()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Engine_xdiff->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff1()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\strlen($line)) == false (line 43)
    // switch ($line[0]) (line 46)
    // Case ' ' == false (line 47)
    // Case '+' == false (line 51)
    // Case '-' == false (line 55)

    $actual = $this->text_Diff_Engine_xdiff->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff2()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\strlen($line)) == false (line 43)
    // switch ($line[0]) (line 46)
    // Case ' ' == false (line 47)
    // Case '+' == false (line 51)
    // Case '-' == true (line 55)

    $actual = $this->text_Diff_Engine_xdiff->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff3()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\strlen($line)) == false (line 43)
    // switch ($line[0]) (line 46)
    // Case ' ' == false (line 47)
    // Case '+' == true (line 51)

    $actual = $this->text_Diff_Engine_xdiff->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff4()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\strlen($line)) == false (line 43)
    // switch ($line[0]) (line 46)
    // Case ' ' == true (line 47)

    $actual = $this->text_Diff_Engine_xdiff->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff5()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\strlen($line)) == true (line 43)

    $actual = $this->text_Diff_Engine_xdiff->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
