<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating\Helper;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper;
use Symfony\Component\Form\FormRendererInterface;

class FormHelperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_renderer;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper
*/
protected $formHelper;

public function setUp()
{
    parent::setUp();

    $this->_renderer = m::mock(\Symfony\Component\Form\FormRendererInterface::class);
    $this->formHelper = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper($this->_renderer);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->formHelper->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTheme0()
{
    $view = m::mock(\Symfony\Component\Form\FormView::class);
    $themes = m::mock('UntypedParameter_themes_');
    $useDefaultThemes = m::mock('UntypedParameter_useDefaultThemes_');

    // TODO: Your mock expectations here

    $actual = $this->formHelper->setTheme($view, $themes, $useDefaultThemes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForm0()
{
    $view = m::mock(\Symfony\Component\Form\FormView::class);
    $variables = [];

    // TODO: Your mock expectations here

    $actual = $this->formHelper->form($view, $variables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart0()
{
    $view = m::mock(\Symfony\Component\Form\FormView::class);
    $variables = [];

    // TODO: Your mock expectations here

    $actual = $this->formHelper->start($view, $variables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd0()
{
    $view = m::mock(\Symfony\Component\Form\FormView::class);
    $variables = [];

    // TODO: Your mock expectations here

    $actual = $this->formHelper->end($view, $variables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWidget0()
{
    $view = m::mock(\Symfony\Component\Form\FormView::class);
    $variables = [];

    // TODO: Your mock expectations here

    $actual = $this->formHelper->widget($view, $variables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRow0()
{
    $view = m::mock(\Symfony\Component\Form\FormView::class);
    $variables = [];

    // TODO: Your mock expectations here

    $actual = $this->formHelper->row($view, $variables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLabel0()
{
    $view = m::mock(\Symfony\Component\Form\FormView::class);
    $label = m::mock('UntypedParameter_label_');
    $variables = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $label) == false (line 165)

    $actual = $this->formHelper->label($view, $label, $variables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLabel1()
{
    $view = m::mock(\Symfony\Component\Form\FormView::class);
    $label = m::mock('UntypedParameter_label_');
    $variables = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $label) == true (line 165)

    $actual = $this->formHelper->label($view, $label, $variables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testErrors0()
{
    $view = m::mock(\Symfony\Component\Form\FormView::class);

    // TODO: Your mock expectations here

    $actual = $this->formHelper->errors($view);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRest0()
{
    $view = m::mock(\Symfony\Component\Form\FormView::class);
    $variables = [];

    // TODO: Your mock expectations here

    $actual = $this->formHelper->rest($view, $variables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBlock0()
{
    $view = m::mock(\Symfony\Component\Form\FormView::class);
    $blockName = m::mock('UntypedParameter_blockName_');
    $variables = [];

    // TODO: Your mock expectations here

    $actual = $this->formHelper->block($view, $blockName, $variables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCsrfToken0()
{
    $tokenId = m::mock('UntypedParameter_tokenId_');

    // TODO: Your mock expectations here

    $actual = $this->formHelper->csrfToken($tokenId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHumanize0()
{
    $text = m::mock('UntypedParameter_text_');

    // TODO: Your mock expectations here

    $actual = $this->formHelper->humanize($text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
