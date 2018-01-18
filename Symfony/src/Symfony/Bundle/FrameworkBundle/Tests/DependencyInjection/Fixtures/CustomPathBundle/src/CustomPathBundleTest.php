<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\CustomPathBundle;

class CustomPathBundleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\CustomPathBundle
*/
protected $customPathBundle;

public function setUp()
{
    parent::setUp();

    $this->customPathBundle = new \Symfony\Bundle\FrameworkBundle\Tests\CustomPathBundle();
}

public function testGetPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->customPathBundle->getPath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
