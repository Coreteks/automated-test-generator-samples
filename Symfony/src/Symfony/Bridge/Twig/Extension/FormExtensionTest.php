<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\FormExtension;

class FormExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\Extension\FormExtension
*/
protected $formExtension;

public function setUp()
{
    parent::setUp();

    $this->formExtension = new \Symfony\Bridge\Twig\Extension\FormExtension();
}

public function testGetTokenParsers0()
{
    // TODO: Your mock expectations here

    $actual = $this->formExtension->getTokenParsers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFunctions0()
{
    // TODO: Your mock expectations here

    $actual = $this->formExtension->getFunctions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilters0()
{
    // TODO: Your mock expectations here

    $actual = $this->formExtension->getFilters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTests0()
{
    // TODO: Your mock expectations here

    $actual = $this->formExtension->getTests();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->formExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
