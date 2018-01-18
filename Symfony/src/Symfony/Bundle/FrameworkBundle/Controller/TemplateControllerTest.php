<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Controller;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Controller\TemplateController;
use Symfony\Component\Templating\EngineInterface;
use Twig\Environment;

class TemplateControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_twig;
/**
* @var \Mockery\MockInterface
*/
protected $_templating;
/**
* @var \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
*/
protected $templateController;

public function setUp()
{
    parent::setUp();

    $this->_twig = m::mock(\Twig\Environment::class);
    $this->_templating = m::mock(\Symfony\Component\Templating\EngineInterface::class);
    $this->templateController = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController($this->_twig, $this->_templating);
}

/**
 * @expectedException \LogicException
 */
public function testTemplateAction0()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == false (line 46)
    // if ($this->twig) == false (line 48)
    // throw new \LogicException('You can not use the TemplateController if the Templating Component or the Twig Bundle are not available.') -> exception (line 51)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction1()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == false (line 46)
    // if ($this->twig) == true (line 48)
    // if ($maxAge) == false (line 54)
    // if ($sharedAge) == false (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == false (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction2()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == false (line 46)
    // if ($this->twig) == true (line 48)
    // if ($maxAge) == false (line 54)
    // if ($sharedAge) == false (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == true (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction3()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == false (line 46)
    // if ($this->twig) == true (line 48)
    // if ($maxAge) == false (line 54)
    // if ($sharedAge) == false (line 58)
    // if ($private) == true (line 62)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction4()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == false (line 46)
    // if ($this->twig) == true (line 48)
    // if ($maxAge) == false (line 54)
    // if ($sharedAge) == true (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == false (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction5()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == false (line 46)
    // if ($this->twig) == true (line 48)
    // if ($maxAge) == false (line 54)
    // if ($sharedAge) == true (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == true (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction6()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == false (line 46)
    // if ($this->twig) == true (line 48)
    // if ($maxAge) == false (line 54)
    // if ($sharedAge) == true (line 58)
    // if ($private) == true (line 62)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction7()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == false (line 46)
    // if ($this->twig) == true (line 48)
    // if ($maxAge) == true (line 54)
    // if ($sharedAge) == false (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == false (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction8()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == false (line 46)
    // if ($this->twig) == true (line 48)
    // if ($maxAge) == true (line 54)
    // if ($sharedAge) == false (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == true (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction9()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == false (line 46)
    // if ($this->twig) == true (line 48)
    // if ($maxAge) == true (line 54)
    // if ($sharedAge) == false (line 58)
    // if ($private) == true (line 62)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction10()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == false (line 46)
    // if ($this->twig) == true (line 48)
    // if ($maxAge) == true (line 54)
    // if ($sharedAge) == true (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == false (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction11()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == false (line 46)
    // if ($this->twig) == true (line 48)
    // if ($maxAge) == true (line 54)
    // if ($sharedAge) == true (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == true (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction12()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == false (line 46)
    // if ($this->twig) == true (line 48)
    // if ($maxAge) == true (line 54)
    // if ($sharedAge) == true (line 58)
    // if ($private) == true (line 62)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction13()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == true (line 46)
    // if ($maxAge) == false (line 54)
    // if ($sharedAge) == false (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == false (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction14()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == true (line 46)
    // if ($maxAge) == false (line 54)
    // if ($sharedAge) == false (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == true (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction15()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == true (line 46)
    // if ($maxAge) == false (line 54)
    // if ($sharedAge) == false (line 58)
    // if ($private) == true (line 62)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction16()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == true (line 46)
    // if ($maxAge) == false (line 54)
    // if ($sharedAge) == true (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == false (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction17()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == true (line 46)
    // if ($maxAge) == false (line 54)
    // if ($sharedAge) == true (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == true (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction18()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == true (line 46)
    // if ($maxAge) == false (line 54)
    // if ($sharedAge) == true (line 58)
    // if ($private) == true (line 62)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction19()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == true (line 46)
    // if ($maxAge) == true (line 54)
    // if ($sharedAge) == false (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == false (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction20()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == true (line 46)
    // if ($maxAge) == true (line 54)
    // if ($sharedAge) == false (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == true (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction21()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == true (line 46)
    // if ($maxAge) == true (line 54)
    // if ($sharedAge) == false (line 58)
    // if ($private) == true (line 62)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction22()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == true (line 46)
    // if ($maxAge) == true (line 54)
    // if ($sharedAge) == true (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == false (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction23()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == true (line 46)
    // if ($maxAge) == true (line 54)
    // if ($sharedAge) == true (line 58)
    // if ($private) == false (line 62)
    // if (false === $private || null === $private && ($maxAge || $sharedAge)) == true (line 64)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTemplateAction24()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->templating) == true (line 46)
    // if ($maxAge) == true (line 54)
    // if ($sharedAge) == true (line 58)
    // if ($private) == true (line 62)

    $actual = $this->templateController->templateAction($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke0()
{
    $template = m::mock('UntypedParameter_template_');
    $maxAge = m::mock('UntypedParameter_maxAge_');
    $sharedAge = m::mock('UntypedParameter_sharedAge_');
    $private = m::mock('UntypedParameter_private_');

    // TODO: Your mock expectations here

    $actual = $this->templateController->__invoke($template, $maxAge, $sharedAge, $private);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
