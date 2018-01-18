<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Console\Descriptor;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Console\Descriptor\ExtendedCallableClass;

class ExtendedCallableClassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Console\Descriptor\ExtendedCallableClass
*/
protected $extendedCallableClass;

public function setUp()
{
    parent::setUp();

    $this->extendedCallableClass = new \Symfony\Bundle\FrameworkBundle\Tests\Console\Descriptor\ExtendedCallableClass();
}

public function testStaticMethod0()
{
    // TODO: Your mock expectations here

    $actual = $this->extendedCallableClass->staticMethod();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
