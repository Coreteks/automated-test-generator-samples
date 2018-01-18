<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\WebLinkExtension;
use Symfony\Component\HttpFoundation\RequestStack;

class WebLinkExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_requestStack;
/**
* @var \Symfony\Bridge\Twig\Extension\WebLinkExtension
*/
protected $webLinkExtension;

public function setUp()
{
    parent::setUp();

    $this->_requestStack = m::mock(\Symfony\Component\HttpFoundation\RequestStack::class);
    $this->webLinkExtension = new \Symfony\Bridge\Twig\Extension\WebLinkExtension($this->_requestStack);
}

public function testGetFunctions0()
{
    // TODO: Your mock expectations here

    $actual = $this->webLinkExtension->getFunctions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLink0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $rel = m::mock('UntypedParameter_rel_');
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($request = $this->requestStack->getMasterRequest())) == false (line 60)

    $actual = $this->webLinkExtension->link($uri, $rel, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLink1()
{
    $uri = m::mock('UntypedParameter_uri_');
    $rel = m::mock('UntypedParameter_rel_');
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($request = $this->requestStack->getMasterRequest())) == false (line 60)

    $actual = $this->webLinkExtension->link($uri, $rel, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLink2()
{
    $uri = m::mock('UntypedParameter_uri_');
    $rel = m::mock('UntypedParameter_rel_');
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($request = $this->requestStack->getMasterRequest())) == true (line 60)

    $actual = $this->webLinkExtension->link($uri, $rel, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreload0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->webLinkExtension->preload($uri, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDnsPrefetch0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->webLinkExtension->dnsPrefetch($uri, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreconnect0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->webLinkExtension->preconnect($uri, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrefetch0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->webLinkExtension->prefetch($uri, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrerender0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->webLinkExtension->prerender($uri, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
