<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\Warning;

class WarningTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Warning
*/
protected $warning;

public function setUp()
{
    parent::setUp();

    $this->warning = new \PHPUnit\Framework\Warning();
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->warning->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
