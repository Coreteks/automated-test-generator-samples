<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsJson;

class IsJsonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Constraint\IsJson
*/
protected $isJson;

public function setUp()
{
    parent::setUp();

    $this->isJson = new \PHPUnit\Framework\Constraint\IsJson();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->isJson->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
