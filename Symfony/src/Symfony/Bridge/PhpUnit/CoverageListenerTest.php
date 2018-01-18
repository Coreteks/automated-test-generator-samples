<?php

namespace tests\Symfony\Bridge\PhpUnit;

use Mockery as m;
use Symfony\Bridge\PhpUnit\CoverageListener;

class CoverageListenerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_sutFqcnResolver = null;
/**
* @var mixed
*/
protected $_warningOnSutNotFound = null;
/**
* @var \Symfony\Bridge\PhpUnit\CoverageListener
*/
protected $coverageListener;

public function setUp()
{
    parent::setUp();

    $this->_sutFqcnResolver = null;
    $this->_warningOnSutNotFound = null;
    $this->coverageListener = new \Symfony\Bridge\PhpUnit\CoverageListener($this->_sutFqcnResolver, $this->_warningOnSutNotFound);
}

public function testStartTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    $actual = $this->coverageListener->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
