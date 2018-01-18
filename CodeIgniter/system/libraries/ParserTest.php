<?php

namespace tests;

use CI_Parser;
use Mockery as m;

class CI_ParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Parser
*/
protected $cI_Parser;

public function setUp()
{
    parent::setUp();

    $this->cI_Parser = new \CI_Parser();
}

public function testParse0()
{
    $template = m::mock('UntypedParameter_template_');
    $data = m::mock('UntypedParameter_data_');
    $return = m::mock('UntypedParameter_return_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Parser->parse($template, $data, $return);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_string0()
{
    $template = m::mock('UntypedParameter_template_');
    $data = m::mock('UntypedParameter_data_');
    $return = m::mock('UntypedParameter_return_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Parser->parse_string($template, $data, $return);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_delimiters0()
{
    $l = m::mock('UntypedParameter_l_');
    $r = m::mock('UntypedParameter_r_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Parser->set_delimiters($l, $r);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
