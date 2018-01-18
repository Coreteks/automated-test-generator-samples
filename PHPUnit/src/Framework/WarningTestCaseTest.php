<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\WarningTestCase;

class WarningTestCaseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var \PHPUnit\Framework\WarningTestCase
*/
protected $warningTestCase;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->warningTestCase = new \PHPUnit\Framework\WarningTestCase($this->_message);
}

public function testGetMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->warningTestCase->getMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->warningTestCase->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
