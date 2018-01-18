<?php

namespace tests\GuzzleHttp;

use GuzzleHttp\UriTemplate;
use Mockery as m;

class UriTemplateTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \GuzzleHttp\UriTemplate
*/
protected $uriTemplate;

public function setUp()
{
    parent::setUp();

    $this->uriTemplate = new \GuzzleHttp\UriTemplate();
}

public function testExpand0()
{
    $template = m::mock('UntypedParameter_template_');
    $variables = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === strpos($template, '{')) == false (line 40)

    $actual = $this->uriTemplate->expand($template, $variables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExpand1()
{
    $template = m::mock('UntypedParameter_template_');
    $variables = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === strpos($template, '{')) == true (line 40)

    $actual = $this->uriTemplate->expand($template, $variables);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
