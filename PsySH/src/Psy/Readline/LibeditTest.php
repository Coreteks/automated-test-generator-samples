<?php

namespace tests\Psy\Readline;

use Mockery as m;
use Psy\Readline\Libedit;

class LibeditTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Readline\Libedit
*/
protected $libedit;

public function setUp()
{
    parent::setUp();

    $this->libedit = new \Psy\Readline\Libedit();
}

public function testIsSupported0()
{
    // TODO: Your mock expectations here

    $actual = $this->libedit->isSupported();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListHistory0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$history) == false (line 41)
    // if (array_shift($history) !== '_HiStOrY_V2_') == false (line 49)

    $actual = $this->libedit->listHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListHistory1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$history) == false (line 41)
    // if (array_shift($history) !== '_HiStOrY_V2_') == true (line 49)

    $actual = $this->libedit->listHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListHistory2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$history) == true (line 41)

    $actual = $this->libedit->listHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
