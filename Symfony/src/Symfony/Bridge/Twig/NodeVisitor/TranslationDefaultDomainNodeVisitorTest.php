<?php

namespace tests\Symfony\Bridge\Twig\NodeVisitor;

use Mockery as m;
use Symfony\Bridge\Twig\NodeVisitor\TranslationDefaultDomainNodeVisitor;

class TranslationDefaultDomainNodeVisitorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\NodeVisitor\TranslationDefaultDomainNodeVisitor
*/
protected $translationDefaultDomainNodeVisitor;

public function setUp()
{
    parent::setUp();

    $this->translationDefaultDomainNodeVisitor = new \Symfony\Bridge\Twig\NodeVisitor\TranslationDefaultDomainNodeVisitor();
}

public function testGetPriority0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationDefaultDomainNodeVisitor->getPriority();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
