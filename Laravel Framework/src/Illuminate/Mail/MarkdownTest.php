<?php

namespace tests\Illuminate\Mail;

use Illuminate\Contracts\View\Factory;
use Illuminate\Mail\Markdown;
use Mockery as m;

class MarkdownTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_view;
/**
* @var array
*/
protected $_options = [];
/**
* @var \Illuminate\Mail\Markdown
*/
protected $markdown;

public function setUp()
{
    parent::setUp();

    $this->_view = m::mock(\Illuminate\Contracts\View\Factory::class);
    $this->_options = [];
    $this->markdown = new \Illuminate\Mail\Markdown($this->_view, $this->_options);
}

public function testRender0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = [];
    $inliner = m::mock('UntypedParameter_inliner_');

    // TODO: Your mock expectations here

    $actual = $this->markdown->render($view, $data, $inliner);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRenderText0()
{
    $view = m::mock('UntypedParameter_view_');
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->markdown->renderText($view, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse0()
{
    $text = m::mock('UntypedParameter_text_');

    // TODO: Your mock expectations here

    $actual = $this->markdown->parse($text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHtmlComponentPaths0()
{
    // TODO: Your mock expectations here

    $actual = $this->markdown->htmlComponentPaths();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMarkdownComponentPaths0()
{
    // TODO: Your mock expectations here

    $actual = $this->markdown->markdownComponentPaths();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadComponentsFrom0()
{
    $paths = [];

    // TODO: Your mock expectations here

    $actual = $this->markdown->loadComponentsFrom($paths);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTheme0()
{
    $theme = m::mock('UntypedParameter_theme_');

    // TODO: Your mock expectations here

    $actual = $this->markdown->theme($theme);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
