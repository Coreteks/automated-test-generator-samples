<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\TranslationExtension;
use Symfony\Component\Translation\TranslatorInterface;
use Twig\NodeVisitor\NodeVisitorInterface;

class TranslationExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_translator;
/**
* @var \Mockery\MockInterface
*/
protected $_translationNodeVisitor;
/**
* @var \Symfony\Bridge\Twig\Extension\TranslationExtension
*/
protected $translationExtension;

public function setUp()
{
    parent::setUp();

    $this->_translator = m::mock(\Symfony\Component\Translation\TranslatorInterface::class);
    $this->_translationNodeVisitor = m::mock(\Twig\NodeVisitor\NodeVisitorInterface::class);
    $this->translationExtension = new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->_translator, $this->_translationNodeVisitor);
}

public function testGetTranslator0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationExtension->getTranslator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilters0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationExtension->getFilters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenParsers0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationExtension->getTokenParsers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNodeVisitors0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationExtension->getNodeVisitors();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTranslationNodeVisitor0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationExtension->getTranslationNodeVisitor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTrans0()
{
    $message = m::mock('UntypedParameter_message_');
    $arguments = [];
    $domain = m::mock('UntypedParameter_domain_');
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->translator) == false (line 93)

    $actual = $this->translationExtension->trans($message, $arguments, $domain, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTrans1()
{
    $message = m::mock('UntypedParameter_message_');
    $arguments = [];
    $domain = m::mock('UntypedParameter_domain_');
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->translator) == true (line 93)

    $actual = $this->translationExtension->trans($message, $arguments, $domain, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTranschoice0()
{
    $message = m::mock('UntypedParameter_message_');
    $count = m::mock('UntypedParameter_count_');
    $arguments = [];
    $domain = m::mock('UntypedParameter_domain_');
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->translator) == false (line 102)

    $actual = $this->translationExtension->transchoice($message, $count, $arguments, $domain, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTranschoice1()
{
    $message = m::mock('UntypedParameter_message_');
    $count = m::mock('UntypedParameter_count_');
    $arguments = [];
    $domain = m::mock('UntypedParameter_domain_');
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->translator) == true (line 102)

    $actual = $this->translationExtension->transchoice($message, $count, $arguments, $domain, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
