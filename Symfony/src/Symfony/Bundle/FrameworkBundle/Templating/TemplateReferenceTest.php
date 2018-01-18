<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\TemplateReference;

class TemplateReferenceTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_bundle = null;
/**
* @var mixed
*/
protected $_controller = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_format = null;
/**
* @var mixed
*/
protected $_engine = null;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\TemplateReference
*/
protected $templateReference;

public function setUp()
{
    parent::setUp();

    $this->_bundle = null;
    $this->_controller = null;
    $this->_name = null;
    $this->_format = null;
    $this->_engine = null;
    $this->templateReference = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateReference($this->_bundle, $this->_controller, $this->_name, $this->_format, $this->_engine);
}

public function testGetPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->templateReference->getPath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLogicalName0()
{
    // TODO: Your mock expectations here

    $actual = $this->templateReference->getLogicalName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
