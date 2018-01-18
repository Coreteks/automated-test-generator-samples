<?php

namespace tests;

use Mockery as m;
use Text_Diff_Renderer;

class Text_Diff_RendererTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \Text_Diff_Renderer
*/
protected $text_Diff_Renderer;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->text_Diff_Renderer = new \Text_Diff_Renderer($this->_params);
}

public function testText_Diff_Renderer0()
{
    $params = m::mock('UntypedParameter_params_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer->Text_Diff_Renderer($params);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetParams0()
{
    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer->getParams();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetParams1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($k[0] == '_') == false (line 62)

    $actual = $this->text_Diff_Renderer->getParams();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetParams2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($k[0] == '_') == true (line 62)

    $actual = $this->text_Diff_Renderer->getParams();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender0()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender1()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender2()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == false (line 121)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender3()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == false (line 121)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender4()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == false (line 121)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender5()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == false (line 121)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender6()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == false (line 121)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender7()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == false (line 121)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender8()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == false (line 121)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender9()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == false (line 121)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender10()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == false (line 127)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender11()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == false (line 127)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender12()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == false (line 127)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender13()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == false (line 127)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender14()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == false (line 127)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender15()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == false (line 127)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender16()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == false (line 127)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender17()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == false (line 127)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender18()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == true (line 127)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender19()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == true (line 127)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender20()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == true (line 127)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender21()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == true (line 127)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender22()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == true (line 127)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender23()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == true (line 127)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender24()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == true (line 127)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender25()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == false (line 93)
    // if (!\is_array($block)) == true (line 121)
    // if ($context) == true (line 127)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender26()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == false (line 95)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender27()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == false (line 95)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender28()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == false (line 95)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender29()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == false (line 95)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender30()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == false (line 95)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender31()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == false (line 95)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender32()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == false (line 95)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender33()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == false (line 95)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender34()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == false (line 104)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender35()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == false (line 104)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender36()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == false (line 104)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender37()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == false (line 104)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender38()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == false (line 104)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender39()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == false (line 104)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender40()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == false (line 104)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender41()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == false (line 104)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender42()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == true (line 104)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender43()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == true (line 104)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender44()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == true (line 104)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender45()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == true (line 104)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender46()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == true (line 104)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender47()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == true (line 104)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender48()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == true (line 104)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender49()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == false (line 99)
    // if ($ntrail) == true (line 104)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender50()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == true (line 99)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender51()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == true (line 99)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender52()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == true (line 99)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender53()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == true (line 99)
    // if ($edit->orig) == false (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender54()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == true (line 99)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender55()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == true (line 99)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == false (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender56()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == true (line 99)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == false (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender57()
{
    $diff = m::mock('UntypedParameter_diff_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_a($edit, 'Text_Diff_Op_copy')) == true (line 93)
    // if (\is_array($block)) == true (line 95)
    // if (\count($edit->orig) <= $keep) == true (line 99)
    // if ($edit->orig) == true (line 134)
    // if ($edit->final) == true (line 137)
    // if (\is_array($block)) == true (line 142)

    $actual = $this->text_Diff_Renderer->render($diff);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_block0()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');
    $edits = m::mock('UntypedParameter_edits_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer->_block($xbeg, $xlen, $ybeg, $ylen, $edits);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_block1()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');
    $edits = m::mock('UntypedParameter_edits_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\strtolower(\get_class($edit))) (line 156)
    // Case 'text_diff_op_copy' == false (line 157)
    // Case 'text_diff_op_add' == false (line 161)
    // Case 'text_diff_op_delete' == false (line 165)
    // Case 'text_diff_op_change' == false (line 169)

    $actual = $this->text_Diff_Renderer->_block($xbeg, $xlen, $ybeg, $ylen, $edits);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_block2()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');
    $edits = m::mock('UntypedParameter_edits_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\strtolower(\get_class($edit))) (line 156)
    // Case 'text_diff_op_copy' == false (line 157)
    // Case 'text_diff_op_add' == false (line 161)
    // Case 'text_diff_op_delete' == false (line 165)
    // Case 'text_diff_op_change' == true (line 169)

    $actual = $this->text_Diff_Renderer->_block($xbeg, $xlen, $ybeg, $ylen, $edits);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_block3()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');
    $edits = m::mock('UntypedParameter_edits_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\strtolower(\get_class($edit))) (line 156)
    // Case 'text_diff_op_copy' == false (line 157)
    // Case 'text_diff_op_add' == false (line 161)
    // Case 'text_diff_op_delete' == true (line 165)

    $actual = $this->text_Diff_Renderer->_block($xbeg, $xlen, $ybeg, $ylen, $edits);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_block4()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');
    $edits = m::mock('UntypedParameter_edits_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\strtolower(\get_class($edit))) (line 156)
    // Case 'text_diff_op_copy' == false (line 157)
    // Case 'text_diff_op_add' == true (line 161)

    $actual = $this->text_Diff_Renderer->_block($xbeg, $xlen, $ybeg, $ylen, $edits);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_block5()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');
    $edits = m::mock('UntypedParameter_edits_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\strtolower(\get_class($edit))) (line 156)
    // Case 'text_diff_op_copy' == true (line 157)

    $actual = $this->text_Diff_Renderer->_block($xbeg, $xlen, $ybeg, $ylen, $edits);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_startDiff0()
{
    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer->_startDiff();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_endDiff0()
{
    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer->_endDiff();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_blockHeader0()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($xlen > 1) == false (line 190)
    // if ($ylen > 1) == false (line 193)
    // if ($xlen && !$ylen) == false (line 198)
    // if (!$xlen) == false (line 200)

    $actual = $this->text_Diff_Renderer->_blockHeader($xbeg, $xlen, $ybeg, $ylen);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_blockHeader1()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($xlen > 1) == false (line 190)
    // if ($ylen > 1) == false (line 193)
    // if ($xlen && !$ylen) == false (line 198)
    // if (!$xlen) == true (line 200)

    $actual = $this->text_Diff_Renderer->_blockHeader($xbeg, $xlen, $ybeg, $ylen);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_blockHeader2()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($xlen > 1) == false (line 190)
    // if ($ylen > 1) == false (line 193)
    // if ($xlen && !$ylen) == true (line 198)

    $actual = $this->text_Diff_Renderer->_blockHeader($xbeg, $xlen, $ybeg, $ylen);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_blockHeader3()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($xlen > 1) == false (line 190)
    // if ($ylen > 1) == true (line 193)
    // if ($xlen && !$ylen) == false (line 198)
    // if (!$xlen) == false (line 200)

    $actual = $this->text_Diff_Renderer->_blockHeader($xbeg, $xlen, $ybeg, $ylen);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_blockHeader4()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($xlen > 1) == false (line 190)
    // if ($ylen > 1) == true (line 193)
    // if ($xlen && !$ylen) == false (line 198)
    // if (!$xlen) == true (line 200)

    $actual = $this->text_Diff_Renderer->_blockHeader($xbeg, $xlen, $ybeg, $ylen);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_blockHeader5()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($xlen > 1) == false (line 190)
    // if ($ylen > 1) == true (line 193)
    // if ($xlen && !$ylen) == true (line 198)

    $actual = $this->text_Diff_Renderer->_blockHeader($xbeg, $xlen, $ybeg, $ylen);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_blockHeader6()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($xlen > 1) == true (line 190)
    // if ($ylen > 1) == false (line 193)
    // if ($xlen && !$ylen) == false (line 198)
    // if (!$xlen) == false (line 200)

    $actual = $this->text_Diff_Renderer->_blockHeader($xbeg, $xlen, $ybeg, $ylen);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_blockHeader7()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($xlen > 1) == true (line 190)
    // if ($ylen > 1) == false (line 193)
    // if ($xlen && !$ylen) == false (line 198)
    // if (!$xlen) == true (line 200)

    $actual = $this->text_Diff_Renderer->_blockHeader($xbeg, $xlen, $ybeg, $ylen);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_blockHeader8()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($xlen > 1) == true (line 190)
    // if ($ylen > 1) == false (line 193)
    // if ($xlen && !$ylen) == true (line 198)

    $actual = $this->text_Diff_Renderer->_blockHeader($xbeg, $xlen, $ybeg, $ylen);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_blockHeader9()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($xlen > 1) == true (line 190)
    // if ($ylen > 1) == true (line 193)
    // if ($xlen && !$ylen) == false (line 198)
    // if (!$xlen) == false (line 200)

    $actual = $this->text_Diff_Renderer->_blockHeader($xbeg, $xlen, $ybeg, $ylen);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_blockHeader10()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($xlen > 1) == true (line 190)
    // if ($ylen > 1) == true (line 193)
    // if ($xlen && !$ylen) == false (line 198)
    // if (!$xlen) == true (line 200)

    $actual = $this->text_Diff_Renderer->_blockHeader($xbeg, $xlen, $ybeg, $ylen);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_blockHeader11()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($xlen > 1) == true (line 190)
    // if ($ylen > 1) == true (line 193)
    // if ($xlen && !$ylen) == true (line 198)

    $actual = $this->text_Diff_Renderer->_blockHeader($xbeg, $xlen, $ybeg, $ylen);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_startBlock0()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer->_startBlock($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_endBlock0()
{
    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer->_endBlock();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_lines0()
{
    $lines = m::mock('UntypedParameter_lines_');
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer->_lines($lines, $prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_context0()
{
    $lines = m::mock('UntypedParameter_lines_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer->_context($lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_added0()
{
    $lines = m::mock('UntypedParameter_lines_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer->_added($lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_deleted0()
{
    $lines = m::mock('UntypedParameter_lines_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer->_deleted($lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed0()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
