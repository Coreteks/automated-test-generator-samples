<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser;

class TemplateFilenameParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser
*/
protected $templateFilenameParser;

public function setUp()
{
    parent::setUp();

    $this->templateFilenameParser = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
}

public function testParse0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 30)
    // if (3 > count($elements)) == false (line 37)

    $actual = $this->templateFilenameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == false (line 30)
    // if (3 > count($elements)) == true (line 37)

    $actual = $this->templateFilenameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \Symfony\Component\Templating\TemplateReferenceInterface) == true (line 30)

    $actual = $this->templateFilenameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
