<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\JsonMatches;

class JsonMatchesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_value = null;
/**
* @var \PHPUnit\Framework\Constraint\JsonMatches
*/
protected $jsonMatches;

public function setUp()
{
    parent::setUp();

    $this->_value = null;
    $this->jsonMatches = new \PHPUnit\Framework\Constraint\JsonMatches($this->_value);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->jsonMatches->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
