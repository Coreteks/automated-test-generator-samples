<?php

namespace tests\Symfony\Bridge\Twig\Tests\NodeVisitor;

use Mockery as m;
use Symfony\Bridge\Twig\Tests\NodeVisitor\TwigNodeProvider;

class TwigNodeProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\Tests\NodeVisitor\TwigNodeProvider
*/
protected $twigNodeProvider;

public function setUp()
{
    parent::setUp();

    $this->twigNodeProvider = new \Symfony\Bridge\Twig\Tests\NodeVisitor\TwigNodeProvider();
}

public function testGetModule0()
{
    $content = m::mock('UntypedParameter_content_');

    // TODO: Your mock expectations here

    $actual = $this->twigNodeProvider->getModule($content);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTransFilter0()
{
    $message = m::mock('UntypedParameter_message_');
    $domain = m::mock('UntypedParameter_domain_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$arguments) == false (line 41)

    $actual = $this->twigNodeProvider->getTransFilter($message, $domain, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTransFilter1()
{
    $message = m::mock('UntypedParameter_message_');
    $domain = m::mock('UntypedParameter_domain_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$arguments) == true (line 41)

    $actual = $this->twigNodeProvider->getTransFilter($message, $domain, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTransChoiceFilter0()
{
    $message = m::mock('UntypedParameter_message_');
    $domain = m::mock('UntypedParameter_domain_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$arguments) == false (line 58)

    $actual = $this->twigNodeProvider->getTransChoiceFilter($message, $domain, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTransChoiceFilter1()
{
    $message = m::mock('UntypedParameter_message_');
    $domain = m::mock('UntypedParameter_domain_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$arguments) == true (line 58)

    $actual = $this->twigNodeProvider->getTransChoiceFilter($message, $domain, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTransTag0()
{
    $message = m::mock('UntypedParameter_message_');
    $domain = m::mock('UntypedParameter_domain_');

    // TODO: Your mock expectations here

    $actual = $this->twigNodeProvider->getTransTag($message, $domain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTransDefaultDomainTag0()
{
    $domain = m::mock('UntypedParameter_domain_');

    // TODO: Your mock expectations here

    $actual = $this->twigNodeProvider->getTransDefaultDomainTag($domain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
