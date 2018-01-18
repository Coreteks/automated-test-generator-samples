<?php

namespace tests\Symfony\Bridge\Twig\NodeVisitor;

use Mockery as m;
use Symfony\Bridge\Twig\NodeVisitor\TranslationNodeVisitor;

class TranslationNodeVisitorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\NodeVisitor\TranslationNodeVisitor
*/
protected $translationNodeVisitor;

public function setUp()
{
    parent::setUp();

    $this->translationNodeVisitor = new \Symfony\Bridge\Twig\NodeVisitor\TranslationNodeVisitor();
}

public function testEnable0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationNodeVisitor->enable();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisable0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationNodeVisitor->disable();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMessages0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationNodeVisitor->getMessages();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPriority0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationNodeVisitor->getPriority();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
