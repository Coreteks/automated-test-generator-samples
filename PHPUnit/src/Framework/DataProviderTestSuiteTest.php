<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\DataProviderTestSuite;

class DataProviderTestSuiteTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\DataProviderTestSuite
*/
protected $dataProviderTestSuite;

public function setUp()
{
    parent::setUp();

    $this->dataProviderTestSuite = new \PHPUnit\Framework\DataProviderTestSuite();
}

public function testSetDependencies0()
{
    $dependencies = [];

    // TODO: Your mock expectations here

    $actual = $this->dataProviderTestSuite->setDependencies($dependencies);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDependencies1()
{
    $dependencies = [];

    // TODO: Your mock expectations here

    $actual = $this->dataProviderTestSuite->setDependencies($dependencies);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
