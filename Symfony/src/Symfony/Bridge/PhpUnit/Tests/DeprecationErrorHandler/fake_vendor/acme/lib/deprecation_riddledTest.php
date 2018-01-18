<?php

namespace tests;

use FooTestCase;
use Mockery as m;

class FooTestCaseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \FooTestCase
*/
protected $fooTestCase;

public function setUp()
{
    parent::setUp();

    $this->fooTestCase = new \FooTestCase();
}

public function testTestLegacyFoo0()
{
    // TODO: Your mock expectations here

    $actual = $this->fooTestCase->testLegacyFoo();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTestNonLegacyBar0()
{
    // TODO: Your mock expectations here

    $actual = $this->fooTestCase->testNonLegacyBar();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
