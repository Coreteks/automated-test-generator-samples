<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures\Type;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\Type\StringWrapper;

class StringWrapperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_string = null;
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\Type\StringWrapper
*/
protected $stringWrapper;

public function setUp()
{
    parent::setUp();

    $this->_string = null;
    $this->stringWrapper = new \Symfony\Bridge\Doctrine\Tests\Fixtures\Type\StringWrapper($this->_string);
}

public function testGetString0()
{
    // TODO: Your mock expectations here

    $actual = $this->stringWrapper->getString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
