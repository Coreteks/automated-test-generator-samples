<?php

namespace tests;

use Mockery as m;
use WP_Text_Diff_Renderer_inline;

class WP_Text_Diff_Renderer_inlineTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Text_Diff_Renderer_inline
*/
protected $wP_Text_Diff_Renderer_inline;

public function setUp()
{
    parent::setUp();

    $this->wP_Text_Diff_Renderer_inline = new \WP_Text_Diff_Renderer_inline();
}

public function test_splitOnWords0()
{
    $string = m::mock('UntypedParameter_string_');
    $newlineEscape = m::mock('UntypedParameter_newlineEscape_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Text_Diff_Renderer_inline->_splitOnWords($string, $newlineEscape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
