<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\HtmlString;
use Mockery as m;

class HtmlStringTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_html = null;
/**
* @var \Illuminate\Support\HtmlString
*/
protected $htmlString;

public function setUp()
{
    parent::setUp();

    $this->_html = null;
    $this->htmlString = new \Illuminate\Support\HtmlString($this->_html);
}

public function testToHtml0()
{
    // TODO: Your mock expectations here

    $actual = $this->htmlString->toHtml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->htmlString->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
