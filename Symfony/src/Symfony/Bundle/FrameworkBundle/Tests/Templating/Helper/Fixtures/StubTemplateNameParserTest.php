<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Templating\Helper\Fixtures;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Templating\Helper\Fixtures\StubTemplateNameParser;

class StubTemplateNameParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_root = null;
/**
* @var mixed
*/
protected $_rootTheme = null;
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Templating\Helper\Fixtures\StubTemplateNameParser
*/
protected $stubTemplateNameParser;

public function setUp()
{
    parent::setUp();

    $this->_root = null;
    $this->_rootTheme = null;
    $this->stubTemplateNameParser = new \Symfony\Bundle\FrameworkBundle\Tests\Templating\Helper\Fixtures\StubTemplateNameParser($this->_root, $this->_rootTheme);
}

public function testParse0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('_' == $template[0]) == false (line 33)
    // if ('TestBundle' === $bundle) == false (line 35)

    $actual = $this->stubTemplateNameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('_' == $template[0]) == false (line 33)
    // if ('TestBundle' === $bundle) == true (line 35)

    $actual = $this->stubTemplateNameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('_' == $template[0]) == true (line 33)

    $actual = $this->stubTemplateNameParser->parse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
